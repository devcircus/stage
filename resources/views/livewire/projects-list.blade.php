<div x-data="{ show : false, src: '', description: '' }" class="flex flex-col p-4 rounded-lg shadow-md lg:p-6 bg-skin-fill-mantle"
    x-on:close.window="show = false; src = ''; description = '';">
    <p class="max-w-4xl mb-8 text-lg text-skin-quiet">
        Here are a few of the projects I've worked on recently. These are mostly side projects as well as apps that I
        use for my day-job, which is not web-development. As I'm finally getting around to putting together a portfolio
        of sorts, I'll update this page as that progresses.
    </p>
    <div class="flex flex-col w-full mb-2 space-y-4">
        @if (false)
            <div class="flex flex-col pb-6 overflow-hidden border-b-2 border-gray-400 rounded-lg rounded-b-none">
                <h1 class="w-full text-xl lg:text-2xl text-skin-base font-protogrotesk">Clay's Coins</h1>
                <div class="flex flex-col mt-4 lg:flex-row">
                    <div class="flex flex-col mb-4 mr-0 space-y-4 lg:mr-4 lg:w-1/3 lg:mb-0">
                        <img src="/img/projects/coins.png" class="w-full cursor-pointer"
                            x-on:click="show = true;  src = '/img/projects/coins.png'; description = 'Clays Coins image'; $nextTick(() => {$refs.modal.focus();});">
                        <img src="/img/projects/coins.png" class="w-full cursor-pointer"
                            x-on:click="show = true;  src = '/img/projects/coins.png'; description = 'Clays Coins image'; $nextTick(() => {$refs.modal.focus();});">
                    </div>
                    <div class="flex flex-col">
                        <p class="mb-4 text-base text-skin-quiet">A simple project to track the crypto that I own.<br>It
                            displays the total assets at the top of the page, then lists each coin. For each coin, it
                            shows how many coins I own, the current value of a coin, and the total dollar amount based
                            on the number of coins and the current price. Prices update every 15 seconds.<br>A coin can
                            be clicked and flyout will appear that shows the total assets for that coin for the past 10
                            days.</p>
                        <a href="https://github.com/phpcircus/clayscoins"
                            class="mb-1 text-base text-skin-muted">ClaysCoins on Github</a>
                        <p class="mb-1 text-base text-skin-muted">Website Private</p>
                    </div>
                </div>
            </div>
        @else
            <h1 class="w-full text-4xl text-skin-base font-protogrotesk">No Projects Found. 🙁 Check back later.</h1>
        @endif
    </div>
    <div class="flex justify-end w-full">
        <!-- Links for paginated projects, when using database -->
    </div>
    <div x-ref="modal" x-show.transition.opacity="show" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-gray-800/75" tabindex="0"
        x-on:keydown.escape="show = false; src = ''; description = '';">
        <div x-show.transition="show" x-on:click.outside="show = false; src = ''; description = '';"
            class="container relative max-w-6xl max-h-full overflow-hidden shadow-lg bg-skin-fill-core rounded-xl">
            <div class="absolute top-0 right-0 cursor-pointer" x-on:click="show = false; src = ''; description = '';"><x-heroicon-o-plus class="text-skin-base h-8 w-8 rotate-45 z-[60]"></x-heroicon-o-plus></div>
            <div class="px-8 py-4">
                <img x-bind:src="src" class="max-w-full">
            </div>
        </div>
    </div>
</div>
