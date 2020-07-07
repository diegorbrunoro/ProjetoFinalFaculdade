<?php

session_start();

$_SESSION["id"] = session_id();
//session_destroyfdb(); //destroi a secao;
$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];

/// Coencta no Banco
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica se tudo esta OK na conexão
if ($conn->connect_error) {
    die("Problema de conexao: " . $conn->connect_error);
}
//realiza a Query recebendo os parametros do cadastro
$sql = "INSERT INTO brunoro_usuario(usu_nome, usu_endereco) VALUES ('" . $nome . "', "
        . "'" . $endereco . "')";

//Se estiver tudo correto retorna o OK da execção caso contrario informar motivo do erro
if ($conn->query($sql) === TRUE) { 
    echo "Dados salvo com sucesso";
} else {
    echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();
?>