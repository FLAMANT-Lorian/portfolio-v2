@php
    use App\Data\Cta;
    use App\Data\Pages\About;

    $hero = About::hero();
    $career = About::career();
    $commitment = About::commitment();
    $cta = Cta::infos();
@endphp
<main id="main">
    {{-- HERO --}}
    <x-pages.about.text-media
        :content="$hero"/>

    {{-- CAREER --}}
    <x-pages.about.career
        :content="$career"/>

    {{-- COMMITMENT --}}
    <x-pages.about.commitment
        :content="$commitment"/>

    {{-- CTA --}}
    <x-parts.cta
        :content="$cta"/>
</main>
