<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<html>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/cu11-calificarprediseno.js" ></script>
    <body>    
        <form action="{$gvar.l__global}cu11-calificarprediseno.php?option=calificar" method="post" name="calificar">
            <b>Código del prediseño: </b>
            <select name="codigo" id="mySelect" onchange="myFunction()">
                <option > seleccione codigo</option>
                {section loop=$viabilidad name=i }
                    <option value= {$viabilidad[i]->get('prediseno')}>  {$viabilidad[i]->get('prediseno')}</option>                 
                {/section}
            </select><br />

            <section class="cdetalle" id="iddetalle">
                <a> Resultado:</a> <br />

                {section loop=$viabilidad name=i }
                    <a  class="res_viabilidad" id="res_viabilidad_{$viabilidad[i]->get('prediseno')}" > {$viabilidad[i]->get('resultado')}</a>                 
                {/section}


                <br />
                <a >Causa:</a> <br />

                {section loop=$viabilidad name=i }
                    <a  class="res_causa" id="res_causa_{$viabilidad[i]->get('prediseno')}" > {$viabilidad[i]->get('causa')}</a>                 
                {/section} <br />

                <input type="button" value="Mas detalle:" onclick="detalles()"><br /><br />

                <input type="submit" value="Aceptado" name="resultado" /><br/><br />
                <input type="submit" value="Rechazado" name="resultado" /><br /><br />
            </section><br />

            <section class="cmasdetalle" id="idmasdetalle" >

                {section loop=$software name=i }
                    <div id-prediseno="{$software[i]->get('prediseno')}">
                        <a  class="res_sof"> codigo de software: {$software[i]->get('codigo')}</a>
                        <a  class="res_len" > lenguaje del software: {$software[i]->get('lenguaje')}</a>
                    </div>
                {/section}<br />
                {section loop=$dispositivo name=i } 
                    <div id-prediseno="{$dispositivo[i]->get('prediseno')}" >
                        <a  class="res_disp" > codigo del dispositivo: {$dispositivo[i]->get('codigo')}</a>              
                        <a  class="res_cosd" > costo del dispositivo: {$dispositivo[i]->get('costo')}</a>
                        <a  class="res_fund" > funcion del dispositivo: {$dispositivo[i]->get('funcion')}</a>

                    </div>
                {/section}
            </section>

        </form>
    </body>
</html>