<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Otra Pagina</title>
</head>
<body>
    <table border='1' cellpadding="6">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($collection as $item)
          <tr>
            <td>{{$registro -> id}}</td>
            <td></td>
            <td>Roberto</td>
            <td>roberto.huamani@gmail.com</td>
            <td>999670209</td>
            <td></td>
          </tr>
          @endforeach
    </table>
</body>
</html>