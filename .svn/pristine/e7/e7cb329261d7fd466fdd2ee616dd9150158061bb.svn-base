
<?php
require "middleware/middleware_login.php";

$arquivo = fopen('Teste.txt','r');
if ($arquivo == false) 
    echo ('O arquivo não existe.');

while (!feof ($arquivo)){
    $line=fgets($arquivo);
    echo $line;
}

fclose ($arquivo);





?>