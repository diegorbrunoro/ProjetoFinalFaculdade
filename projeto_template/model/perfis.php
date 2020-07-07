<?php
require_once 'model/perfisADO.php';

class perfis extends perfisADO{
    
    protected $sqlSelectJoin = "select * from perfil %s";
    
    public function selectjoin ($options=""){
        $sql = sprintf($this->sqlSelectJoin, $options);
        return $this->runQuery($sql);
    }
	
	protected $selectListaPermissaoPerfil = "select mi.id as id, m2.descricao as menu_pai, m.descricao as menu, mi.descricao as menu_item, m.id as id_menu, '0' as possui_permissao
											 from menu_item mi
											 inner join menu m on m.id = mi.id_menu
											 left join menu m2 on m2.id = m.id_pai %s";
    
    public function selectListaPermissaoPerfil ($options=""){
        $sql = sprintf($this->selectListaPermissaoPerfil, $options);
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