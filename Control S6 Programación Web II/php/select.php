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

// Select, para traer todo los registros de la tabla
$select = "SELECT * FROM autos";
$registros = mysqli_query($conexion, $select);
$cantidadRegistros = mysqli_num_rows($registros);

//Mostramos la cantidad total de los registros que encontro nuestra consulta
echo $cantidadRegistros;

echo "<br>";

//Validamos si existen datos, en caso que si mostramos el dato o los datos, en caso contrario enviamos un mensaje de error
if($cantidadRegistros > 0){
    while($fila = mysqli_fetch_assoc($registros)){
        echo $fila["matricula"];
        echo " ";
        echo $fila["serial_motor"];
        echo " ";
        echo $fila["serial_carroceria"];
        echo " ";
        echo $fila["marca"];
        echo " ";
        echo $fila["modelo"];
        echo " ";
        echo $fila["anio"];
        echo " ";
        echo $fila["color"];
        echo " ";
        echo $fila["precio"];
        echo "<br>";
    }
}else{
    echo "La Base de dato esta vacía";
}

?>