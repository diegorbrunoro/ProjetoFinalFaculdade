<?php
require ROOT_DIR . '/vendors/smarty/libs/Smarty.class.php';

class Controller
{

    private $Smarty;

    public function __construct()
    {
        $this->setupSmarty();
    }

    /**
     * Inicia o Smart Template com pré configuração
     */
    private function setupSmarty()
    {
        $this->Smarty = new Smarty;
        $this->Smarty->debugging = false;
        $this->Smarty->caching = false;
        $this->Smarty->cache_lifetime = 120;
    }

    /**
     * Passa variável pro Smart Template
     * @param $key
     * @param $value
     * @return $this
     */
    public function assign($key, $value)
    {
        $this->Smarty->assign($key, $value);
        return $this;
    }

    /**
     * Retorna a VIEW do TPL
     * @param $name
     */
    public function view($name)
    {
        $this->Smarty->display(ROOT_DIR . '/resources/views/' . $name . '.tpl');
    }

}
