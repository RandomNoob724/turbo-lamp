<x-dropdown>
    <x-slot name="trigger">
        <button
        class="text-left py-2 pl-3 text-sm font-semibold w-full lg:w-32 flex lg:inline-flex"
        >
        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Category'}}
        <x-down-arrow class="absolute pointer-events-none"></x-down-arrow>
        </button>
    </x-slot>
    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home')">View All</x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" :active="isset($currentCategory) && $currentCategory->is($category)">{{ ucwords($category->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>