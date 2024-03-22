<x-compIndex-layout>
<body>
    <h1>Listado de Computadoras</h1>
        <x-slot name="head">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Ubicacion</th>
                <th>Fecha</th>
                <th>Acciones</th>
        </x-slot>
        <x-slot name="foot">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Ubicacion</th>
                <th>Fecha</th>
                <th>Acciones</th>
        </x-slot>
        <x-slot name="body">
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
                        <a href="{{ route('computadora.destroy', $computadora) }}" onclick="event.preventDefault();
                        document.getElementById('delete-form').submit();">
                        Eliminar
                        </a>

                        <form id="delete-form" action="{{ route('computadora.destroy', $computadora) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-slot>
</body>
</x-compIndex-layout>