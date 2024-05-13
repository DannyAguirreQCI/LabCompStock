<x-prodIndex-layout>
@php
    $computers = App\Models\Computadora::all();
@endphp
    <body>
        <h1>Carrito de compras</h1>
            <x-slot name="head">
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Estatus</th>
                    <th>Total</th>
                    <th>Acciones</th>
            </x-slot>
            <x-slot name="foot">
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Estatus</th>
                <th>Total</th>
                <th>Acciones</th>
            </x-slot>
        <x-slot name="body">
            @if ($cart->products->isEmpty())
                <p>Su carrito está vacío.</p>
            @else

                    @foreach ($cart->products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->status }}</td>
                            <td>{{ $product->price * $product->pivot->quantity }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                <p>Total del carrito: {{ $cart->total }}</p>
            @endif
        </x-slot>
    </body>
</x-prodIndex-layout>