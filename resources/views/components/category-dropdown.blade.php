<div>
    <x-dropdown>
        <x-slot name="trigger">
            <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
    
                <x-icon name="down-arrow" class="transform -rotate-90 absolute pointer-events-none"/>
            </button>
        </x-slot>
    
    
        <x-dropdown-item href="/" :active="request()->routeIs('home')">
            All
        </x-dropdown-item>
    
    
        @foreach ($categories as $category)
            <x-dropdown-item href="/categories/{{ $category->slug }}" :active="isset($currentCategory) && $currentCategory->is($category)">
                {{ ucwords($category->name) }}
            </x-dropdown-item>
    
            {{-- <a href="/categories/{{ $category->slug }}"
                class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white
         --}}
        @endforeach
        </x-dropdown>
</div>