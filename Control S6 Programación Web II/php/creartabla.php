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

echo "<br>";

//Creacion Tabla
$createTable = "CREATE TABLE autos(
matricula VARCHAR(10) PRIMARY KEY,
serial_motor VARCHAR(20) NOT NULL,
serial_carroceria VARCHAR(30) NOT NULL,
marca VARCHAR(20) NOT NULL,
modelo VARCHAR(20) NOT NULL,
anio INT(6) NOT NULL,
color VARCHAR(15),
precio DECIMAL(14,2)
)";
if($conexion->query($createTable) === true){
    echo "tabla creada correctamente";
}else{
    die("Error al crear la tabla: ".$conexion->error);
}

?>