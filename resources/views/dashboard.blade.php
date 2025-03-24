<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10 px-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Manage Pages Card -->
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center">
                <div class="text-blue-500 text-4xl">
                    
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mt-4">
                    Manage Pages
                </h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">
                    Create, edit, and delete your CMS pages easily.
                </p>
                <a href="{{ route('pages.index') }}" 
                    class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold text-lg py-4 px-6 rounded-xl transition">
                    Manage Pages
                </a>
            </div>

            <!-- Guide / How to Use Card -->
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center">
                <div class="text-green-500 text-4xl">
                    
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mt-4">
                    How to Use
                </h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">
                    Learn how to set up and customize your CMS.
                </p>
                <a href="{{ route('guide.howToUse') }}" 
                    class="mt-4 inline-block bg-green-500 hover:bg-green-700 text-white font-bold text-lg py-4 px-6 rounded-xl transition">
                    Learn More
                </a>
            </div>

            <!-- Settings Card -->
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center">
                <div class="text-yellow-500 text-4xl">
                    
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mt-4">
                    Settings
                </h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">
                    Adjust your preferences and configurations.
                </p>
                <a href="#" 
                    class="mt-4 inline-block bg-yellow-500 hover:bg-yellow-700 text-white font-bold text-lg py-4 px-6 rounded-xl transition">
                    Open Settings
                </a>
            </div>

        </div>
    </div>

</x-app-layout>
