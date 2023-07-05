<?php
extract ($_REQUEST);

if (isset($_REQUEST['cont'])){
    echo "Error de consultar datos o no esta registrado";
}

if (isset($_REQUEST['pass'])){
    echo "error de contraseña o Nombre de Usuario";
}

if (isset($_REQUEST['ses'])){
    echo "Entrada realizada";
}


?>