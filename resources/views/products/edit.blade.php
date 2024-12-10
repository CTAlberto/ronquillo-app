<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between mb-4">
            <!-- Título -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Nuevo Producto') }}
            </h2>
        </div>
    </x-slot>

    <section>
        <form method="POST" action="{{ route('products.storeEdit', ['id' => $product->id]) }}" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
            @csrf <!-- Directiva para agregar el token CSRF -->
            <input type="hidden" id="id" name="id" value="{{ $product->id }}">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}" required
                    class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
        
            <div class="mb-4">
                <label for="type_id" class="block text-gray-700 font-medium">Tipo:</label>
                <select name="type_id" id="type_id" required
                    class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id == $product->type_id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            <div class="mb-4">
                <label for="location_id" class="block text-gray-700 font-medium">Ubicación:</label>
                <select name="location_id" id="location_id" required
                    class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}" {{$location->id == $product->location_id ? 'selected' : ''}}>
                            {{ $location->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 font-medium">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="{{$product->quantity}}" required
                    class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
        
            <div class="mb-6">
                <label for="quantity_type_id" class="block text-gray-700 font-medium">Tipo de cantidad:</label>
                <select name="quantity_type_id" id="quantity_type_id" required
                    class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @foreach ($quantity_types as $qt)
                        <option value="{{ $qt->id }}" {{ $qt->id == $product->quantity_type_id ? 'selected' : '' }}>
                            {{ $qt->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            <div class="flex justify-center mt-20">
                <input type="submit" value="Guardar"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none" style="background-color: #2563eb !important; hover:bg-blue-700 !important;">
                
            </div>            

        </form>
        
    </section>
</x-app-layout>