<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Personal Portfolio') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold">Hi, I'm [Your Name]</h1>
        <p class="mt-2 text-gray-600">A passionate developer & designer.</p>

        <div class="grid grid-cols-2 gap-6 mt-6">
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">Projects</h3>
                <p class="mt-2 text-gray-600">A showcase of my best work.</p>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">Skills</h3>
                <p class="mt-2 text-gray-600">Expert in Web Development, UI/UX, and more.</p>
            </div>
        </div>

        <a href="#" class="mt-6 inline-block px-6 py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600">
            Contact Me
        </a>
    </div>
</x-app-layout>
