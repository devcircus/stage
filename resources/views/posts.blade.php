<x-app-layout>
    <div class="px-2 py-12 mx-auto lg:px-0 max-w-7xl">
        <x-page-hero class="h-32" height="h-24">
            <img id="page-title" src="/img/my_posts.png" class="h-24" />
        </x-page-header>
        <div class="px-6 mx-auto lg:px-8">
            <livewire:posts-index />
        </div>
    </div>
</x-app-layout>
