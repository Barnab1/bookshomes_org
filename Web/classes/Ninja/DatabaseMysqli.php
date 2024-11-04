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

    }
    
    
  
