<x-compVer-layout>
<body>
    <x-slot name="head">
        <h1>Editar producto</h1>
    </x-slot>
    <x-slot name="body">
        @include('parciales.formError')
        <form action="{{ route('product.update', $product) }}" method="POST">
            @csrf
            @method('PATCH')
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="{{ old('name') ?? $product->name }}">
            <br>
            <label for="description">Descripcion:</label>
            <input type="text" name="description" value="{{ old('description') ?? $product->description }}">
            <br>
            <label for="price">Precio:</label>
            <input type="text" name="price" value="{{ old('price') ?? $product->price }}">
            <br>
            <label for="stock_quantity">Existencias:</label>
            <input type="text" name="stock_quantity" value="{{ old('stock_quantity') ?? $product->stock_quantity }}">
            <br>
            <label for="category">Categoria:</label>
            <select name="category" id="category">
                <option value="Procesadores" @if(old('category') == 'Procesadores' || $product->category == 'Procesadores') selected @endif>Procesadores</option>
                <option value="Tarjetas Madre" @if(old('category') == 'Tarjetas Madre' || $product->category == 'Tarjetas Madre') selected @endif>Tarjetas Madre</option>
                <option value="Tarjetas Gráficas" @if(old('category') == 'Tarjetas Gráficas' || $product->category == 'Tarjetas Gráficas') selected @endif>Tarjetas Gráficas</option>
                <option value="Almacenamiento" @if(old('category') == 'Almacenamiento' || $product->category == 'Almacenamiento') selected @endif>Almacenamiento</option>
                <option value="Fuentes de Alimentacion" @if(old('category') == 'Fuentes de Alimentacion' || $product->category == 'Fuentes de Alimentacion') selected @endif>Fuentes de Alimentacion</option>
                <option value="Gabinetes" @if(old('category') == 'Gabinetes' || $product->category == 'Gabinetes') selected @endif>Gabinetes</option>
                <option value="Refrigeracion" @if(old('category') == 'Refrigeracion' || $product->category == 'Refrigeracion') selected @endif>Refrigeracion</option>
                <option value="Monitores" @if(old('category') == 'Monitores' || $product->category == 'Monitores') selected @endif>Monitores</option>
                <option value="Teclados" @if(old('category') == 'Teclados' || $product->category == 'Teclados') selected @endif>Teclados</option>
                <option value="Ratones" @if(old('category') == 'Ratones' || $product->category == 'Ratones') selected @endif>Ratones</option>
                <option value="Otro" @if(old('category') == 'Otro' || $product->category == 'Otro') selected @endif>Otro</option>
            </select>
            <br>
            <select name="status" id="status">
                <option value="Activo" @if(old('status') == 'Activo' || $product->status == 'Activo') selected @endif>Activo</option>
                <option value="Descontinuado" @if(old('status') == 'Descontinuado' || $product->status == 'Descontinuado') selected @endif>Descontinuado</option>
            </select>
            <br>
            <x-button class="ms-4">
                    {{ __('Enviar') }}
            </x-button>
        </form>
    </x-slot>   
</body>
</x-compVer-layout>