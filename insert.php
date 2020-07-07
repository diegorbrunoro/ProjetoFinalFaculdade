<?php
$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";
/// Verifica a conexao
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Problema de conexao: " . $conn->connect_error);
}
//Comando que será executado no banco
// insere na tablela cliente com suas respectivas colunas e valores
$sql = "INSERT INTO cliente (nome, sobrenome) VALUES ('João', 'Silva')";

if ($conn->query($sql) === TRUE) { //aqui executa a o comando
  echo "Dados salvo com sucesso";
} else {
  echo "Error ao inserir " . $sql . "<br>" . $conn->error;
}
//Aqui fecha a conexao
$conn->close();
?>
