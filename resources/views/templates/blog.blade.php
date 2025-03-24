<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog Page') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold">Latest Articles</h1>
        <p class="mt-2 text-gray-600">Stay updated with our latest insights.</p>

        <div class="grid grid-cols-2 gap-6 mt-6">
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">How to Start a Blog</h3>
                <p class="mt-2 text-gray-600">A step-by-step guide to launching your blog.</p>
                <a href="#" class="text-blue-500">Read More →</a>
            </div>
            <div class="p-6 bg-gray-100 shadow-md rounded-lg">
                <h3 class="text-xl font-bold">SEO Best Practices</h3>
                <p class="mt-2 text-gray-600">Improve your site's ranking with these tips.</p>
                <a href="#" class="text-blue-500">Read More </a>
            </div>
        </div>
    </div>
</x-app-layout>
