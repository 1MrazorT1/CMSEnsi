<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Startup Page') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-4xl font-bold">Revolutionizing the Industry</h1>
        <p class="mt-2 text-gray-600">Our startup is solving real-world problems.</p>

        <div class="grid grid-cols-3 gap-6 mt-8">
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Innovation</h3>
                <p class="mt-2 text-gray-600">We think outside the box.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Scalability</h3>
                <p class="mt-2 text-gray-600">Built for rapid growth.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Funding</h3>
                <p class="mt-2 text-gray-600">Supported by top investors.</p>
            </div>
        </div>

        <a href="#" class="mt-6 inline-block px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">
            Join Our Mission
        </a>
    </div>
</x-app-layout>
