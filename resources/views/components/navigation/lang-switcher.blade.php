<div x-data="{ open: false }"
     class="relative z-10">
    <button type="button"
            @click="open = !open"
            @click.away="open = false"
            @keydown.window.escape="open = false"
            :class="{
                'border-red!' : open && !menuOpen,
                'text-white hover:border-white': menuOpen,
                'border-white!': open && menuOpen,
                'text-red hover:border-red!': !menuOpen,
            }"

            class="cursor-pointer uppercase px-2 py-1 flex flex-row gap-2 items-center border border-transparent ease-all">
        <span>{{ LaravelLocalization::getCurrentLocale() }}</span>
        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <use href="#arrow-down"></use>
        </svg>
    </button>
    <div :class="{
            'bg-red text-white' : open && !menuOpen,
            'bg-white text-red' : open && menuOpen,
        }"
         class="absolute border left-0 right-0 -bottom-10 uppercase"
         x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if($localeCode !== LaravelLocalization::getCurrentLocale())
                <a wire:navigate
                   class="block w-full px-2 py-1"
                   hreflang="{{ $localeCode }}"
                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $localeCode }}
                </a>
            @endif
        @endforeach
    </div>
</div>
