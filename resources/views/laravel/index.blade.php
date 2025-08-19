<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Listado</title>
</head>
<body>
  <table border="1" cellpadding="6">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Teléfono</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($registro as $row)
        <tr>
          <td>{{ $row->id }}</td>
          <td>{{ $row->nombre }}</a></td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->telefono ?? '—' }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
