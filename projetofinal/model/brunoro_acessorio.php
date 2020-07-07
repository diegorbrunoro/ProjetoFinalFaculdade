<?php
require_once 'model/diego_acessorioADO.php';

class brunoro_acessorio extends diego_acessorioADO{
    
    protected $sqlSelect = "select * from brunoro_usuario %s";
    
    public function selectjoin ($options=""){
        $sql = sprintf($this->sqlSelectJoin, $options);
        return $this->runQuery($sql);
    }
	
    public function inativa() {
        $this->load();
        if ($this->getAtivo() == 1)
            $this->setAtivo (0);
        else
            $this->setAtivo (1);
        $this->update();
    }	
    
}
?>