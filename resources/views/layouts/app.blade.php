<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Image prefetches -->
        <link rel="prefetch" as="image" href="/img/about_me.png">
        <link rel="prefetch" as="image" href="/img/my_projects.png">
        <link rel="prefetch" as="image" href="/img/my_posts.png">
        <link rel="prefetch" as="image" href="/img/home_hero.png">
        <link rel="prefetch" as="image" href="/img/clay_kim.jpg">
        <link rel="prefetch" as="image" href="/img/open.jpg">
        <link rel="prefetch" as="image" href="/img/closed.jpg">

        <!-- Fonts -->
        @googlefonts("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap")

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.3.1/dist/trix.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/styles/default.min.css">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body x-data x-cloak class="font-sans antialiased bg-skin-fill-core selection:bg-red-300 selection:text-white"
        x-bind:class="{ 'dark': $store.stage.darkMode, 'overflow-y-hidden': $store.stage.mobileMenuOpen }"
        x-on:keydown.escape="$store.stage.mobileMenuOpen = false">
        <x-jet-banner />
        <x-flyouts.toggle />

        <div x-data class="min-h-screen bg-gradient-to-br from-skin-stop-core to-skin-stop-crust">
            <livewire:nav-menu-main />

            <!--Notification pop-up -->
            <div class="flex justify-end w-full x-cloak">
                <x-notification />
            </div>

            <!-- Page Content -->
            <main class="mt-20">
                {{ $slot }}
            </main>

            <!-- Page Footer -->
            <x-footer />
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://unpkg.com/moment"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
        <script src="https://unpkg.com/trix@1.3.1/dist/trix.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/languages/php.min.js"></script>
        @stack('scripts')
        <script>
            window.addEventListener('paginationChanged', event => {
                window.scrollTo({top: 0, behavior: 'smooth'});
            })
        </script>
    </body>
</html>
