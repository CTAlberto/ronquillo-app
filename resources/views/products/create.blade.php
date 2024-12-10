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
        <form>
            <label>Nombre:</label>
            <input type="text" id="name">
            <label>Tipo:</label>
            <select>
                <option>Selecciona un tipo</option>
                <option value="1">Tipo 1</option>
                <option value="2">Tipo 2</option>
            </select>
            <label>Ubicación:</label>
            <select>
                <option>Selecciona una ubicación</option>
                <option value="1">Ubicación 1</option>
                <option value="2">Ubicación 2</option>
            </select>
            <label>Cantidad:</label>
            <select>
                <option>Selecciona un tipo</option>
                <option value="1">Tipo 1</option>
                <option value="2">Tipo 2</option>
            </select>
            <input type="submit" value="Guardar">
        </form>
    </section>
</x-app-layout>