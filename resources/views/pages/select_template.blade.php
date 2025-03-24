<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Select a Template') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg text-center">
        <h1 class="text-3xl font-bold">Select a Template</h1>
        <p class="mt-2 text-gray-600">Pick a template for your new page:</p>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-6">
            <!-- Business Template -->
            <a href="{{ route('pages.create', ['template' => 'business']) }}" 
                class="p-6 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">
                <h3 class="text-xl font-bold"> Business</h3>
            </a>

            <!-- Blog Template -->
            <a href="{{ route('pages.create', ['template' => 'blog']) }}" 
                class="p-6 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">
                <h3 class="text-xl font-bold"> Blog</h3>
            </a>

            <!-- Portfolio Template -->
            <a href="{{ route('pages.create', ['template' => 'portfolio']) }}" 
                class="p-6 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">
                <h3 class="text-xl font-bold"> Portfolio</h3>
            </a>

            <!-- Agency Template -->
            <a href="{{ route('pages.create', ['template' => 'agency']) }}" 
                class="p-6 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">
                <h3 class="text-xl font-bold"> Agency</h3>
            </a>

            <!-- Startup Template -->
            <a href="{{ route('pages.create', ['template' => 'startup']) }}" 
                class="p-6 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">
                <h3 class="text-xl font-bold"> Startup</h3>
            </a>

            <!-- Landing Page Template -->
            <a href="{{ route('pages.create', ['template' => 'landing']) }}" 
                class="p-6 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">
                <h3 class="text-xl font-bold"> Landing Page</h3>
            </a>

            <!-- Personal Portfolio Template -->
            <a href="{{ route('pages.create', ['template' => 'personal']) }}" 
                class="p-6 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">
                <h3 class="text-xl font-bold"> Personal</h3>
            </a>
        </div>
    </div>
</x-app-layout>
