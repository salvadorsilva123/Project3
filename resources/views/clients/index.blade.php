<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <p>Pagina Clientes</p>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">apellido</th>
          <th scope="col">correo</th>
          <th scope="col">telefono</th>
          <th scope="col">direccion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
            <td>Marcos</td>
            <td>Perez</td>
            <td>MarcosP@gmail.com</td>
            <td>912345678</td>
            <td>matta123</td>
        </tr>
        
      </tbody>

    </table>

    <a href="{{ route('create.client') }}">
      <button>crear</button>
    </a>
  </body>
</html>