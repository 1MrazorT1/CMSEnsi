<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Landing Page') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg text-center">
        <h1 class="text-4xl font-bold">Welcome to Our Service</h1>
        <p class="mt-2 text-gray-600">Start your journey with us today!</p>

        <a href="#" class="mt-6 inline-block px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">
            Get Started
        </a>

        <div class="grid grid-cols-3 gap-6 mt-8">
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Feature 1</h3>
                <p class="mt-2 text-gray-600">Benefit-driven content here.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Feature 2</h3>
                <p class="mt-2 text-gray-600">Explain why users should choose this.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Feature 3</h3>
                <p class="mt-2 text-gray-600">Showcase your unique value.</p>
            </div>
        </div>
    </div>
</x-app-layout>
