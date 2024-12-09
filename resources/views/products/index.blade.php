<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>
    <div class="t-60 max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($products->isEmpty())
        <p>No hay productos disponibles.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>
                    <strong>{{ $product->name }}</strong><br>
                    Tipo: {{ $product->type->name }}<br> <!-- Mostrar tipo (relación con la tabla types) -->
                    Ubicación: {{ $product->location->name }}<br> <!-- Mostrar ubicación (relación con la tabla location) -->
                    Cantidad: {{ $product->quantity }} {{ $product->quantityType->name }}<br> <!-- Mostrar cantidad con su tipo -->
                </li>
            @endforeach
        </ul>
    @endif
    <div>
</x-app-layout>
