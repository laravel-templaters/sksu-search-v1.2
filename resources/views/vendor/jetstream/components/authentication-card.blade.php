<div class="flex flex-col items-center min-h-screen pt-6 bg-white sm:justify-center sm:pt-0">
    <div>
        {{ $logo }}
    </div>

        <h3 class="font-sans text-4xl font-extrabold text-transparent uppercase bg-gradient-to-r from-primary-bg to-primary-bg-alt bg-clip-text filter drop-shadow-md"> SKSU Electronic Archiving and Content Handling</h3>
    <div class="w-full px-6 py-4 mt-6 overflow-hidden text-current text-white shadow-md bg-primary-500 sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
