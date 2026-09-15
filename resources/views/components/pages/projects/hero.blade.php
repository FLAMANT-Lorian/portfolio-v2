@php
    use App\Data\Pages\Projects;

    $hero = Projects::hero();
@endphp
<div class="projects-hero" x-data="{ sidebarOpen: false }">
    <div class="screen-width px-default py-default pb-14 grid-default gap-y-8">
        <div class="flex flex-col gap-2 col-span-full">
            <h1 data-reveal
                data-dir="right"
                data-delay="0.1"
                class="text-h1 text-black font-semibold">
                {{ $hero['title'] }}
            </h1>
            <p data-reveal
               data-dir="top"
               data-delay="0.2"
               class="text-p text-gray-dark font-normal">
                {!! $hero['text'] !!}
            </p>
        </div>
        <div data-reveal
             data-dir="top"
             data-delay="0.3"
             class="flex flex-col md:flex-row gap-4 col-span-full">
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
                    @click="sidebarOpen = true"
                    title="{{ $hero['fields']['filter']['title'] }}"
                    class="group flex flex-row gap-3 items-center justify-center cursor-pointer text-base font-family-dm-sans py-2 px-4 border border-red bg-red text-white hover:bg-white focus:bg-white hover:text-red focus:text-red ease-all">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#filter"></use>
                </svg>
                <span>{{ $hero['fields']['filter']['label'] }}</span>
                @if(count($this->tags))
                    <span
                        class="text-base font-family-dm-sans bg-white ease-all text-red group-hover:bg-red group-hover:text-white group-focus:bg-red group-focus:text-white rounded-full min-w-6 min-h-6 aspect-square flex justify-center items-center">{{ count($this->tags) }}</span>
                @endif
            </button>

        </div>
    </div>

    {{-- FILTER SIDEBAR --}}
    <x-parts.filter-sidebar/>
</div>
