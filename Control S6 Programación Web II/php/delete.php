<?php

//Conexion con Servidor

//Campos de la conexion
$usuario = "root";
$contraseña = "root"; 
$servidor = "localhost";
$basededatos = "concesionario";

//Creando conexion
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $basededatos);

//Validamos si la conexion es correcta
if($conexion-> connect_error){
    die("Conexión Fallida: ".$conexion-> connect_error);
}else{
    echo "Conexion Exitosa al Servidor";
}

echo "<br>"."<br>";

$matricula = $_POST["matricula"];

// Eliminar registros a nuestra tabla
$delete = "DELETE FROM `autos` WHERE `matricula` = '$matricula';" ;
$eliminarRegistro = mysqli_query($conexion, $delete);

//Validamos si el dato se elimino correctamente, en caso que si mostramos el dato, en caso contrario enviamos un mensaje de error
if($eliminarRegistro){
    echo "Dato Eliminado";
    echo "<br>";
    echo $matricula;
}else{
    echo "Ha ocurrido un problema, favor ingresar un codigo_del_producto valido";
}

?>