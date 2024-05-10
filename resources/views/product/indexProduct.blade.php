<x-prodIndex-layout>
<body>
    <h1>Listado de Productos</h1>
        <x-slot name="head">
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencias</th>
                <th>Categoria</th>
                <th>Estatus</th>
                <th>Acciones</th>
        </x-slot>
        <x-slot name="foot">
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencias</th>
                <th>Categoria</th>
                <th>Estatus</th>
                <th>Acciones</th>
        </x-slot>
        <x-slot name="body">
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock_quantity }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->status }}</td>
                    <td>
                        <a href="{{ route('product.show', $product) }}">Ver</a> |
                        <a href="{{ route('product.edit', $product) }}">Editar</a> |
                        <a href="{{ route('product.destroy', $product) }}" onclick="event.preventDefault();
                        document.getElementById('delete-form').submit();">
                        Eliminar
                        </a>

                        <form id="delete-form" action="{{ route('product.destroy', $product) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-slot>
</body>
</x-prodIndex-layout>