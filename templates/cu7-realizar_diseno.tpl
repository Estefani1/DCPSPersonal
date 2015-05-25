<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
<form action="{$gvar.l_global}cu7-realizar_diseno.php?option=add" method="post" enctype="multipart/form-data"> 

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
                        {foreach $dispositivo as $disp}
                            <option name="dispositivo" value="{$disp->get('codigo')}">{$disp->get('codigo')}</option> 
                        {/foreach}
                    </select></td>
            </tr>
            <tr>
                <td><b>Software:</b></td>
                <td>  <select name="software" id="mySelect" onchange="myFunction()">
                        <option>Seleccione</option>
                        {section loop=$software name=i }
                            <option value= {$software[i]->get('codigo')}>  {$software[i]->get('codigo')}</option>  
                        {/section}
                    </select></td>

            </tr>

        </tbody>
    </table></br>

    <section class="cdetallesoftware" id="iddetallesoftware">
        <b>Detalles del software:</b></br> 
        Lenguaje:
        {section loop=$software name=i }
            <a class="csoft" id="idsoft_{$software[i]->get('codigo')}">  {$software[i]->get('lenguaje')}</a>  
        {/section}
    </section>

    <section class="cdetalledispositivo" id="iddetalledispositivo">
        <b>Detalles del dispositivo:</b></br>  
        {section loop=$dispositivo name=i }
            <a class="cdisp" id="iddisp_{$dispositivo[i]->get('codigo')}"> Funcion del dispositivo: {$dispositivo[i]->get('funcion')}</a> 
            <a  class="cdisp1" id="iddisp1_{$dispositivo[i]->get('codigo')}">Costo del dispositivo:  {$dispositivo[i]->get('costo')}</a> 
        {/section}
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

