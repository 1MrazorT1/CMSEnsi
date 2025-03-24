<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMSEnsi - Build Your Website Easily</title>

    <!-- Fonts & Styles -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100">

    
    <section class="relative w-full h-screen bg-cover bg-center flex items-center justify-center" 
        style="background-image: url('{{ asset('images/welcome.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative text-center text-white px-6">
            <h1 class="text-5xl font-bold">Create Stunning Websites in Minutes</h1>
            <p class="mt-4 text-lg">CMSEnsi makes it easy to build, edit, and publish your content effortlessly.</p>
            <div class="mt-6">
                <a href="{{ route('pages.chooseType') }}" 
                    class="px-6 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg shadow-lg hover:bg-blue-600 transition">
                     Get Started
                </a>
                <a href="{{ route('register') }}" 
                    class="ml-4 px-6 py-3 border border-white text-white text-lg font-semibold rounded-lg hover:bg-white hover:text-black transition">
                     Sign Up
                </a>
            </div>
        </div>
    </section>

    
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold">Why Choose CMSEnsi?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold"> Easy to Use</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Drag and drop elements to create pages without coding.</p>
                </div>
                <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold"> Fast Performance</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Optimized for speed and efficiency.</p>
                </div>
                <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold"> Beautiful Templates</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Choose from a variety of pre-designed templates.</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold">Explore Our Templates</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                @foreach (['blog', 'landing', 'portfolio'] as $template)
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset("images/templates/$template.png") }}" alt="{{ $template }}" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">{{ ucfirst($template) }} Template</h3>
                            <a href="{{ route('pages.preview', $template) }}" 
                                class="mt-2 inline-block text-blue-500 font-semibold">
                                🔍 Preview
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-6xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold">What Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <div class="p-6 border rounded-lg shadow-md">
                    <p class="text-gray-600 dark:text-gray-300">"CMSEnsi helped me launch my business website in minutes!"</p>
                    <h4 class="text-blue-500 mt-4">- Taha</h4>
                </div>
                <div class="p-6 border rounded-lg shadow-md">
                    <p class="text-gray-600 dark:text-gray-300">"No coding required! It's just drag, drop, and publish!"</p>
                    <h4 class="text-blue-500 mt-4">- Med</h4>
                </div>
                <div class="p-6 border rounded-lg shadow-md">
                    <p class="text-gray-600 dark:text-gray-300">"Super intuitive, and the templates are stunning!"</p>
                    <h4 class="text-blue-500 mt-4">- Hamza</h4>
                </div>
            </div>
        </div>
    </section>

    
    <footer class="py-10 bg-gray-800 text-white text-center">
        <p>&copy; {{ date('Y') }} CMSEnsi. All rights reserved.</p>
        
    </footer>

</body>
</html>
