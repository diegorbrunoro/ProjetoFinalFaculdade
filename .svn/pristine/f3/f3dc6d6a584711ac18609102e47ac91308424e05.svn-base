<?php

require_once 'model/diego_loginTO.php';

class diego_loginADO extends diego_loginTO {

    protected $sqlInsert = "insert into brunoro_usuarios (email,password)  values ('%s', '%s')";
    protected $sqlUpdate = "update brunoro_usuarios set email = '%s'  where password = %s";
    protected $sqlSelect = "select * from brunoro_usuarios %s ";
    protected $sqlDelete= "delete  from brunoro_usuarios where email  =  %s";

    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getEmail(), $this->getPassword());
        echo $sql;
        return $this->runExec($sql);
    }

    public function update() {
        
        $sql = sprintf($this->sqlUpdate, $this->getEmail(), $this->getPassword());
        echo $sql;
        return $this->runExec($sql);
            }

    public function select($options = "") {
        $sql = sprintf($this->sqlSelect, $options);
        echo $sql;
        return $this->runQuery($sql);
    }
    
    public function delete() {
        echo $sql;
        $sql = sprintf($this->sqlDelete, $this->getCpf());
        return $this->runExec($sql);
    }
    

    public function load() {
        $reg = $this->select("where email = " . $this->getEmail());
        $this->setPassword($reg[0] ['password']);
        return $this;
    }

}

?>