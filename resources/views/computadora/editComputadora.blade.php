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
            <label for="os">Sistema Operativo:</label>
            <select name="os" id="os">
                <option value="">---</option>
                <option value="Windows" @if(old('os') == 'Windows' || $computadora->os == 'Windows') selected @endif>Windows</option>
                <option value="MacOS" @if(old('os') == 'MacOS' || $computadora->os == 'MacOS') selected @endif>MacOS</option>
                <option value="Linux" @if(old('os') == 'Linux' || $computadora->os == 'Linux') selected @endif>Linux</option>
                <option value="Otro" @if(old('os') == 'Otro' || $computadora->os == 'Otro') selected @endif>Otro</option>
            </select>
            <br>
            <label for="estado">Estatus:</label>
            <select name="estado" id="estado">
                <!--option value="Mantenimiento" @selected(old('estado') == 'Mantenimiento' ?? $computadora->estado == 'Mantenimiento')>Mantenimiento</option-->
                <option value="Usandose" @if(old('estado') == 'Usandose' || $computadora->estado == 'Usandose') selected @endif>Usandose</option>
                <option value="Stock" @if(old('estado') == 'Stock' || $computadora->estado == 'Stock') selected @endif>Stock</option>
                <option value="Mantenimiento" @if(old('estado') == 'Mantenimiento' || $computadora->estado == 'Mantenimiento') selected @endif>Mantenimiento</option>

            </select>
            <br>
            <label for="ubicacion">Ubicacion:</label>
            <select name="ubicacion" id="ubicacion">
                <option value="">---</option>
                <option value="LAB01" @if(old('ubicacion') == 'LAB01' || $computadora->ubicacion == 'LAB01') selected @endif>LAB01</option>
                <option value="LAB02" @if(old('ubicacion') == 'LAB02' || $computadora->ubicacion == 'LAB02') selected @endif>LAB02</option>
                <option value="LAB03" @if(old('ubicacion') == 'LAB03' || $computadora->ubicacion == 'LAB03') selected @endif>LAB03</option>
                <option value="LAB04" @if(old('ubicacion') == 'LAB04' || $computadora->ubicacion == 'LAB04') selected @endif>LAB04</option>
                <option value="LAB05" @if(old('ubicacion') == 'LAB05' || $computadora->ubicacion == 'LAB05') selected @endif>LAB05</option>
                <option value="BODEGA" @if(old('ubicacion') == 'BODEGA' || $computadora->ubicacion == 'BODEGA') selected @endif>BODEGA</option>
                <option value="TALLER" @if(old('ubicacion') == 'TALLER' || $computadora->ubicacion == 'TALLER') selected @endif>TALLER</option>
            </select>
            <br>
            <x-button class="ms-4">
                    {{ __('Enviar') }}
            </x-button>
        </form>
    </x-slot>   
</body>
</x-compVer-layout>