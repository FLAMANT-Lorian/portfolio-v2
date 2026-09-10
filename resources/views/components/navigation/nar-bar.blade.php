<nav x-show="menuOpen"
     x-cloak
     x-transition:enter-start="max-md:-translate-x-full"
     x-transition:enter-end="max-md:translate-x-0"
     x-transition:leave-start="max-md:translate-x-0"
     x-transition:leave-end="max-md:-translate-x-full"
     class="max-md:fixed md:flex! inset-0 max-md:bg-red ease-all max-md:px-6 max-md:pt-44 max-md:pb-8 flex flex-col justify-between">

    <x-navigation.nav-links/>

    <div class="border-t border-t-white pt-4 md:hidden">
        <x-parts.socials/>
    </div>
</nav>
