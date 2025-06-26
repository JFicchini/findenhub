<x-app-layout>
<x-slot name="header">
<div class="flex justify-between items-center">
<span class="text-sm text-[#1E2A38] font-semibold ml-24">
                Bem-vindo, {{ Auth::user()->name }}!
</span>
 
            <form method="GET" action="{{ route('dashboard') }}" class="relative w-full max-w-sm">
<input type="text" name="busca" value="{{ request('busca') }}" placeholder="Buscar..."
                    class="w-full pl-4 pr-10 py-1 border border-[#AEB4BC] rounded-lg shadow-sm focus:outline-none focus:ring-transparent focus:ring-[#2C4A7A] focus:border-[#2C4A7A] text-sm" />
<button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 text-[#AEB4BC] hover:text-[#2C4A7A]">
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
</svg>
</button>
</form>    
</div>    
</x-slot>
 
    <div class="py-6">
<div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
<div class="bg-[#F4F6F8] overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-[#1E2A38] text-center">
                    {{ __("FindenHub - Gestão completa e inteligente para sua empresa!") }}
</div>
</div>
</div>
</div>
</x-app-layout>