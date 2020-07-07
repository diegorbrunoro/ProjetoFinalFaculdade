<?php /* Smarty version Smarty-3.1.13, created on 2020-06-03 20:21:36
         compiled from "view\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10934643245ed7b989dc8467-54236822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1591208494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10934643245ed7b989dc8467-54236822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ed7b989e02df8_40848567',
  'variables' => 
  array (
    'variavel' => 0,
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed7b989e02df8_40848567')) {function content_5ed7b989e02df8_40848567($_smarty_tpl) {?><html>
<head> </head>

<body> </body>
<form action="index.php" method="post"> 
<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['variavel']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_rodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 Campo 1: <input type=text name=campo1  value = <?php echo $_smarty_tpl->tpl_vars['variavel']->value;?>
 >    <br> 
 
 
 
   <table border="1">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Valor</th>                
                <th>Ação</th>                
            </tr>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['valor'];?>
</td>
                <td><a href="index.php?acao=d&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">deletar</a></td>
                <td><a href="update.php?acao=u&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">atualizar</a></td>
                
           </tr>
            <?php } ?>

            
   </table> 
 
 

<input type=submit value="OK"> 

</form>
</html><?php }} ?>