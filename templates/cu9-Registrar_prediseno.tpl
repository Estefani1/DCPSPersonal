<!--Para usar la ñ-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<form action="{$gvar.l__global}cu9-Registrar_prediseno.php?option=Agregar_prediseno" method="post">
    <b>Registrar prediseño</b>
    <body>
        <table>
            <tbody>
                <tr>
                    <td>Ingrese el codigo del prediseño por favor: </td>
                    <td><input type="text" name="codigo" /></td>
                </tr>
                <tr>
                    <td>Seleccione la idea asociada a este prediseño</td>
                    <td>
                        <select name="idea" id="mySelect" onchange="myFunction()" >
                            <option >Seleccione</option>
                            {section loop=$ide name=i }
                                <option value="{$ide[i]->get(nombre)}">{$ide[i]->get(nombre)}</option>                 
                            {/section}

                        </select>

                    </td><br />
            </tr>
            <tr>
                <td><input type="submit" value="Registrar" name="Registrar" /></td>
            </tr>
            </tbody>
        </table>
    </body>
</form>