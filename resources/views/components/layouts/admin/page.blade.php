<x-app-layout>
    <div class="bg-skin-fill-core">
        <div class="p-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-skin-loud sm:text-3xl sm:truncate">
                        {{ $header }}
                    </h2>
                </div>
            </div>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-app-layout>
