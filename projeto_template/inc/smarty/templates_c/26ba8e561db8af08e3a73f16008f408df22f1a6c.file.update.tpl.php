<?php /* Smarty version Smarty-3.1.13, created on 2020-06-03 21:05:02
         compiled from "view\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10507676725ed7ea71d631b1-48586592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26ba8e561db8af08e3a73f16008f408df22f1a6c' => 
    array (
      0 => 'view\\update.tpl',
      1 => 1591211099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10507676725ed7ea71d631b1-48586592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ed7ea71d9db47_08782856',
  'variables' => 
  array (
    'variavel' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed7ea71d9db47_08782856')) {function content_5ed7ea71d9db47_08782856($_smarty_tpl) {?><html>
<head> </head>

<body> </body>
<form action="update.php" method="post"> 
<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['variavel']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_rodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 Id    : <input type=text name=idp  value = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
></input>
      <br> 
 Campo 1: <input type=text name=campo1  value = <?php echo $_smarty_tpl->tpl_vars['variavel']->value;?>
 > </input>
 
 


 
    
 
<td><a href="index.php">voltar</a></td>
<input type=submit value="OK"> 


</form>
</html><?php }} ?>