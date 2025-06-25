<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-20 py-3 bg-[#00D1C1] border border-[#AEB4BC] rounded-md font-semibold text-xs text-[#F4F6F8] uppercase tracking-widest hover:bg-[#2C4A7A] focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
