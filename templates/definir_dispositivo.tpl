<!--Para usar la �-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
<div class="square">
    <form action="{$gvar.l_global}definir_dispositivo.php?option=add" method="post">
        <b>Definir dispositivo</b>
        <table width="30%" border="0" cellpadding="0" cellspacing="5">   
            <tbody>
                <tr>
                    <td><b>Ingrese el codigo del dispositivo</b></td>
                    <td>
                        <input type="text" name="codigo" />
                    </td>
                </tr>
                <tr>
                    <td><b>Ingrese el costo del dispositivo</b></td>
                    <td>
                        <input type="text" name="costo" /><br />
                    </td>
                </tr>
                <tr>
                    <td><b>Ingrese la funcion del dispositivo</b></td>
                    <td>
                        <input type="text" name="funcion" /><br />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name="prediseno" id="mySelect" onchange="myFunction()" >
                            <option>Seleccione el predise�o </option>
                            {section loop=$predis name=i }

                                <option value= {$predis[i]->get(codigo)}>{$predis[i]->get('codigo')}</option>                 
                            {/section}
                        </select>
                    </td>
                </tr>
                <tr  class="cideaprediseno" id="idideaprediseno">
                    <td><b>Idea del dispositivo:</b></td>
                    <td>

                        {section loop=$predis name=i }
                            <a class="cidea" id="ididea_{$predis[i]->get('codigo')}"> {$predis[i]->get('idea')}</a>
                        {/section}


                    </td>
                </tr>
                <tr><td></td>
                    <td> <input class="btn btn-primary" type="submit" value="Definir dispositivo" /></td>
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
</div>