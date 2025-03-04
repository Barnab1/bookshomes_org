<?php
namespace Ninja;
/**
 * class DatabaseMysqli
 * 
 * Insure connection to the database through
 * Mysqli extension of php
 * 
 */
class DatabaseMysqli {

    private $connection;
    private $table;
    private $primaryKey;
    private $className;
    private $constructArgs;


public function __construct(\mysqli $connection,string  $table, string $primaryKey, $className= '\stdClass',
    array $constructArgs = [])
    {
        $this->connection = $connection;
        $this->table = $table;
        $this->primaryKey = $primaryKey;
        $this->className=$className;
        $this->constructArgs = $constructArgs;
    }

    /**
     * query()
     * 
     * Treat every request to the database trying to prepare them first
     */
    private function query($sql,$params=[]) {

        $stmt = $this->connection->prepare($sql);
        if (!$stmt) {
            throw new \Exception("Erreur de préparation de la requête : " . $this->connection->error);
        }

        if (!empty($params)) {
            $types = '';
            $values = [];
            foreach ($params as $key => $value) {
                if ($value instanceof \DateTime) {
                    $types .= 's';
                    $values[] = $value->format('Y-m-d');
                } elseif (is_int($value)) {
                    $types .= 'i';
                    $values[] = $value;
                } elseif (is_string($value)) {
                    $types .= 's';
                    $values[] = $value;
                } else {
                    throw new \Exception("Type de données non pris en charge : " . gettype($value));
                }
            }
            $stmt->bind_param($types, ...$values);
        }

        if (!$stmt->execute()) {
            throw new \Exception("Erreur d'exécution de la requête : " . $stmt->error);
        }

        return $stmt;
    }


    /**
     * fetchAll()
     * 
     * return every lines of a table according
     * criterion 
     */
    public function fetchAll(string $where = null,$orderBy=null,$limit=null,$offset=null):array 
    
    {/**Tested */
        $query='SELECT * FROM `'. $this->table.'`';
        if($where){
            $query .= 'WHERE '. $where;
        }

        if($orderBy != null)
        {
            $query.='ORDER BY '.$orderBy  ;
        }

        if($limit !=null)
        {
            $query.=' LIMIT '. $limit;
        }

        if($offset !=null)
        {
            $query.=' OFFSET '. $offset;
        }

        $stmt  = $this->query($query);
        $result = $stmt->get_result();

        $objects = [];

        while($row = $result->fetch_object($this->className,$this->constructArgs))
        {
            $objects [] = $row;
        }
        return $objects;
    }

    public function total($field=null,$value=null)
    {
    $sql='SELECT COUNT(*) FROM `'.$this->table.'`';
    $parameters= [];

    if(!empty($field))
    {
        $sql.=' WHERE `'. $field. '`= :value';
        $parameters=['value'=>$value];
    }

    $result=$this->query($sql,$parameters);
    $row=$result->fetch();
    return $row[0];

}

/**
 * insert()
 * 
 * That function will insert data
 * inside database
 */
    public function insert(array $data):bool {

        $columns = implode(',', array_keys($data));

        $placeholders = implode(',', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO ". "`". $this->table. "` ($columns) VALUES ($placeholders)";
        
        $stmt = $this->query($sql, array_values($data));

        /**Je veux voir si c'est le même effet que l'on obtient si l'on utilisait
         * $this->pdo->lastInsertId();
         */
        $lastInsertedId = $this->connection->insert_id;

        /***
         *  Tester l'élément ci-dessus
         */
        return $this->connection->affected_rows > 0;
    }

    /**
     * update()
     * 
     * That function will help updating database
     * Return number of affected row
     * E.g: 
     *      $data = ["email"=>"bookshomes@gmail.com"];

     *      $answer = $this->squeezeDevelopperTable->update($data, "id = ?", [2]);
     * 
     */
    public function update( array $data, string $where, array $whereParams) {
        $setClause = [];
        foreach($data as $key=>$value){
            $setClause[] = "$key = ?";
        }

        $setClause = implode(", ",$setClause);

        $sql = "UPDATE $this->table SET $setClause WHERE $where";
        $params = array_values($data);
        $params = array_merge($params, $whereParams);

        $stmt = $this->query($sql,$params);

        return $stmt->affected_rows;
    }

    public function find($column,$value,$orderBy=null,$limit=null,$offset=null)
{
    $sql="SELECT * FROM `". $this->table."` WHERE `". $column ."` = '".$value. "'";
    $sql2 =" SELECT * FROM `squeezeDevelopper` WHERE `email` = 'abc@codingnepal.com'";
    echo $sql. '</br>';
    echo $sql2;

    if($orderBy !=null)
    {
        $sql.='ORDER BY '. $orderBy ;
    }

    if($limit !=null)
    {
        $sql.=' LIMIT '. $limit;
    }

    if($offset !=null)
    {
        $sql.=' OFFSET '. $offset;
    }

   $stmt = $this->query($sql);
    $result = $stmt->get_result();

   return $result->fetch_object($this->className,$this->constructArgs);
    
}

/**
 * delete()
 * 
 * Delete a record from database Table
 */
public function delete(string $where, array $params){
    $sql = "";
}

}



    
    

  
