<form class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            name="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo Vacante"
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            id="salario"
            name="salario" 
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full"
        >
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select 
            id="categoria"
            name="categoria" 
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full"
        >
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            name="empresa" 
            :value="old('empresa')" 
            placeholder="Empresa ej. Netflix, Uber, Shopify"
        />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último Día para postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            name="ultimo_dia" 
            :value="old('ultimo_dia')" 
        />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descipcion" :value="__('Descripción Puesto')" />
        <textarea 
            name="descipcion" 
            placeholder="Descripción general del puesto, experiencia"
            class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full h-72"
        ></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            name="imagen" 
        />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <x-primary-button >
        {{ __('Crear Vacante') }}
    </x-primary-button>
</form>
