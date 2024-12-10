<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="mt-10 t-60 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if ($products->isEmpty())
            <p>No hay productos disponibles.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <h2 class="font-bold text-xl mb-2">{{ $product->name }}</h2>
                            <p class="text-gray-700 text-base">
                                Tipo: {{ $product->type->name }}<br>
                                <!-- Mostrar tipo (relación con la tabla types) -->
                                Ubicación: {{ $product->location->name }}<br>
                                <!-- Mostrar ubicación (relación con la tabla location) -->
                                Cantidad: {{ $product->quantity }} {{ $product->quantityType->name }}<br>
                                <!-- Mostrar cantidad con su tipo -->
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Acción</button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
