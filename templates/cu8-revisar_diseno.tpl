<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<html>
    {if isset($diseno)}
        <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
        <body>    
            <form action="{$gvar.l__global}cu8-revisar_diseno.php?option=add" method="post">

                <table>
                    <tbody>
                    <b>Seleccionar prediseño: </b>
                    <select name="codigo" id="mySelect" onchange="myFunction()">
                        <option value="Seleccione codigo">Seleccione codigo</option>
                        {section loop=$diseno name=i }
                            <option value={$diseno[i]->get('codigo')}>{$diseno[i]->get('codigo')}</option>                 
                        {/section}
                    </select><br />
                    <tr>
                        <td>
                            <a  class="des" id="desc"> Imagen del diseño:</a> 
                        </td>
                    </tr>
                    <tr>

                        <td>  
                            {section loop=$diseno name=i }
                                <a  class="res_viabilidad" id="res_viabilidad_{$diseno[i]->get('codigo')}" name="imagen" value="{$diseno[i]->get('imagen')}" > <div class="outter"><img src="images/{$diseno[i]->get('imagen')}" width="350" height="350" class="image-circle"/></div> </a>                 
                                    {/section}
                        </td>
                    </tr>
                    <tr>
                        <td class="des1" id="desc1">
                            <br />
                            <a >Calificar diseño:</a> <br />

                            <select name="evaluacion">
                                <option > aprobado</option>
                                <option > No aprobado</option>
                            </select><br />

                            <input type="submit" value="Enviar"/>

                        </td>

                    </tr>

                    </tbody>
                </table>

                <script>
                    function myFunction() {
                        var x = $("#mySelect").val();
                        $('.res_viabilidad').hide();
                        $('#res_viabilidad_' + x).show();

                        $('.des').hide();
                        $('#desc').show();

                        $('.res_causa').hide();
                        $('#res_causa_' + x).show();

                        $('.des1').hide();
                        $('#desc1').show();

                    }
                    $(document).ready(function () {
                        $('.res_viabilidad').hide();
                        $('.des').hide();
                        $('.des1').hide();
                    });
                </script>
            </form>
        </body>
    {/if}
</html>