<button {{ $attributes->merge(['type' => 'submit',
'class' => 'inline-flex items-center text-md font-extrabold tracking-wider w-full py-3 bg-gradient-to-l from-primary-500 via-primary-200 to-primary-500 rounded-md text-white uppercase hover:from-primary-200 hover:to-primary-200 hover:via-primary-500 hover:text-white active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
