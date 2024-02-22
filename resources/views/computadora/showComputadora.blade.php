<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info de Computadora</title>
</head>
<body>
    <h1>Computadora ID {{ $computadora->id }}</h1>
    <ul>
        <li>Marca: {{ $computadora->marca }}</li>
        <li>Modelo: {{ $computadora->modelo }}</li>
        <li>Numero de serie: {{ $computadora->numserie }}</li>
        <li>Procesador: {{ $computadora->cpu }}</li>
        <li>Memoria RAM: {{ $computadora->ram }}</li>
        <li>Almacenamiento: {{ $computadora->hdd }}</li>
        <li>Tarjeta gráfica: {{ $computadora->gpu }}</li>
        <li>Sistema Operativo: {{ $computadora->os }}</li>
        <li>Estado: {{ $computadora->estado }}</li>
        <li>ubicacion: {{ $computadora->ubicacion }}</li>
    </ul>
</body>
</html>