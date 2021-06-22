@props([
    'leadingAddOn' => false,
])

<div class="flex rounded-md shadow-sm">
    @if ($leadingAddOn)
        <span
            class="inline-flex items-center px-3 text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50 sm:text-sm">
            {{ $leadingAddOn }}
        </span>
    @endif

    <input type="text"
        {{ $attributes->merge([
            'class' => 'border rounded-md flex-1 form-input border-gray-300 block w-full transition duration-150 ease-in-out
                sm:text-sm sm:leading-5 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:ring-indigo-300'
                . ($leadingAddOn ? ' rounded-none rounded-r-md' : '')
        ]) }} tabindex="0" />
</div>
