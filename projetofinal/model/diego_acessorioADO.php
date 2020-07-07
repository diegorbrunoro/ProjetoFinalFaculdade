<?php

require_once 'model/diego_acessorioTO.php';

class diego_acessorioADO extends diego_acessorioTO {

    protected $sqlInsert = "insert into juliana_acessorio (id, descricao)  values ('%s', '%s')";
    protected $sqlUpdate = "update juliana_acessorio set descricao = '%s'  where id = %s";
    protected $sqlSelect = "select * from juliana_acessorio %s ";
    protected $sqlDelete= "delete  from juliana_acessorio where id  =  %s";

    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getId(), $this->getDescricao());
        //echo $sql;
        return $this->runExec($sql);
    }

    public function update() {
        
        $sql = sprintf($this->sqlUpdate,  $this->getDescricao(), $this->getId());
        //echo $sql;
        return $this->runExec($sql);
            }

    public function select($options = "") {
        $sql = sprintf($this->sqlSelect, $options);
        //echo $sql;
        return $this->runQuery($sql);
    }
    
    public function delete() {
        //echo $sql;
        $sql = sprintf($this->sqlDelete, $this->getId());
        return $this->runExec($sql);
    }
    

    public function load() {
        $reg = $this->select("where id = " . $this->getId());
        $this->setDescricao($reg[0] ['descricao']);
        return $this;
    }

}

?>
