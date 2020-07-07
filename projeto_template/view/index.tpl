<html>
<head> </head>

<body> </body>
<form action="index.php" method="post"> 
{include file="inc_menu.tpl"}
{$variavel}
{include file="inc_rodape.tpl"}

 Campo 1: <input type=text name=campo1  value = {$variavel} >    <br> 
 
 
 
   <table border="1">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Valor</th>                
                <th>Ação</th>                
            </tr>
            {foreach from=$lista item=row}
            <tr>
                <td>{$row.id}</td>
                <td>{$row.nome}</td>
                <td>{$row.valor}</td>
                <td><a href="index.php?acao=d&id={$row.id}">deletar</a></td>
                <td><a href="update.php?acao=u&id={$row.id}">atualizar</a></td>
                
           </tr>
            {/foreach }

            
   </table> 
 
 

<input type=submit value="OK"> 

</form>
</html>