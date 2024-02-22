<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado</title>
</head>
<body>
    <h1>Listado de Computadoras</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Ubicacion</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computadoras as $computadora)
                <tr>
                    <td>{{ $computadora->marca }}</td>
                    <td>{{ $computadora->modelo }}</td>
                    <td>{{ $computadora->estado }}</td>
                    <td>{{ $computadora->ubicacion }}</td>
                    <td>{{ $computadora->created_at }}</td>
                    <td>
                        <a href="{{ route('computadora.show', $computadora) }}">Ver</a> |
                        <a href="{{ route('computadora.edit', $computadora) }}">Editar</a> |
                        <form action="{{ route('computadora.destroy', $computadora) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>