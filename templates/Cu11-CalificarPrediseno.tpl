<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<html>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}Cu11-CalificarPrediseno.php?option=calificar" method="post" name="calificar">
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
            <script>
                function myFunction() {
                    var x = $("#mySelect").val();

                    $('.res_viabilidad').hide();
                    $('#res_viabilidad_' + x).show();

                    $('.res_causa').hide();
                    $('#res_causa_' + x).show();

                    $('.cdetalle').hide();
                    $('#iddetalle').show();

                    $('[id-prediseno]').hide();

                    // $('.cmasdetalle').hide();
                }
                function detalles() {
                    var x = $("#mySelect").val();

                    //   $('.cmasdetalle').hide();

                    $('[id-prediseno]').hide();
                    $('[id-prediseno="' + x + '"]').show();
                    /*   $('#idmasdetalle').show();
                     
                     $('.res_sof').hide();
                     $('#res_sof_' + x).show();
                     
                     $('.res_len').hide();
                     $('#res_len_' + x).show();
                     
                     $('.res_disp').hide();
                     $('#res_disp_' + x).show();
                     
                     $('.res_cosd').hide();
                     $('#res_cosd_' + x).show();
                     
                     $('.res_fund').hide();
                     $('#res_fund_' + x).show();*/
                }
                $(document).ready(function () {
                    $('.cdetalle').hide();
                    $('[id-prediseno]').hide();
                });
            </script>
        </form>
    </body>
</html>