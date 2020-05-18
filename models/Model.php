<?php 

require_once('Database.php');

class Model extends Database {

    
    protected $_table;

    public function __construct($resetTable = NULL)
    {
        parent::__construct();
        if ($resetTable !== NULL)
        {
            $this->_table = $resetTable;
        }

    }

    public function findAll($joins= [], $option = NULL) 
    {
        $sql = "SELECT * 
                FROM {$this->_table}";
        if (!empty($joins)) 
        {
            foreach($joins as $tableJ=>$colJ) 
            {
                $sql .= " LEFT JOIN {$tableJ} ON {$this->_table}.{$colJ} = {$tableJ}.{$colJ} ";
            }
        }
        if ($option != NULL) 
        {
            $sql .= " $option ";
        }
        $req = $this->_pdo->prepare($sql);
        $req->execute();
        $items = $req->fetchAll();
        $req->closeCursor();
        return $items;
    }

    public function findBy($filter, $id, $multi = false, $joins= []) 
    {
        $sql = "SELECT * 
                FROM {$this->_table}";
        if (!empty($joins)) {
            foreach($joins as $table=>$col)
            $sql .= " LEFT JOIN {$table} ON {$this->_table}.{$col} = {$table}.{$col} ";
        }
        $sql .= " WHERE {$filter} = :id ";
        $req = $this->_pdo->prepare($sql);
        $req->execute(compact('id'));
        if ($multi) {
            $item = $req->fetchAll();
        } else {
            $item = $req->fetch();
        }
        $req->closeCursor();
        return $item;
    }

    public function deleteBy($filter, $id) 
    {
        $sql = "DELETE  
                FROM {$this->_table} 
                WHERE {$filter} = :id";
        $req = $this->_pdo->prepare($sql);
        $req->execute(compact('id'));
        $req->closeCursor();
    }

    public function updateInto($data, $filter, $id)
    {
        $sql = "UPDATE {$this->_table} SET ";
        foreach($data as $k=>$v)
        {
            $sql .= ' '.$k.' = "'.$v.'" ,'; 
        }
        $sql = substr($sql,0,-1);
        $sql .= " WHERE {$filter} = :id ";
        $req = $this->_pdo->prepare($sql);
        $req->execute(compact('id'));
        $req->closeCursor();
    }

    public function insertInto($data) 
    {
        $sql = 'INSERT INTO '.$this->_table.' (';
        foreach($data as $k=>$v)
        {
            $sql .= ''.$k.','; 
        }
            $sql = substr($sql,0,-1);
            $sql .= ') VALUES (';
        foreach($data as $v)
        {
            $sql .= '"'.$v.'",';
        }
            $sql = substr($sql,0,-1);
            $sql .= ')';	
        
        $req = $this->_pdo->prepare($sql);
        $req->execute();
        $req->closeCursor();
    }




}