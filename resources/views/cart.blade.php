<x-compVer-layout>
<body>
    <x-slot name="head">
        <h1>Carrito de Compras</h1>
    </x-slot>
    <x-slot name="body">
        @if ($cart->products->isEmpty())
            <p>Su carrito está vacío.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart->products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->pivot->quantity }}</td>
                            <td>{{ $product->price * $product->pivot->quantity }}</td>
                            <td>
                                <!--form action="{{ route('cart.remove', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form-->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Total del carrito: {{ $cart->total }}</p>
            <a href="{{ route('checkout') }}">Realizar Pedido</a>
        @endif
    </x-slot>
</body>
</x-compVer-layout>