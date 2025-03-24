<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold">Our Work</h1>
        <p class="mt-2 text-gray-600">Showcasing our best projects.</p>

        <div class="grid grid-cols-3 gap-6 mt-6">
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">Web Design</h3>
                <p class="mt-2 text-gray-600">Beautiful and responsive designs.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">Photography</h3>
                <p class="mt-2 text-gray-600">Capturing the best moments.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">Graphic Design</h3>
                <p class="mt-2 text-gray-600">Creative branding and logos.</p>
            </div>
        </div>
    </div>
</x-app-layout>
