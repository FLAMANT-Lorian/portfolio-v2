@php
    use App\Data\Pages\Projects;

    $hero = Projects::hero();
@endphp
<div class="projects-hero">
    <div class="screen-width px-default py-default pb-14 grid-default gap-y-8">
        <div class="flex flex-col gap-2 col-span-full">
            <h1 class="text-h1 text-black font-semibold">{{ $hero['title'] }}</h1>
            <p class="text-p text-gray-dark font-normal">{!! $hero['text'] !!}</p>
        </div>
        <div class="flex flex-col md:flex-row gap-4 col-span-full">
            <div class="search-input md:grow">
                <label class="sr-only" for="search">{{ $hero['fields']['search']['label'] }}</label>
                <input type="text"
                       id="search"
                       wire:model.live="search"
                       name="search"
                       class="text-base font-family-dm-sans block w-full text-black font-normal pl-12 pr-3 py-2 border border-gray-light outline-0 focus:border-gray-dark ease-all"
                       placeholder="{{ $hero['fields']['search']['placeholder'] }}">
            </div>
            <button type="button"
                    title="{{ $hero['fields']['filter']['title'] }}"
                    class="flex flex-row gap-3 items-center justify-center cursor-pointer text-base font-family-dm-sans py-2 px-4 border border-red bg-red text-white hover:bg-white focus:bg-white hover:text-red focus:text-red ease-all">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#filter"></use>
                </svg>
                <span>{{ $hero['fields']['filter']['label'] }}</span>
            </button>
        </div>
    </div>
</div>
