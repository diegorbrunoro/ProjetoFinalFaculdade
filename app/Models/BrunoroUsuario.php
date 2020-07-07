<?php
require 'Model.php';

class BrunoroUsuario extends Model
{

    protected $tableName = "brunoro_usuario";

    /**
     * @param $login
     * @param $password
     * @return mixed
     */
    public function login(
        $login,
        $password
    )
    {
        $stmt = $this->getConnect()->prepare(
            sprintf(
                'SELECT * FROM `%s` WHERE usu_login="%s" AND usu_senha="%s"',
                $this->getTableName(),
                $login,
                $password
            )
        );

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $name
     * @param $login
     * @param $password
     * @return mixed
     */
    public function create(
        $name,
        $login,
        $password
    )
    {
        try {
            $stmt = $this->getConnect()->prepare(
                sprintf(
                    'INSERT INTO `%s` (usu_nome, usu_login, usu_senha) VALUES (?, ?, ?)',
                    $this->getTableName()
                )
            );
            return $stmt->execute([$name, $login, $password]);
        } catch (PDOException $e) {
            return false;
        }
    }

}
