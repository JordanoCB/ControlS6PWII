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

//Campos dinamicos que utilizaremos para la consulta "INSERT"
$matricula = $_POST["matricula"];
$serial_motor = $_POST["serial_motor"];
$serial_carroceria = $_POST["serial_carroceria"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$anio = $_POST["anio"];
$color = $_POST["color"];
$precio = $_POST["precio"];

// Insertar registros a nuestra tabla
$insert = "INSERT INTO `autos`
(`matricula`, `serial_motor`, `serial_carroceria`, `marca`, `modelo`, `anio`, `color`, `precio`)
VALUES ('$matricula', '$serial_motor', '$serial_carroceria', '$marca', '$modelo', '$anio', '$color', '$precio')" ;
$instrarRegistros = mysqli_query($conexion, $insert);

//Validamos si el dato se inserto correctamente, en caso que si mostramos el dato, en caso contrario enviamos un mensaje de error
if($instrarRegistros){
    echo "Dato insertado";
    echo "<br>";
    echo $matricula;
    echo $serial_motor;
    echo $serial_carroceria;
    echo $marca;
    echo $modelo;
    echo $anio;
    echo $color;
    echo $precio;
}else{
    echo "Ha ocurrido un problema, favor ingresar todos los campos";
}

?>