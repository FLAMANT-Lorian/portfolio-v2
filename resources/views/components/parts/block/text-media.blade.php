@php
    use App\Data\Pages\Project;
@endphp

@props([
    'base_info',
    'title',
    'description',
    'image',
    'imageAlt',
    'button_1_link',
    'button_2_link'
])

<div class="project-hero">
    <div class="screen-width grid-default px-default pb-default pt-10 gap-8 rl:gap-14 lg:gap-24">
        <h1 class="text-h1 font-semibold col-span-full text-black">{{ $title }}</h1>
        <div class="grid-default max-rg:gap-y-14 col-span-full">
            <div class="flex flex-col col-span-full rg:col-span-4 rl:col-span-5">
                <h2 class="text-h2 font-medium text-black pb-2 rg:pb-3">{{ $base_info['title'] }}</h2>
                <p class="text-p text-gray-dark">{{ $description }}</p>
                <div class="flex flex-row gap-6 mt-8">
                    <x-parts.buttons.filled-btn
                        class="max-md:grow max-md:justify-center"
                        :label="$base_info['btn-1']['label']"
                        :title="$base_info['btn-1']['title']"
                        :route="$button_1_link"
                        :blank="$base_info['btn-1']['blank']"/>

                    <x-parts.buttons.outlined-btn
                        class="max-md:grow max-md:justify-center"
                        :label="$base_info['btn-2']['label']"
                        :title="$base_info['btn-2']['title']"
                        :route="$button_2_link"
                        :blank="$base_info['btn-2']['blank']"
                        :arrow="false"/>
                </div>
            </div>
            <img src="{{ asset($image) }}"
                 alt="{{ $imageAlt }}"
                 class="max-h-120 w-full object-cover aspect-square rg:aspect-1.5/1 lg:aspect-video col-span-full rg:col-span-4 rl:col-start-7 rl:col-span-6">
        </div>
    </div>
</div>
