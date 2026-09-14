@props([
    'content'
])

<section>
    <div class="screen-width px-default pt-default grid-default gap-y-14">
        <div class="col-span-full rl:col-span-5">
            <h2 class="text-h2 text-black font-medium col-span-full pb-3">
                {{ $content['title'] }}
            </h2>
            <p class="text-p text-gray-dark">
                {{ $content['text'] }}
            </p>
            <x-parts.buttons.filled-btn
                class="mt-8 justify-self-start"
                :label="$content['button']['label']"
                :title="$content['button']['title']"
                :route="$content['button']['route']"
                :blank="$content['button']['blank'] ?? false"/>
        </div>
        <ul class="col-span-full rl:col-span-6 rl:col-start-7 grid md:grid-cols-2 rl:grid-cols-2 gap-6">
            @foreach($content['list'] as $commitment)
                <li class="relative before:absolute before:top-0 before:left-0 hover:before:w-10 hover:before:h-10 before:ease-all flex flex-col gap-3 p-4 rl:p-6 before:content-[''] before:w-6 before:h-6 before:border-l-4 before:border-t-4 before:border-red">
                    <h3 class="text-h4 font-medium text-black">{{ $commitment['title'] }}</h3>
                    <p class="text-p text-gray-dark">{{ $commitment['description'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
