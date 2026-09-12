<main id="main">
    {{-- HERO --}}
    <x-pages.home.hero/>

    {{-- PROJECTS --}}
    <x-pages.home.projects
        :projects="$this->projects"/>

    {{-- CTA --}}
    <x-parts.cta/>
</main>
