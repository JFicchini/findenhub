<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#1E2A38] leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-[#F4F6F8] shadow sm:rounded-lg">
                <div class="max-w-xl w-full">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#F4F6F8] shadow sm:rounded-lg">
                <div class="max-w-xl w-full">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#F4F6F8] shadow sm:rounded-lg">
                <div class="max-w-xl w-full">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
