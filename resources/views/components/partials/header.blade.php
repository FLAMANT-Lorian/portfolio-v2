<header
    x-data="{
        menuOpen: false,
        closeMenuLabel: {{ json_encode(__("partials/header.close-bg-menu-label")) }},
        openMenuLabel: {{ json_encode(__("partials/header.open-bg-menu-label")) }},
    }"
    @resize.window="menuOpen = false"
    x-trap="menuOpen"
    @keydown.window.escape="menuOpen = false"
    class="screen-width relative">
    <div class="px-default pt-6 flex flex-row items-center justify-between">
        <x-parts.skip-links/>
        <a wire:navigate
           aria-label="{{ __('partials/header.back-to-home') }}"
           title="{{ __('partials/header.back-to-home') }}"
           class="hover:scale-105 focus:scale-105 ease-all"
           href="{{ route('home') }}">
            <svg :class="menuOpen ? 'text-white' : 'text-red'"
                 class="relative z-20 ease-all" width="116" height="32" viewBox="0 0 116 32"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <use href="#logo"></use>
            </svg>
            <span class="sr-only">{{ __('partials/header.back-to-home') }}</span>
        </a>
        <div class="flex flex-row md:flex-row-reverse gap-6 md:gap-8 items-center">
            <x-navigation.lang-switcher/>

            <button
                :title='menuOpen ? closeMenuLabel : openMenuLabel'
                @click="menuOpen = !menuOpen"
                class="cursor-pointer flex flex-col gap-2 relative z-20 py-1.5 md:hidden">
                <span
                    class="sr-only"
                    x-text='menuOpen ? closeMenuLabel : openMenuLabel'
                ></span>

                {{-- MENU --}}
                <span class="block w-6 h-0.5 ease-all"
                      :class="menuOpen ? 'rotate-45 translate-y-1.25 bg-white' : 'bg-red'"></span>
                <span class="block w-6 h-0.5 ease-all"
                      :class="menuOpen ? '-rotate-45 -translate-y-1.25 bg-white' : 'bg-red'"></span>
            </button>

            <x-navigation.nar-bar/>
        </div>
    </div>
</header>
