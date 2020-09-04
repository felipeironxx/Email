<?php /* Smarty version Smarty-3.1.13, created on 2020-08-27 10:00:27
         compiled from "view/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13550446515ea32eaa467be7-02900739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6afda07839fa59f9f95ac75bf89fa4f20bfb3e1a' => 
    array (
      0 => 'view/index.tpl',
      1 => 1598533225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13550446515ea32eaa467be7-02900739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ea32eaa46ae08_61525387',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea32eaa46ae08_61525387')) {function content_5ea32eaa46ae08_61525387($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<h1>Upload do Arquivo para o Servidor FTP</h1>
    
    
<form action="envia.php" method="post" enctype="multipart/form-data">
    Arquivo: <input type="file" name="arquivo">
    <input type="submit" value="Enviar">
</form>


<?php echo $_smarty_tpl->getSubTemplate ("view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>