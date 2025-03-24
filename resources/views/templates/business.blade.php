<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Business Page') }}
        </h2>
    </x-slot>

<!-- Hero Section -->
<section class="relative w-full bg-cover bg-center h-[500px]" style="background-image: url('{{ asset('images/hero-banner.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative flex flex-col items-center justify-center h-full text-white text-center px-6">
        <h1 class="text-4xl font-bold">Conseil en transition professionnelle</h1>
        <p class="text-lg mt-4">Accompagnement à la création d'entreprise</p>
        <a href="#" class="mt-6 px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">📞 RÉN INFO GRATUIT</a>
    </div>
</section>

<!-- About Section -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800">À propos</h2>
        <div class="grid grid-cols-2 gap-10 mt-8">
            <img src="{{ asset('images/about.jpg') }}" class="rounded-lg shadow-md">
            <div>
                <p class="text-lg text-gray-600">
                    Nous accompagnons les professionnels dans leur reconversion et création d'entreprise...
                </p>
                <a href="#" class="mt-4 inline-block text-blue-500 font-semibold">En savoir plus →</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800">Nos prestations</h2>
        <div class="grid grid-cols-4 gap-6 mt-8">
            <div class="p-6 bg-white shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Bilan de Compétences</h3>
                <p class="text-gray-600 mt-2">Évaluez vos compétences et explorez vos options.</p>
                <a href="#" class="mt-4 inline-block text-blue-500 font-semibold">Découvrir</a>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Création d'Entreprise</h3>
                <p class="text-gray-600 mt-2">Accompagnement à la création d’entreprise.</p>
                <a href="#" class="mt-4 inline-block text-blue-500 font-semibold">Découvrir</a>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Développement Activité</h3>
                <p class="text-gray-600 mt-2">Stratégies pour booster votre activité.</p>
                <a href="#" class="mt-4 inline-block text-blue-500 font-semibold">Découvrir</a>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg text-center">
                <h3 class="text-xl font-bold">Orientation Pro</h3>
                <p class="text-gray-600 mt-2">Identifiez votre voie professionnelle.</p>
                <a href="#" class="mt-4 inline-block text-blue-500 font-semibold">Découvrir</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800">Témoignages</h2>
        <div class="grid grid-cols-3 gap-6 mt-8">
            <div class="p-6 border rounded-lg shadow-md">
                <p class="text-gray-600">"Super accompagnement, j'ai pu créer mon entreprise en toute sérénité."</p>
                <h4 class="text-blue-500 mt-4">- Sophie</h4>
            </div>
            <div class="p-6 border rounded-lg shadow-md">
                <p class="text-gray-600">"Une équipe très professionnelle et à l'écoute."</p>
                <h4 class="text-blue-500 mt-4">- Julien</h4>
            </div>
            <div class="p-6 border rounded-lg shadow-md">
                <p class="text-gray-600">"Je recommande vivement cet accompagnement personnalisé."</p>
                <h4 class="text-blue-500 mt-4">- Claire</h4>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800">Nos partenaires</h2>
        <div class="grid grid-cols-2 gap-8 mt-8">
            <div class="p-6 border rounded-lg shadow-md">
                <h3 class="text-xl font-bold">Initiatives Calvados</h3>
                <p class="text-gray-600 mt-2">Accompagnement au financement et à la création d’entreprise.</p>
            </div>
            <div class="p-6 border rounded-lg shadow-md">
                <h3 class="text-xl font-bold">ORIFF PL</h3>
                <p class="text-gray-600 mt-2">Soutien aux indépendants et professions libérales.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-10 bg-gray-800 text-white text-center">
    <p>&copy; 2025 SF Potentiel. Tous droits réservés.</p>
</footer>
</x-app-layout>
