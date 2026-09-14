@props([
    'base_info'
])

@php
    $images = $this->project->images;
@endphp

<section class="project-gallery">
    <div class="screen-width px-default py-default grid-default gap-y-8 rg:gap-y-10">
        <h2 class="flex flex-col gap-1 md:col-span-5">
            <span class="text-h4 font-medium text-gray-dark">{{ $base_info['title']['part-1'] }}</span>
            <span class="text-h2 font-medium text-red">{{ $base_info['title']['part-2'] }}</span>
        </h2>
        <div wire:ignore class="grid gap-6 md:gap-10 rl:gap-14 md:col-span-full">
            @foreach($images as $image)
                <img class="w-full custom-shadow"
                     src="{{ asset($image['path']) }}"
                     alt="{{ $image['alt'][LaravelLocalization::getCurrentLocale()] }}">
            @endforeach
        </div>
        <x-parts.buttons.back-filled
            class="col-span-full justify-self-center mt-8"
            :label="$base_info['back-btn']['label']"
            :title="$base_info['back-btn']['title']"
            :route="$base_info['back-btn']['route']"
            :blank="$base_info['back-btn']['blank'] ?? false"
        />
    </div>
</section>
