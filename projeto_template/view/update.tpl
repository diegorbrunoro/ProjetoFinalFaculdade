<html>
<head> </head>

<body> </body>
<form action="update.php" method="post"> 
{include file="inc_menu.tpl"}
{$variavel}
{include file="inc_rodape.tpl"}

 Id    : <input type=text name=idp  value = {$id}></input>
      <br> 
 Campo 1: <input type=text name=campo1  value = {$variavel} > </input>
 
 


 
    
 
<td><a href="index.php">voltar</a></td>
<input type=submit value="OK"> 


</form>
</html>