@php
    use App\Data\Cta;

    $cta = Cta::infos();
@endphp

<div class="screen-width grid-default px-default py-default">
    <div
        class="cta px-6 py-8 md:py-10 rl:py-12 bg-beige flex flex-col gap-6 items-center md:grid-default md:col-span-full">
        <h2 data-reveal
            data-dir="top"
            class="max-md:[&>br]:hidden text-h3 text-black font-medium text-center md:col-start-3 md:col-span-4 rl:col-start-4 rl:col-span-6">{!! $cta['title'] !!}</h2>
        <p data-reveal
           data-dir="top"
           data-delay="0.1"
           class="text-p text-gray-dark text-center md:col-start-3 md:col-span-4 rl:col-start-5 rl:col-span-4">{!! $cta['text'] !!}</p>
        <x-parts.buttons.filled-btn
            class="md:col-start-3 md:col-span-4 rl:col-start-5 rl:col-span-4 justify-self-center z-1"
            :label="$cta['button']['label']"
            :title="$cta['button']['title']"
            :route="$cta['button']['route']"
            :blank="$cta['button']['blank'] ?? false"/>
    </div>
</div>
