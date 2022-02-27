<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        <fieldset>
            <legend>Crear Base de Datos</legend>
        
            <form action="php/crearbase.php" method="post">
                <button type="submit">Crear DDBB</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Crear Tabla</legend>

            <form action="php/creartabla.php" method="post">
                <button type="submit">Crear Tabla</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Seleccionar todos los productos</legend>

            <form action="php/select.php" method="post">
                <button type="submit">Seleccionar Todo</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Insertar nuevo registro</legend>

            <form action="php/insert.php" method="post">
                <div>
                    Patente: <input type="text" name="matricula" placeholder="AA1111 ó AAAA11">
                    <br><br/>
                    N° de Motor: <input type="text" name="serial_motor" placeholder="N° de Motor">
                    <br><br/>
                    N° de Chasis: <input type="text" name="serial_carroceria" placeholder="N° de Chasis">
                    <br><br/>
                    Marca: <input type="text" name="marca" placeholder="Marca Vehículo">
                    <br><br/>
                    Modelo: <input type="text" name="modelo" placeholder="Modelo Vehículo">
                    <br><br/>
                    Año Vehículo: <input type="number" name="anio" placeholder="1997">
                    <br><br/>
                    Color del Vehículo: <input type="text" name="color" placeholder="Rojo">
                    <br><br/>
                    Precio: <input type="number" inputmode="decimal" name="precio" placeholder="$1.200.000">
                </div>
                <button type="submit" name="insertar">Insertar</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Actualizar Registro</legend>

            <form action="php/update.php" method="post">
                <div>
                Patente: <input type="text" name="matricula" placeholder="AA1111 ó AAAA11">
                </div>
                <br><br/>
                <div>
                Color del Vehículo: <input type="text" name="color" placeholder="Rojo">
                </div>
                <button type="submit" name="actualizar">Actualizar</button>
            </form>
        </fieldset>
    </section>

    <section>
        <fieldset>
            <legend>Eliminar registro</legend>

            <form action="php/delete.php" method="post">
                <div>
                Patente: <input type="text" name="matricula" placeholder="AA1111 ó AAAA11">
                </div>
                <button type="submit" name="eliminar">Eliminar</button>
            </form>
        </fieldset>
    </section>

</body>
</html>