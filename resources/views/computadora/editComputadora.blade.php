<x-compVer-layout>
<body>
    <x-slot name="head">
        <h1>Editar computadora</h1>
    </x-slot>
    <x-slot name="body">
        @include('parciales.formError')
        <form action="{{ route('computadora.update', $computadora) }}" method="POST">
            @csrf
            @method('PATCH')
            <label for="marca">Marca:</label>
            <input type="text" name="marca" value="{{ old('marca') ?? $computadora->marca }}">
            <br>
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" value="{{ old('modelo') ?? $computadora->modelo }}">
            <br>
            <label for="numserie">Numero de serie:</label>
            <input type="text" name="numserie" value="{{ old('numserie') ?? $computadora->numserie }}">
            <br>
            <label for="cpu">Procesador:</label>
            <input type="text" name="cpu" value="{{ old('cpu') ?? $computadora->cpu }}">
            <br>
            <label for="ram">Memoria RAM:</label>
            <input type="text" name="ram" value="{{ old('ram') ?? $computadora->ram }}">
            <br>
            <label for="hdd">Almacenamiento:</label>
            <input type="text" name="hdd" value="{{ old('hdd') ?? $computadora->hdd }}">
            <br>
            <label for="gpu">Tarjeta Grafica:</label>
            <input type="text" name="gpu" value="{{ old('gpu') ?? $computadora->gpu }}">
            <br>
            <select name="os" id="os">
                <option value="">---</option>
                <option value="Windows" @selected(old('os') == 'Windows' ?? $computadora->os == 'Windows')>Windows</option>
                <option value="MacOS" @selected(old('os') == 'MacOS' ?? $computadora->os == 'MacOS')>MacOS</option>
                <option value="Linux" @selected(old('os') == 'Linux' ?? $computadora->os == 'Linux')>Linux</option>
                <option value="Otro" @selected(old('os') == 'Otro' ?? $computadora->os == 'Otro')>Otro</option>
            </select>
            <br>
            <select name="estado" id="estado">
                <option value="">---</option>
                <option value="Usandose" @selected(old('estado') == 'Usandose' ?? $computadora->estado == 'Usandose')>Usandose</option>
                <option value="Stock" @selected(old('estado') == 'Stock' ?? $computadora->estado == 'Stock')>Stock</option>
                <option value="Mantenimiento" @selected(old('estado') == 'Mantenimiento' ?? $computadora->estado == 'Mantenimiento')>Mantenimiento</option>
            </select>
            <br>
            <select name="ubicacion" id="ubicacion">
                <option value="">---</option>
                <option value="LAB01" @selected(old('ubicacion') == 'LAB01' ?? $computadora->ubicacion == 'LAB01')>LAB01</option>
                <option value="LAB02" @selected(old('ubicacion') == 'LAB02' ?? $computadora->ubicacion == 'LAB02')>LAB02</option>
                <option value="LAB03" @selected(old('ubicacion') == 'LAB03' ?? $computadora->ubicacion == 'LAB03')>LAB03</option>
                <option value="LAB04" @selected(old('ubicacion') == 'LAB04' ?? $computadora->ubicacion == 'LAB04')>LAB04</option>
                <option value="LAB05" @selected(old('ubicacion') == 'LAB05' ?? $computadora->ubicacion == 'LAB05')>LAB05</option>
                <option value="BODEGA" @selected(old('ubicacion') == 'BODEGA' ?? $computadora->ubicacion == 'BODEGA')>BODEGA</option>
                <option value="TALLER" @selected(old('ubicacion') == 'TALLER' ?? $computadora->ubicacion == 'TALLER')>TALLER</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </x-slot>   
</body>
</x-compVer-layout>