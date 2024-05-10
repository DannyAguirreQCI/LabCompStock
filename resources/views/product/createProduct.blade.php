<x-compCrear-layout>
<body>
    <x-slot name="head">
        <h1>Agregar producto</h1>
    </x-slot>
    <x-slot name="body">
        @include('parciales.formError')
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            
            <label for="name">Nombre:</label>
            <input type="text" style="height: 30px;" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="description">Descripcion:</label>
            <input type="text" style="height: 30px;" name="description" value="{{ old('description') }}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            
            <label for="price">Precio:</label>
            <input type="text" style="height: 30px;" name="price" value="{{ old('price') }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="stock_quantity">Existencias:</label>
            <input type="text" style="height: 30px;" name="stock_quantity" value="{{ old('stock_quantity') }}">
            @error('stock_quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="category">Categoria:</label>
            <select name="category" id="category">
                <option value="Procesadores" @selected(old('category') == 'Procesadores')>Procesadores</option>
                <option value="Tarjetas Madre" @selected(old('category') == 'Tarjetas Madre')>Tarjetas Madre</option>
                <option value="Tarjetas Gráficas" @selected(old('category') == 'Tarjetas Gráficas')>Tarjetas Gráficas</option>
                <option value="Almacenamiento" @selected(old('category') == 'Almacenamiento')>Almacenamiento</option>
                <option value="Fuentes de Alimentacion" @selected(old('category') == 'Fuentes de Alimentacion')>Fuentes de Alimentacion</option>
                <option value="Gabinetes" @selected(old('category') == 'Gabinetes')>Gabinetes</option>
                <option value="Refrigeracion" @selected(old('category') == 'Refrigeracion')>Refrigeracion</option>
                <option value="Monitores" @selected(old('category') == 'Monitores')>Monitores</option>
                <option value="Teclados" @selected(old('category') == 'Teclados')>Teclados</option>
                <option value="Ratones" @selected(old('category') == 'Ratones')>Ratones</option>
                <option value="Otro" @selected(old('category') == 'Otro')>Otro</option>
            </select>
            <br>

            <label for="status">Estatus:</label>
            <select name="status" id="status">
                <option value="Activo" @selected(old('status') == 'Activo')>Activo</option>
                <option value="Descontinuado" @selected(old('status') == 'Descontinuado')>Descontinuado</option>
            </select>
            <br>

            <x-button class="ms-4">
                    {{ __('Enviar') }}
            </x-button>
        </form>
    </x-slot>
</body>
</x-compCrear-layout>