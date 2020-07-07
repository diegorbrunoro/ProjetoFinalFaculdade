<?php

require_once 'model/perfisTO.php';

class perfisADO extends perfisTO {
    
    protected $sqlInsert = "insert into perfil(descricao, ativo) 
                            values ('%s', 1)";							
							
    protected $sqlUpdate = "update perfil 
                            set ativo = '%s'
                            where id = %s";			
							
    protected $sqlAltera = "update perfil 
                            set descricao = '%s'
                            where id = %s";								
							
    protected $sqlSelect = "select * from perfil %s";
	
	public function insert() {
        $sql = sprintf($this->sqlInsert,$this->getDescricao(),$this->getAtivo());
        return $this->runExec($sql);
    }

    public function update(){
        $sql = sprintf($this->sqlUpdate,
                        $this->getAtivo(),
                        $this->getId());
        return $this->runExec($sql);
    }
	
    public function altera(){
        $sql = sprintf($this->sqlAltera,$this->getDescricao(), $this->getId());
        return $this->runExec($sql);
    }	
	
    public function select($options=""){
        $sql = sprintf($this->sqlSelect, $options);
        return $this->runQuery($sql);
    }
    
    public function load(){
        $reg = $this->select("where id = " . $this->getId());
        $this->setDescricao($reg[0] ['descricao']);
		$this->setAtivo($reg[0] ['ativo']);
        return  $this;
    }
}
?>