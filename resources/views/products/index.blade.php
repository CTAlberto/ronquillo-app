<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between mb-4">
            <!-- Título -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Productos') }}
            </h2>
            <!-- Botón de filtros -->
            <button 
                id="toggleFilters" 
                class="p-2 text-white bg-blue-500 rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300"
            >
                Filtros
            </button>
        </div>
        

<!-- Contenedor de filtros -->
<div id="filtersContainer" class="hidden">
    <div class="mt-4 mb-4">
        <label for="type" class="block text-gray-700">Filtrar por tipo:</label>
        <select 
            id="type" 
            name="type" 
            class="form-select mt-1 block w-full" 
            onchange="showByType(this.value)"
        >
            <option value="">Selecciona un tipo</option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-4 mb-4">
        <label for="location" class="block text-gray-700">Filtrar por ubicación:</label>
        <select 
            id="location" 
            name="location" 
            class="form-select mt-1 block w-full" 
            onchange="showByLocation(this.value)"
        >
            <option value="">Selecciona una ubicación</option>
            @foreach ($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>
    </div>
</div>
    </x-slot>

    <div class="mt-10 t-60 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if ($products->isEmpty())
            <p>No hay productos disponibles.</p>
        @else
            <!--Cards-->
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

                            <button onclick="window.location.href='{{ route('products.edit', ['id' => $product->id]) }}'"  class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Acción</button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <button onclick="window.location.href='{{ route('products.create') }}'" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Nuevo Producto</button>
</x-app-layout>

<script>
    function showByType(typeId) {
        window.location.href = '/products/type/' + typeId;
    }
    function showByLocation(locationId) {
        window.location.href = '/products/location/' + locationId;
    }
    document.getElementById('toggleFilters').addEventListener('click', function () {
        const filtersContainer = document.getElementById('filtersContainer');
        filtersContainer.classList.toggle('hidden'); // Alterna la clase 'hidden'
    });
</script>
