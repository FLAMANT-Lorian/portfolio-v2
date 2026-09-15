@props([
    'content',
])

<div class="about-hero">
    <div class="screen-width grid-default px-default py-default gap-8 rl:gap-14 lg:gap-24">
        <h1 data-reveal
            data-dir="right"
            data-delay="0.1"
            class="text-h1 font-semibold col-span-full text-black">
            {{ $content['title'] }}
        </h1>
        <div class="grid-default max-rg:gap-y-14 col-span-full">
            <div data-reveal
                 data-dir="right"
                 data-delay="0.2"
                 class="flex flex-col col-span-full rg:col-span-4 rl:col-span-5">
                <h2 class="text-h2 font-medium text-black pb-2 rg:pb-3">{!! $content['title-2'] !!}</h2>
                <p class="text-p text-gray-dark">{{ $content['description'] }}</p>
                <div class="flex flex-row gap-6 mt-8">
                    <x-parts.buttons.filled-btn
                        class="max-md:grow max-md:justify-center"
                        :label="$content['btn-1']['label']"
                        :title="$content['btn-1']['title']"
                        :route="$content['btn-1']['route']"
                        :blank="$content['btn-1']['blank']"/>

                    <x-parts.buttons.outlined-btn
                        class="max-md:grow max-md:justify-center"
                        :label="$content['btn-2']['label']"
                        :title="$content['btn-2']['title']"
                        :route="$content['btn-2']['route']"
                        :blank="$content['btn-2']['blank']"
                        :arrow="false"/>
                </div>
            </div>
            <img data-reveal
                 data-dir="left"
                 data-delay="0.3"
                 srcset="
                @foreach(config('images.text-media-sizes') as $size)
                    {{ asset('assets/img/about/' . $size . '/' . $content['image']['src']) }} {{ $size }}w{{ !$loop->last ? ', ' : '' }}
                @endforeach
                "
                 sizes="(max-width: 767px) 100vw, (max-width: 1023px) 800px, (max-width: 1239px) 480px, (max-width: 1619px) 600px, 650px"
                 src="{{ asset('assets/img/projects/about/original/' . $content['image']['src']) }}"
                 alt="{{ $content['image']['alt'] }}"
                 width="2000"
                 height="1500"
                 fetchpriority="high"
                 class="max-h-120 w-full object-cover aspect-square rg:aspect-1.5/1 lg:aspect-video col-span-full rg:col-span-4 rl:col-start-7 rl:col-span-6"
            />
        </div>
    </div>
</div>
