@php
    use App\Data\Pages\Home;

    $hero = Home::hero();
@endphp
<div class="home-hero">
    <div class="screen-width px-default py-default grid-default">
        <h1 data-reveal data-dir="right" data-delay="0.3"
            class="text-extra-big font-bold text-black md:col-span-8 md:mb-16 rl:mb-0 rl:col-span-9 rl:row-start-2">
            {{ $hero['title'] }}
        </h1>
        <div
            class="flex flex-col gap-2 max-md:mt-8 max-md:mb-6 md:col-span-4 rl:row-start-1 rl:col-start-2 rl:col-span-5 lg:col-span-4 lg:col-start-2">
            <h2 class="text-h2 text-black font-medium"
                data-reveal
                data-dir="top"
                data-delay="0.4">{{ $hero['subtitle'] }}</h2>
            <p class="text-p text-gray-dark"
               data-reveal
               data-dir="right"
               data-delay="0.5">
                {{ $hero['text'] }}
            </p>
        </div>
        <x-parts.buttons.filled-btn
            class="justify-self-start md:col-span-4 md:self-end rl:row-start-2 rl:col-start-10 rl:col-span-3 rl:self-start rl:justify-self-end rl:mt-10"
            :label="$hero['button']['label']"
            :title="$hero['button']['title']"
            :route="$hero['button']['route']"
            :blank="$hero['button']['blank'] ?? false"
        />
        <img data-reveal
             data-dir="left"
             srcset="
             @foreach(config('images.hero-sizes') as $size)
                {{ asset('assets/img/hero/' . $size . '/' . $hero['img']['src']) }} {{ $size }}w{{ !$loop->last ? ', ' : '' }}
             @endforeach
             "
             sizes="
                (max-width: 767px) calc(100vw - 48px),
                (max-width: 1023px) 450px,
                (max-width: 1239px) 480px,
                (max-width: 1619px) 300px,
                310px
            "
             fetchpriority="high"
             width="1000"
             height="1000"
             class="max-md:mt-14 rl:rotate-y-180 w-full aspect-square max-md:max-h-120 object-cover object-top md:col-span-4 md:col-start-1 md:row-start-2 md:row-span-2 rl:row-start-1 rl:row-span-1 rl:col-start-10 rl:col-span-3"
             src="{{ asset('assets/img/hero/1000/' . $hero['img']['src']) }}"
             alt="{{ $hero['img']['alt'] }}">
    </div>
</div>
