<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Detalle</title>
</head>
<body>
  <table border="1" cellpadding="6">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>ID</th>
      </tr>
    </thead>
    <tbody>
      @foreach ([$registro] as $row)
        <tr>
          <td>{{ $row->nombre }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->telefono ?? '—' }}</td>
          <td>{{ $row->id }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <p><a href="{{ route('laravel.index') }}">← Volver al listado</a></p>
</body>
</html>
