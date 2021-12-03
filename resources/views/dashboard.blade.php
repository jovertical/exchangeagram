<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <x-navigation></x-navigation>

            <main class="lg:col-span-9 xl:col-span-6">
                <div>
                    <livewire:add-post-form></livewire:add-post-form>
                    <livewire:post-list></livewire:post-list>
                </div>
            </main>

            <aside class="hidden xl:block xl:col-span-4">
                <div class="sticky top-4 space-y-4">
                    <livewire:recommended-friends></livewire:recommended-friends>
                </div>
            </aside>
        </div>
    </div>
</x-app-layout>
