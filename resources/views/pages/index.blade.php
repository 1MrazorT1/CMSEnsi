<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CMS - Manage Pages') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <!-- Create New Page Button -->
        <div class="mb-4">
            <a href="{{ route('pages.chooseType') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                 Create New Page
            </a>
        </div>

        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 p-2">Title</th>
                    <th class="border border-gray-300 p-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pages as $page)
                <tr>
                    <td class="border border-gray-300 p-2">{{ $page->title }}</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <!-- View Button -->
                        <a href="{{ route('pages.show', $page->slug) }}"
                           class="px-3 py-1 bg-blue-500 text-black rounded hover:bg-blue-600">
                            View
                        </a>

                        <!-- Edit Button -->
                        <a href="{{ route('pages.edit', $page) }}"
                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 ml-2">
                             Edit
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('pages.destroy', $page) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1 bg-red-500 text-black rounded hover:bg-red-600"
                                    onclick="return confirm('Are you sure you want to delete this page?');">
                                 Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="text-center p-4">No pages found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>