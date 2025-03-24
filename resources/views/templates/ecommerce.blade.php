<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('E-commerce Page') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold">Online Store</h1>
        <p class="mt-2 text-gray-600">Shop the latest products now!</p>

        <div class="grid grid-cols-3 gap-6 mt-6">
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">Product 1</h3>
                <p class="mt-2 text-gray-600">$29.99</p>
                <a href="#" class="text-blue-500">Buy Now →</a>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">Product 2</h3>
                <p class="mt-2 text-gray-600">$49.99</p>
                <a href="#" class="text-blue-500">Buy Now →</a>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">Product 3</h3>
                <p class="mt-2 text-gray-600">$19.99</p>
                <a href="#" class="text-blue-500">Buy Now →</a>
            </div>
        </div>
    </div>
</x-app-layout>
