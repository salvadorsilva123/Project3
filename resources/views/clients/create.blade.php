<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="">
            <input type="text" name='name' placeholder="nombre"><br>
            <input type="text" name='last_name' placeholder="apellido"><br>
            <input type="text" name='phone' placeholder="telefono"><br>
            <input type="text" name='mail' placeholder="correo"><br>
            <input type="text" name='address' placeholder="direccion"><br>
            <input type="text" name='id' placeholder="id"><br>

            <button>crear</button>
            <button>eliminar</button>
        </form>

        <a href="{{ route('index.client') }}">
            <button>Volver</button>
        </a>

    </body>
</html>