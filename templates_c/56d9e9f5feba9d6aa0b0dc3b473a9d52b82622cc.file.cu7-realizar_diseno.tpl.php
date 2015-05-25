<?php /* Smarty version Smarty-3.0.9, created on 2015-05-25 09:46:48
         compiled from "C:/wamp/www/ProyectoDCPS/templates\cu7-realizar_diseno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53065562d368ed48c2-54420240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d9e9f5feba9d6aa0b0dc3b473a9d52b82622cc' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\cu7-realizar_diseno.tpl',
      1 => 1432540004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53065562d368ed48c2-54420240',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
cu7-realizar_diseno.php?option=add" method="post" enctype="multipart/form-data"> 

    <b>Realizar diseño</b>
    <table border="1">
        <tbody>
            <tr>
                <td><b>Código: </b></td>
                <td> <input type="text" name="codigo"/></td>
            </tr>
            <tr>
                <td><b>Dispositivo:</b></td>
                <td><select name="dispositivo"  id="mySelect1" onchange="myFunction1()">
                        <option>Seleccione</option>
                        <?php  $_smarty_tpl->tpl_vars['disp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dispositivo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['disp']->key => $_smarty_tpl->tpl_vars['disp']->value){
?>
                            <option name="dispositivo" value="<?php echo $_smarty_tpl->getVariable('disp')->value->get('codigo');?>
"><?php echo $_smarty_tpl->getVariable('disp')->value->get('codigo');?>
</option> 
                        <?php }} ?>
                    </select></td>
            </tr>
            <tr>
                <td><b>Software:</b></td>
                <td>  <select name="software" id="mySelect" onchange="myFunction()">
                        <option>Seleccione</option>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('software')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                            <option value= <?php echo $_smarty_tpl->getVariable('software')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
>  <?php echo $_smarty_tpl->getVariable('software')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
</option>  
                        <?php endfor; endif; ?>
                    </select></td>

            </tr>

        </tbody>
    </table></br>

    <section class="cdetallesoftware" id="iddetallesoftware">
        <b>Detalles del software:</b></br> 
        Lenguaje:
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('software')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <a class="csoft" id="idsoft_<?php echo $_smarty_tpl->getVariable('software')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
">  <?php echo $_smarty_tpl->getVariable('software')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('lenguaje');?>
</a>  
        <?php endfor; endif; ?>
    </section>

    <section class="cdetalledispositivo" id="iddetalledispositivo">
        <b>Detalles del dispositivo:</b></br>  
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('dispositivo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <a class="cdisp" id="iddisp_<?php echo $_smarty_tpl->getVariable('dispositivo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
"> Funcion del dispositivo: <?php echo $_smarty_tpl->getVariable('dispositivo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('funcion');?>
</a> 
            <a  class="cdisp1" id="iddisp1_<?php echo $_smarty_tpl->getVariable('dispositivo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
">Costo del dispositivo:  <?php echo $_smarty_tpl->getVariable('dispositivo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('costo');?>
</a> 
        <?php endfor; endif; ?>
    </section>

    <input type="file" name="imagen"/><br/><br/>
    <input type="submit" value="Realizar Diseño"/>

    <script>
        function myFunction() {
            var x = $('#mySelect').val();


            $('.cdetallesoftware').hide();
            $('#iddetallesoftware').show();
            $('.csoft').hide();
            $('#idsoft_' + x).show();
        }
        function myFunction1() {
            var y = $('#mySelect1').val();
            $('.cdetalledispositivo').hide();
            $('#iddetalledispositivo').show();
            $('.cdisp').hide();
            $('#iddisp_' + y).show();

            $('.cdisp1').hide();
            $('#iddisp1_' + y).show();


        }
        $(document).ready(function () {
            $('.cdetallesoftware').hide();
            $('.cdetalledispositivo').hide();

        });
    </script>

</form>

