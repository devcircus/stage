<x-app-layout>
    <div class="px-6 py-12 mx-auto lg:px-0 max-w-7xl">
        <x-page-hero class="h-20 lg:h-40" height="h-18">
            <img id="page-title" src="/img/about_me.png" class="h-18" />
        </x-page-header>
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col px-4 lg:px-0">
                <div x-data="{ show: false }" x-init="setTimeout(function(){ show = true; }, 500)" class="flex flex-col lg:flex-row">
                    <div class="flex flex-col w-full mb-4 space-y-2 lg:w-1/3 lg:mb-0">
                        <h1 class="mb-4 text-3xl font-bold text-gray-700 lg:text-5xl font-protogrotesk">
                            {{ config('auth.admin.name') }}
                        </h1>
                        <span class="font-sans text-2xl font-semibold text-gray-800">Years in web development:
                            <span class="text-xl text-gray-600"> 16</span>
                        </span>
                        <span class="font-sans text-2xl font-semibold text-gray-800">Started with:
                            <span class="text-xl text-gray-600"> Coldfusion</span>
                        </span>
                        <span class="font-sans text-2xl font-semibold text-gray-800">Current:
                            <span class="text-xl text-gray-600"> PHP(Laravel), Vue, Livewire, Alpinejs</span>
                        </span>
                    </div>
                    <img x-show="show" x-cloak src="/img/clay_kim.jpg" class="object-cover object-bottom w-64 h-64 border-4 border-red-600 rounded-full shadow-md"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="filter grayscale transform scale-0"
                    x-transition:enter-end="filter grayscale-0 transform scale-100" />
                </div>
                <p class="mt-8 font-sans text-xl text-gray-600">
                    I've started this blog to track my experiences and to have a place to log what I'm learning. So this is more of a tool for me than anything else. However, maybe I'll write something that can be useful to others. Either way, I'm excited about what is to come.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
