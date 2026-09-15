@props([
    'base_info'
])

@php
    $images = $this->project->images;
@endphp

<section class="project-gallery">
    <div class="screen-width px-default py-default grid-default gap-y-8 rg:gap-y-10">
        <h2 class="flex flex-col gap-1 md:col-span-5">
            <span data-reveal
                  data-dir="right"
                  class="text-h4 font-medium text-gray-dark">
                {{ $base_info['title']['part-1'] }}
            </span>
            <span data-reveal
                  data-dir="right"
                  data-delay="0.1"
                  class="text-h2 font-medium text-red">
                {{ $base_info['title']['part-2'] }}
            </span>
        </h2>
        <div class="grid gap-6 md:gap-10 rl:gap-14 md:col-span-full">
            @foreach($images as $image)
                <img data-reveal
                     data-dir="top"
                    class="w-full custom-shadow"
                     sizes="(max-width: 767px) calc(100vw - 48px), (max-width: 1023px) calc(100vw - 96px), (max-width: 1239px) calc(100vw - 144px), (max-width: 1619px) calc(100vw - 192px), calc(100vw - 288px)"
                     srcset="
                        @foreach(config('images.project-gallery') as $size)
                            {{ asset('assets/img/projects/' . $size . '/' . $image['path']) }} {{ $size }}w{{ !$loop->last ? ', ' : '' }}
                        @endforeach
                     "
                     loading="lazy"
                     width="2000"
                     height="1300"
                     src="{{ asset('assets/img/projects/2000/' . $image['path']) }}"
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
