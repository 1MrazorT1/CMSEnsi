<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight flex items-center space-x-2">
             <span>How to Use the CMS</span>
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-8 bg-gray-900 text-white shadow-lg rounded-lg">
        <!-- Welcome Section -->
        <h3 class="text-xl font-bold text-white mb-6 flex items-center space-x-2">
             <span>Welcome to the CMS Guide</span>
        </h3>
        
        <p class="text-gray-300">Follow these steps to create and edit pages efficiently:</p>

        <!-- Step-by-Step Instructions -->
        <div class="mt-6 space-y-4">
            <div class="flex items-start space-x-3">
                <span class="text-blue-400 text-xl"></span>
                <p><strong>Create New Page:</strong> Click <span class="text-blue-400 font-semibold">"Create New Page"</span> to add a new page.</p>
            </div>
            <div class="flex items-start space-x-3">
                <span class="text-green-400 text-xl"></span>
                <p><strong>Use the Editor:</strong> Format content using the <span class="text-green-400 font-semibold">rich text editor (TinyMCE)</span>.</p>
            </div>
            <div class="flex items-start space-x-3">
                <span class="text-yellow-400 text-xl"></span>
                <p><strong>Save Your Work:</strong> Click <span class="text-yellow-400 font-semibold">"Save"</span> when you're done.</p>
            </div>
            <div class="flex items-start space-x-3">
                <span class="text-purple-400 text-xl"></span>
                <p><strong>Edit Pages:</strong> Go to the <span class="text-purple-400 font-semibold">CMS dashboard</span> and click "Edit".</p>
            </div>
        </div>

        <!-- Formatting Options -->
        <div class="mt-8 p-6 bg-gray-800 rounded-lg">
            <h4 class="text-lg font-bold text-white flex items-center space-x-2">
                 <span>Formatting Options</span>
            </h4>
            <ul class="list-disc list-inside text-gray-300 mt-3 space-y-2">
                <li><strong>B</strong> for <b>Bold</b>, <em>I</em> for <i>Italic</i>, <u>U</u> for <u>Underline</u>.</li>
                <li>Use <span class="text-yellow-300">text color & background color</span> options to highlight content.</li>
                <li>Click <span class="text-green-300">"Insert Image"</span> to upload pictures.</li>
            </ul>
        </div>

        <!-- Help and Back Button -->
        <div class="mt-8 flex justify-between items-center">
            <p class="text-gray-400">Need more help? Contact the admin.</p>
            <a href="{{ route('dashboard') }}" 
                class="inline-block bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                ⬅ Back to Dashboard
            </a>
        </div>

        <!-- YouTube Video Section -->
        <div class="mt-10">
    <h4 class="text-lg font-bold text-white mb-4 flex items-center space-x-2">
         <span>Video Tutorial</span>
    </h4>
    <div class="relative w-full" style="padding-bottom: 56.25%; position: relative; height: 0; overflow: hidden;">
        <iframe class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg"
            src="https://www.youtube.com/embed/nq4IxPW5bdM?rel=0" 
            title="CMS Tutorial" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
</div>

    </div>
</x-app-layout>
