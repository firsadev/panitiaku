<a href="{{ $href }}" class="@if($href == RalphJSmit\Livewire\Urls\Facades\Url::current()){{ 'bg-zinc-100 dark:bg-zinc-700/70 text-zinc-900 dark:text-zinc-200 font-semibold' }}@else{{ 'hover:bg-zinc-100 hover:dark:bg-zinc-700/70 hover:dark:text-zinc-200 text-zinc-600 dark:text-zinc-400 font-medium' }}@endif flex justify-start items-center px-4 py-3 md:py-1.5 text-sm whitespace-nowrap group rounded-md transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 relative">
    <span class="absolute start-0 block w-full lg:w-1 lg:ltr:-translate-x-1.5 lg:rtl:translate-x-1.5 transition-all duration-300 ease-out rounded-full bottom-0 translate-y-2 lg:top-1/2 lg:-translate-y-1/2 @if($href == RalphJSmit\Livewire\Urls\Facades\Url::current()){{ 'w-full h-1 lg:h-5/6' }}@else{{ 'h-0' }}@endif " style="background:{{ config('wave.primary_color') }}"></span>
    <x-dynamic-component :component="$icon" class="flex-shrink-0 md:me-1 md:-ms-1.5 w-5 h-5 md:w-4 md:h-4" />
    <span class="hidden truncate md:inline-block">{{ $slot }}</span>
</a>