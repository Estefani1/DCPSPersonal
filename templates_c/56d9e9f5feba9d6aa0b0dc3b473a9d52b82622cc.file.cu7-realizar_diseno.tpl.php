<?php /* Smarty version Smarty-3.0.9, created on 2015-05-16 17:42:36
         compiled from "C:/wamp/www/ProyectoDCPS/templates\cu7-realizar_diseno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190565557656ceaf771-10870431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d9e9f5feba9d6aa0b0dc3b473a9d52b82622cc' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\cu7-realizar_diseno.tpl',
      1 => 1431780666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190565557656ceaf771-10870431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
cu7-realizar_diseno.php?option=add" method="post">
<b>Realizar diseño</b><br/><br/>
<b>Código: </b><input type="text" name="codigo"/><br/><br/>
<b>Dispositivo:</b><select name="dispositivo">
<?php  $_smarty_tpl->tpl_vars['disp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dispositivo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['disp']->key => $_smarty_tpl->tpl_vars['disp']->value){
?>
<option name="dispositivo" value="<?php echo $_smarty_tpl->getVariable('disp')->value->get('codigo');?>
"><?php echo $_smarty_tpl->getVariable('disp')->value->get('codigo');?>
</option> 
<?php }} ?>
</select><br/><br/>
<input type="file" name="imagen"/><br/><br/>
<input type="submit" value="Realizar Diseño"/>
