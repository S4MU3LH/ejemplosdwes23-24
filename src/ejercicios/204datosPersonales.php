<?php

    $salida = "<html>";
    $salida.="<head><title>Datos Personales del Usuario ".$_POST['nombre']."</title></head>";
    $salida.="<body>
                <table>
                <tr>
                    <td>Nombre</td><td>".$_POST['nombre']."</td>
</tr>
<tr>
                    <td>Apellidos</td><td>".$_POST['apellidos']."</td>
</tr>
<tr>
                    <td>Correo Electrónico</td><td>".$_POST['email']."</td>
</tr>
<tr>
                    <td>Teléfono</td><td>".$_POST['telefono']."</td>
</tr>
<tr>
                    <td>Año de Nacimiento</td><td>".$_POST['anyo']."</td>
</tr>
</table>

                </body>
                </html>";
    echo $salida;