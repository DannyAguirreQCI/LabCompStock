<x-compVer-layout>
@php
    $computers = App\Models\Computadora::all();
@endphp

<body>
    <x-slot name="head">
        <h1>Productos Disponibles</h1>
    </x-slot>
    <x-slot name="body">
        <div class="container">
            <div class="row">
                @foreach($computers as $computer)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset($computer->image) }}" class="card-img-top" alt="{{ $computer->marca }}">
                            <div class="card-body">
                                <h5 class="card-title">Computadora</h5>
                                <h5 class="card-title">{{ $computer->marca }}</h5>
                                <p class="card-text">{{ $computer->cpu }}</p>
                                <p class="card-text">Precio: ${{ $computer->precio }}</p>
                                <form action="{{ route('cart.add', $computer ?? $product) }}" method="POST">
                                    @csrf
                                    <!-- Campo oculto para indicar el tipo -->
                                    <input type="hidden" name="type" value="{{ $computer ? 'computadora' : 'producto' }}">
                                    <button type="submit" class="btn btn-primary icon text-black-50">Agregar al Carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($products as $product)
                    @if ($product->status == 'Activo')
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">Componente</h5>
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text">Precio: ${{ $product->price }}</p>
                                    <form action="{{ route('cart.add', $product ?? $computer) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="type" value="{{ $product ? 'producto' : 'computadora'  }}">
                                        <button type="submit" class="btn btn-primary icon text-black-50">Agregar al Carrito</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </x-slot>
</body>
</x-compVer-layout>