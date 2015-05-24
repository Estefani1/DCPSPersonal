<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<html>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}Cu11-CalificarPrediseno.php?option=calificar" method="post" name="calificar">
            <b>C�digo del predise�o: </b>
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
                    <a  class="res_sof" id="res_sof_{$software[i]->get('prediseno')}" > codigo de software: {$software[i]->get('codigo')}</a>
                {/section}<br />
                {section loop=$software name=i }
                    <a  class="res_len" id="res_len_{$software[i]->get('prediseno')}" > lenguaje del software: {$software[i]->get('lenguaje')}</a>
                {/section}<br />
                {section loop=$dispositivo name=i }
                    <a  class="res_disp" id="res_disp_{$dispositivo[i]->get('prediseno')}" > codigo del dispositivo: {$dispositivo[i]->get('codigo')}</a>
                {/section}<br />
                {section loop=$dispositivo name=i }
                    <a  class="res_cosd" id="res_cosd_{$dispositivo[i]->get('prediseno')}" > costo del dispositivo: {$dispositivo[i]->get('costo')}</a>
                {/section}<br />
                {section loop=$dispositivo name=i }
                    <a  class="res_fund" id="res_fund_{$dispositivo[i]->get('prediseno')}" > funcion del dispositivo: {$dispositivo[i]->get('funcion')}</a>
                {/section}
            </section>


            <script>
                function myFunction() {
                    var x = $("#mySelect").val();

                    $('.res_causa').hide();
                    $('#res_causa_' + x).show();

                    $('.res_viabilidad').hide();
                    $('#res_viabilidad_' + x).show();

                    $('.cdetalle').hide();
                    $('#iddetalle').show();

                    $('.cmasdetalle').hide();
                }
                function detalles() {
                    var x = $("#mySelect").val();

                    $('.cmasdetalle').hide();
                    $('#idmasdetalle').show();

                    $('.res_sof').hide();
                    $('#res_sof_' + x).show();

                    $('.res_len').hide();
                    $('#res_len_' + x).show();

                    $('.res_disp').hide();
                    $('#res_disp_' + x).show();

                    $('.res_cosd').hide();
                    $('#res_cosd_' + x).show();

                    $('.res_fund').hide();
                    $('#res_fund_' + x).show();
                }
                $(document).ready(function () {
                    $('.cdetalle').hide();
                    $('.cmasdetalle').hide();
                });
            </script>
        </form>
    </body>
</html>