<nav :class="menuOpen ? 'translate-x-0' : '-translate-x-full'"
     class="fixed inset-0 bg-red ease-all px-6 pt-44 pb-8 flex flex-col justify-between">

    <x-navigation.nav-links/>

    <x-parts.socials/>
</nav>
