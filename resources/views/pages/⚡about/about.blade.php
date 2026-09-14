@php
    use App\Data\Pages\About;

    $hero = About::hero();
    $career = About::career();
@endphp
<main id="main">
    {{-- HERO --}}
    <x-pages.about.text-media
    :content="$hero"/>

    {{-- CAREER --}}
    <x-pages.about.career
    :content="$career"/>
</main>
