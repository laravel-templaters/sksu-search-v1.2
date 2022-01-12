<button {{ $attributes->merge(['type' => 'submit',
'class' => 'inline-flex items-center text-md px-4 py-2 bg-gradient-to-l from-primary-500 via-primary-300 to-primary-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:from-blue-600 hover:to-blue-400 hover:text-primary-text active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
