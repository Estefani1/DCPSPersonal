<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<html>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}cu10-evaluar_viabilidad.php?option=add" method="post">

            <table width="40%" border="0" cellpadding="0" cellspacing="5">   
                <tbody>
                    <tr>
                        <td><b>Código de la viabilidad</b></td>
                        <td>
                            <input type="text" name="codigo" />
                        </td>
                    </tr>


                    <tr>
                        <td><b>Seleccione el prediseño</b></td>
                        <td>
                            <select name="prediseno" id="mySelect" onchange="myFunction()" >
                                <option>Prediseno</option>
                                {section loop=$predis name=i }
                                    <option value="{$predis[i]->get(codigo)}">{$predis[i]->get('codigo')}</option>                 
                                {/section}
                            </select>
                        </td>
                    </tr>
                    <tr  class="cideaprediseno" id="idideaprediseno">
                        <td>
                            <b>Idea del dispositivo:</b></td>
                        <td>
                            {section loop=$predis name=i }
                                <a class="cidea" id="ididea_{$predis[i]->get(codigo)}"> {$predis[i]->get('idea')}</a>
                            {/section}


                        </td>
                    </tr>
                    <tr>
                        <td><b>Resultado</b></td>
                        <td>
                            <select name="resultado" >
                                <option >Seleccione</option>
                                <option >Viable</option>
                                <option >No viable</option>
                                <option >Modificable</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Causa</b></td>
                        <td>             <textarea name = "causa" rows = "8" cols = "40" ></textarea> </td>
                    </tr>
                    <tr><td></td>
                        <td>  <input type="submit" value="Evaluar Viabilidad" /></td>
                    </tr>
                </tbody>
            </table>
            <script>
                function myFunction() {
                    var x = $("#mySelect").val();
                    $('#idideaprediseno').show();
                    $('#ididea_' + x).show();
                }
                $(document).ready(function () {
                    $('.cideaprediseno').hide();
                    $('.cidea').hide();

                });
            </script>


        </form>
    </body>
</html>