<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agency Page') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold">Welcome to Our Agency</h1>
        <p class="mt-2 text-gray-600">We provide professional solutions to grow your business.</p>

        <div class="grid grid-cols-3 gap-6 mt-6">
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Brand Strategy</h3>
                <p class="mt-2 text-gray-600">Helping businesses build strong brands.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Creative Design</h3>
                <p class="mt-2 text-gray-600">Innovative design for a modern look.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Digital Marketing</h3>
                <p class="mt-2 text-gray-600">SEO, Ads, and Social Media growth strategies.</p>
            </div>
        </div>
    </div>
</x-app-layout>
