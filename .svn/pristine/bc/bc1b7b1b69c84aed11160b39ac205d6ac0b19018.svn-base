<?php

require_once 'session.php';

class dbConnection {

    private function Connection() {
        $host_db = "140.238.181.93";
        $name_db = "fdb";
        $user_db = "fdb";
        $pass_db = "fdb";

        try {
            $conecta = new PDO("mysql:host=$host_db;dbname=$name_db", $user_db, $pass_db);
            return $conecta;
        } catch (PDOException $e) {

            echo "Erro: " . $e->getMessage();
        }
    }

    public function runExec($sql) {
        $comando = $this->Connection()->exec($sql);
        return $comando;
    }

    //return id
    public function runExecId($sql) {
        $conectaId = $this->Connection();
        $comando = $conectaId->exec($sql);
        if ($comando)
            return $conectaId->lastInsertId();
        else
            return 0;
    }

    //return array dos dados
    public function runQuery($sql) {
        $reg = $this->Connection()->query($sql);
        return $reg->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>