<x-compVer-layout>
<body>
    <x-slot name="head">
        <h1>Computadora ID {{ $computadora->id }}</h1>
    </x-slot>
    <x-slot name="body">
        <ul>
            <li>Marca: {{ $computadora->marca }}</li>
            <li>Modelo: {{ $computadora->modelo }}</li>
            <li>Precio: {{ $computadora->precio }}</li>
            <li>Procesador: {{ $computadora->cpu }}</li>
            <li>Memoria RAM: {{ $computadora->ram }}</li>
            <li>Almacenamiento: {{ $computadora->hdd }}</li>
            <li>Tarjeta gráfica: {{ $computadora->gpu }}</li>
            <li>Sistema Operativo: {{ $computadora->os }}</li>
            <li>Estado: {{ $computadora->estado }}</li>
            <li>Ubicacion: {{ $computadora->ubicacion }}</li>
        </ul>
    </x-slot>
</body>
</x-compVer-layout>