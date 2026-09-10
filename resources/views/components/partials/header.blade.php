<header
    x-data="{ menuOpen: false }"
    x-trap="menuOpen"
    @keydown.window.escape="menuOpen = false">
    <div class="px-6 pt-6 flex flex-row items-center justify-between">
        <svg :class="menuOpen ? 'text-white' : 'text-red'"
             class="relative z-10 ease-all" width="116" height="32" viewBox="0 0 116 32"
             fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <use href="#logo"></use>
        </svg>
        <div class="flex flex-row gap-6 items-center">
            <x-navigation.lang-switcher/>

            <button
                @click="menuOpen = !menuOpen"
                class="cursor-pointer flex flex-col gap-2 relative z-10 py-1.5">
                <span class="sr-only">{{ __('partials/header.bg-menu-label') }}</span>

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
