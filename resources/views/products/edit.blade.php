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
        <form method="POST" action="{{ route('products.store') }}">
            @csrf <!-- Directiva para agregar el token CSRF -->
    
            <label>Nombre:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
    
            <label>Tipo:</label>
            <select name="type_id" required>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == $product->type_id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
    
            <label>Ubicación:</label>
            <select name="location_id" required>
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}"{{$location->id == $product->location_id ? 'selected' : ''}}>{{ $location->name }}</option>
                @endforeach
            </select>
    
            <label>Cantidad:</label>
            <input type="number" id="quantity" name="quantity" value="{{$product->quantity}}" required>
    
            <select name="quantity_type_id" required>
                @foreach ($quantity_types as $qt)
                    <option value="{{ $qt->id }}" {{ $qt->id == $product->quantity_type_id ? 'selected' : '' }}>
                        {{ $qt->name }}
                    </option>
                @endforeach
            </select>
    
            <input type="submit" value="Guardar">
        </form>
    </section>
</x-app-layout>