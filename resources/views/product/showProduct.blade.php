<x-compVer-layout>
<body>
    <x-slot name="head">
        <h1>Producto ID {{ $product->id }}</h1>
    </x-slot>
    <x-slot name="body">
        <ul>
            <li>Nombre: {{ $product->name }}</li>
            <li>Descripcion: {{ $product->description }}</li>
            <li>Precio: {{ $product->price }}</li>
            <li>Existencias: {{ $product->stock_quantity }}</li>
            <li>Categoria: {{ $product->category }}</li>
            <li>Estatus: {{ $product->status }}</li>
        </ul>
    </x-slot>
</body>
</x-compVer-layout>