
<link rel="stylesheet" href="css/login.css">

<form action="{$gvar.l__global}proponer_idea.php?option=Agregar" method="post">

    <div class="container">
        <div class="row login_box">
            <div class="col-md-12 col-xs-12" align="center">
                <div class="line"><h1>Satrack</h1></div>
                <div class="outter"><img src="images/perro.jpg" class="image-circle"/></div>   
                <h3>PROPONER IDEA</h3>
            </div>

            <div>

                <div>
                    <p>
                        &nbsp;&nbsp;  <label for="textfield">Fecha:</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style="font-size:14px; text-align:center;background-color:#2F4F4F; " size=20 type="date" name="fecha">
                    </p>
                </div>

                <div>
                    <p >
                        &nbsp;&nbsp;  <label  for="textfield">Nombre idea :</label>
                        <input style="font-size:14px; text-align:center;background-color:#2F4F4F; " size=20 type = text name="nombre" class="input"  ></td>

                    </p>
                </div>

                <div>
                    &nbsp;&nbsp;Descripcion
                    <h1>    &nbsp;&nbsp;<TEXTAREA style="font-size:14px; text-align:center;background-color:#2F4F4F; " size=20 COLS=40 ROWS=7 name="descripcion"> 
                 </TEXTAREA> &nbsp;</h1>
                </div>
                <div align="center">

                    <a><button class="btn btn-orange">Proponer</button></a>
          
                </div>

            </div>



        </div>
    </div>

</form>