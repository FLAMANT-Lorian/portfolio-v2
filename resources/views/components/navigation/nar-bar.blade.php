<nav x-show="menuOpen"
     x-cloak
     x-transition:enter-start="-translate-x-full"
     x-transition:enter-end="translate-x-0"
     x-transition:leave-start="translate-x-0"
     x-transition:leave-end="-translate-x-full"
     class="fixed inset-0 bg-red ease-all px-6 pt-44 pb-8 flex flex-col justify-between">

    <x-navigation.nav-links/>

    <div class="border-t border-t-white pt-4">
        <x-parts.socials/>
    </div>
</nav>
