<?php /* Smarty version Smarty-3.0.9, created on 2015-04-20 21:47:26
         compiled from "C:/wamp/www/ProyectoDCPS/templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2744553557ce93a678-81249698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '494cca0f9919e9eb71aab0915c81bf718f7f808f' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\login.tpl',
      1 => 1429559108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2744553557ce93a678-81249698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<link rel="stylesheet" href="css/login.css">
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
login.php?option=validarlogin" method="post">
    <title>Login</title>
    <div class="container">
        <div class="row login_box">
            <div class="col-md-12 col-xs-12" align="center">
                <div class="line"><h1>Satrack</h1></div>
                <div class="outter"><img src="images/perro.jpg" class="image-circle"/></div>   
                <h3>Bienvenido</h3>
            </div>

            <div class="col-md-12 col-xs-12 login_control">

                <div class="control">
                    <input type="text" class="form-control" name="Usuario" placeholder="Usuario"/>
                </div>

                <div class="control">
                    <input type="password" class="form-control" name="Contrasena" placeholder="Contraseña"/>
                </div>
                <div align="center">

                    <button class="btn btn-orange">Ingresar</button></a>


                </div>

            </div>



        </div>
    </div>
    <form>