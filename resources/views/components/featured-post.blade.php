@props([
    'post',
])

<section class="col-span-6 p-8 mb-2 overflow-hidden font-sans rounded-lg shadow lg:grid lg:grid-cols-3 lg:gap-4 bg-skin-fill-mantle">
    <!-- Post Image -->
    <div class="flex items-center justify-center col-span-1 mb-4 bg-blue-100 rounded-lg lg:mb-0">
        <img src="{{ $post->primary_image }}" class="object-cover w-full h-auto rounded-lg shadow-md" />
    </div>
    <!-- Post Categories and timestamp -->
    <div class="flex flex-col col-span-2">
        <div class="flex flex-wrap mb-2 space-x-2">
            @foreach($post->categories as $category)
                <div class="flex">
                    <a href="{{ route('posts', [ 'category' => $category->name ]) }}">
                        <span class="inline-block pb-1 pt-1.5 mb-2 text-sm font-coda leading-4 text-skin-quiet border-b-2 border-transparent
                            hover:text-red-500 dark:hover:text-red-400/[.75]">
                            {{ $category->name }}
                        </span>
                    </a>
                    @if(! $loop->last)
                        <span class="text-red-400 dark:text-red-400/[.75] ml-2">/</span>
                    @endif
                </div>
            @endforeach
        </div>
        <p class="mb-4 text-xs italic text-gray-500">Published {{ $post->published_at->diffForHumans() }}</p>
        <div x-data class="self-start my-2">
            <a x-on:click="$store.stage.setSeenToNewest()" href="{{ route('posts.show', $post->slug) }}"
                class="inline-block text-2xl font-bold text-skin-loud hover:underline title-font">
                {{ $post->title }}
            </a>
        </div>
        <p class="mb-4 leading-relaxed text-skin-base">{{ $post->summary }}</p>
        <a x-on:click="$store.stage.setSeenToNewest()" href="{{ route('posts.show', $post->slug) }}"
            class="inline-flex items-center self-end text-skin-base hover:underline">Read More
        </a>
    </div>
</section>