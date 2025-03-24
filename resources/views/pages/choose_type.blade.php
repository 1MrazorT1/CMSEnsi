<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Choose Page Type') }}
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h3 class="text-lg font-semibold mb-4">How would you like to create your page?</h3>

        <div class="flex justify-center gap-6">
            <!-- Start from Scratch -->
            <a href="{{ route('pages.create') }}" 
                class="w-1/2 text-center px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                 Start from Scratch
            </a>

            <!-- Choose a Template -->
            <a href="{{ route('pages.selectTemplate') }}" 
               class="w-1/2 text-center px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                 Choose a Template
            </a>
        </div>
    </div>
</x-app-layout>
