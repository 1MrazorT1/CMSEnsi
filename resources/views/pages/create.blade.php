<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Page') }}
        </h2>
    </x-slot>

    <script src="https://cdn.tiny.cloud/1/c2rvwzuv2g1h71xkg4jk4aud468n3cmkelgz5013srfrdqo7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="flex">
        <!-- Sidebar containing Drag & Drop -->
        <div class="w-20 bg-gray-900 p-4 rounded-xl shadow-lg flex flex-col items-center gap-4">
            <p class="text-white text-sm font-semibold">Drag & Drop</p>
            <div class="space-y-4">
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/book-open-reader.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/book-open-reader.png') }}">
           
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/euro-sign.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/euro-sign.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/icto version imprimable.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/icto version imprimable.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/insta.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/insta.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/magnifying-glass.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/magnifying-glass.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto bars menu burger.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto bars menu burger.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto boussole.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto boussole.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto calendrier.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto calendrier.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto checked.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto checked.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto convaincre.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto convaincre.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev act lib.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev act lib.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev act lib2.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev act lib2.png') }}">
               

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev activité libérale.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto dev activité libérale.png') }}">
               

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto envoi demande.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto envoi demande.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto formation bilan année.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto formation bilan année.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto newsletter.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto newsletter.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto smiley.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto smiley.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto user.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto user.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_elearning_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_elearning_sfp.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_enveloppe_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_enveloppe_sfp.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_euro_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_euro_sfp.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_fb_SFP.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_fb_SFP.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_fleche_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_fleche_sfp.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_heures_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_heures_sfp.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_insta_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_insta_sfp.png') }}">
               
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_linkedin_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_linkedin_sfp.png') }}">
                
                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_localisation_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_localisation_sfp.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_loupe.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_loupe.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_poignéemain_sfp.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/picto_poignéemain_sfp.png') }}">

                <img src="{{ asset('images/PICTOGRAMMES FONTAWESOME/sablier.png') }}" 
                class="draggable fixed-size-image cursor-pointer" 
                draggable="true" 
                data-url="{{ asset('images/PICTOGRAMMES FONTAWESOME/sablier.png') }}">
            </div>
        </div>

         <!-- Main Content -->
         <div class="w-full max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
            <form action="{{ route('pages.store') }}" method="POST">
                @csrf

                <!-- Hidden template input -->
                <input type="hidden" name="template" value="{{ request()->query('template', 'default') }}">

                <!-- Title Input -->
                <label class="block text-lg font-semibold">Title:</label>
                <input type="text" name="title" class="w-full border p-2 rounded mt-1" required>

                <!-- Content Input with TinyMCE -->
                <label class="block mt-4 text-lg font-semibold">Content:</label>
                <textarea id="editor" name="content" class="w-full border p-2 rounded mt-1">
                @if(request()->query('template') == 'business')
                    @include('templates.business')
                @elseif(request()->query('template') == 'blog')
                    @include('templates.blog')
                @elseif(request()->query('template') == 'portfolio')
                    @include('templates.portfolio')
                @elseif(request()->query('template') == 'agency')
                    @include('templates.agency')
                @elseif(request()->query('template') == 'startup')
                    @include('templates.startup')
                @elseif(request()->query('template') == 'personal')
                    @include('templates.personal')
                @elseif(request()->query('template') == 'ecommerce')
                    @include('templates.ecommerce')
                @else
                    <textarea id="editor" name="content" class="w-full border p-2 rounded mt-1"></textarea>
                @endif
                </textarea>

                <!-- Buttons -->
                <div class="mt-6 flex items-center justify-between">
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                        Create Page
                    </button>

                    <a href="{{ route('pages.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                        Back to CMS
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Initialize TinyMCE
        tinymce.init({
            selector: '#editor',
            height: 900,
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect forecolor backcolor',
            branding: false
        });

        // Drag and drop images
        document.querySelectorAll('.draggable').forEach(img => {
            img.addEventListener('dragstart', function (event) {
                event.dataTransfer.setData('text/plain', event.target.dataset.url);
            });
        });

        document.getElementById('editor').addEventListener('drop', function (event) {
            event.preventDefault();
            let imageUrl = event.dataTransfer.getData('text/plain');
            tinymce.activeEditor.execCommand('mceInsertContent', false, `<img src="${imageUrl}" alt="Dropped Image" width="150">`);
        });

        document.getElementById('editor').addEventListener('dragover', function (event) {
            event.preventDefault();
        });
    </script>

    <style>
        .fixed-size-image {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>

</x-app-layout>