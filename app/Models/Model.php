<?php
class Model
{

    private $connect;

    protected $tableName = "";

    public function __construct()
    {
        if (!$this->tableName)
            throw new Exception("Informe o nome da tabela no Model");

        $this->setTableName($this->tableName);
        $this->connect = new PDO(
            'mysql:host=162.241.2.225;dbname=taxisi49_bd_taxi',
            "taxisi49_diego",
            "540120"
        );
    }

    /**
     * @param mixed $tableName
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    /**
     * @return mixed
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @return PDO
     */
    public function getConnect()
    {
        return $this->connect;
    }

}
