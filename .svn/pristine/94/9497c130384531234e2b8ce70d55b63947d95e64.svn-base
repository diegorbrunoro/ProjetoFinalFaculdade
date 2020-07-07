<?php

require_once 'model/parametroTO.php';

class parametroADO extends parametroTO {

    protected $sqlInsert = "insert into parametro(tipo, nome, valor)  values ('%s', '%s', '%s')";
    protected $sqlUpdate = "update parametro set nome = '%s'  where id = %s";
    protected $sqlSelect = "select * from parametro %s ";
    protected $sqlDelete= "delete  from parametro where id  =  %s";

    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getTipo(), $this->getNome(), $this->getValor());
        echo $sql;
        return $this->runExec($sql);
    }

    public function update() {
        
        $sql = sprintf($this->sqlUpdate,  $this->getNome(), $this->getId());
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
        $sql = sprintf($this->sqlDelete, $this->getId());
        return $this->runExec($sql);
    }
    

    public function load() {
        $reg = $this->select("where id = " . $this->getId());
        $this->setTipo($reg[0] ['tipo']);
        $this->setNome($reg[0] ['nome']);
        $this->setValor($reg[0] ['valor']);
        return $this;
    }

}

?>