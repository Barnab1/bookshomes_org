<?php
namespace Ninja;

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

private function queryMysql($query)
    {
        $result = $this->connection->query($query);
        if (!$result) die($this->connection->error);
        return $result;
    }
private function processDates($fields)
    {
        foreach($fields as $key=>$value)
        {
            if($value instanceof \DateTime)
            {
                $fields[$key]=$value->format('Y-m-d');
            }
        }
        return $fields;
}

public function createTable($name, $query)
    {
    if($this->queryMysql("CREATE TABLE IF NOT EXISTS $name($query)")){
        echo "Table '$name' created or already exists.<br>";
    }else{
        echo 'Failed to create table '. $name;
    }
}

public function findAll($orderBy=null,$limit=null,$offset=null)
            {
            $query='SELECT * FROM `'. $this->table.'`';
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

            $result=$this->queryMysql($query);
            return $result->fetch_object($this->className,$this->constructArgs);
        }
public function findById($value){
    $sql='SELECT * FROM `'.$this->table. '` WHERE '.$this->primaryKey. '='. $value;
   
    $result=$this->queryMysql($sql);
    
    return $result->fetch_object($this->className,$this->constructArgs);
}

public function find($column,$value,$orderBy=null,$limit=null,$offset=null)
{
    $sql='SELECT * FROM `'.$this->table. '` WHERE `'.$column. '` = '. $value;
   

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

   $result =$this->queryMysql($sql);

   return $result->fetch_object($this->className,$this->constructArgs);
    
}
public function deleteWhere($column,$value)
{
    $sql='DELETE FROM `'. $this->table. '` WHERE `'.$column. '` = '. $value;
    $this->queryMysql($sql);
}

public function insert($record)
{
   
    //$sql='INSERT INTO `'.$table.'` (`joketext`,`jokedate`,`authorid`) VALUES (:joketext,:jokedate,:authorid)';
    $sql='INSERT INTO `'. $this->table.'`(';
    foreach($record as $key=>$value)
    {
        $sql.='`'. $key .'` ,';
    }
    $sql=rtrim($sql,',');

    $sql.=') VALUES (';

    foreach($record as $key=>$value)
    {
        $sql.=' :'.$key. ' ,';
    }
    $sql=rtrim($sql,',');

    $sql.=')';
    $record=$this->processDates($record);
        //var_dump($sql);
    $this->queryMysql($sql,$record);
    $this->connection->insert_id;

}
    }
    
    
  
