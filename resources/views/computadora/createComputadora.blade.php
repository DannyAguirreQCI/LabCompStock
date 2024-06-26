<x-compCrear-layout>
<body>
    <x-slot name="head">
        <h1>Registrar Computadora</h1>
    </x-slot>
    <x-slot name="body">
        @include('parciales.formError')
        <form action="{{ route('computadora.store') }}" method="POST">
            @csrf
            
            <label for="marca">Marca:</label>
            <input type="text" style="height: 30px;" name="marca" value="{{ old('marca') }}" required>
            @error('marca')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="modelo">Modelo:</label>
            <input type="text" style="height: 30px;" name="modelo" value="{{ old('modelo') }}">
            @error('modelo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            
            <label for="precio">Precio:</label>
            <input type="text" style="height: 30px;" name="precio" value="{{ old('precio') }}">
            @error('precio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="cpu">Procesador:</label>
            <input type="text" style="height: 30px;" name="cpu" value="{{ old('cpu') }}">
            @error('cpu')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="ram">Memoria RAM:</label>
            <input type="text" style="height: 30px;" name="ram" value="{{ old('ram') }}">
            @error('ram')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="hdd">Almacenamiento:</label>
            <input type="text" style="height: 30px;" name="hdd" value="{{ old('hdd') }}">
            @error('hdd')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>

            <label for="gpu">Tarjeta gráfica:</label>
            <input type="text" style="height: 30px;" name="gpu" value="{{ old('gpu') }}">
            @error('gpu')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <label for="os">Sistema Operativo:</label>
            <select name="os" id="os">
                <option value="Windows" @selected(old('os') == 'Windows')>Windows</option>
                <option value="MacOS" @selected(old('os') == 'MacOS')>MacOS</option>
                <option value="Linux" @selected(old('os') == 'Linux')>Linux</option>
                <option value="Otro" @selected(old('os') == 'Otro')>Otro</option>
            </select>
            <br>
            <label for="estado">Estatus:</label>
            <select name="estado" id="estado">
                <option value="Usandose" @selected(old('estado') == 'Usandose')>Usandose</option>
                <option value="Stock" @selected(old('estado') == 'Stock')>Stock</option>
                <option value="Mantenimiento" @selected(old('estado') == 'Mantenimiento')>Mantenimiento</option>
            </select>
            <br>
            <label for="ubicacion">Ubicacion:</label>
            <select name="ubicacion" id="ubicacion">
                <option value="LAB01" @selected(old('ubicacion') == 'LAB01')>LAB01</option>
                <option value="LAB02" @selected(old('ubicacion') == 'LAB02')>LAB02</option>
                <option value="LAB03" @selected(old('ubicacion') == 'LAB03')>LAB03</option>
                <option value="LAB04" @selected(old('ubicacion') == 'LAB04')>LAB04</option>
                <option value="LAB05" @selected(old('ubicacion') == 'LAB05')>LAB05</option>
                <option value="BODEGA" @selected(old('ubicacion') == 'BODEGA')>BODEGA</option>
                <option value="TALLER" @selected(old('ubicacion') == 'TALLER')>TALLER</option>
            </select>
            <br>
            <x-button class="ms-4">
                    {{ __('Enviar') }}
            </x-button>
        </form>
    </x-slot>
</body>
</x-compCrear-layout>