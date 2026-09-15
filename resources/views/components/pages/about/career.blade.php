@props([
    'content'
])

<section class="bg-beige">
    <div class="screen-width px-default py-default grid-default gap-y-10">
        <h2 data-reveal
            data-dir="top"
            class="text-h2 text-black font-medium col-span-full text-center">
            {{ $content['title'] }}
        </h2>
        <ul class="flex flex-col-reverse col-span-full">
            @foreach($content['steps'] as $index => $step)
                <li data-reveal
                    data-dir="top"
                    class="flex flex-col md:flex-row justify-between md:items-center gap-4 md:gap-8 first:pb-0 last:pt-0 py-6 md:py-8 border-t border-red/50 last:border-none">
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-row items-center gap-6 rg:gap-8">
                            <div class="flex flex-row items-center gap-2">
                                <div aria-hidden="true" class="flex flex-col gap-0.5">
                                    @for($i = 0; $i < $index; $i++)
                                        <span aria-hidden="true" class="w-4 h-px block bg-red"></span>
                                    @endfor
                                </div>
                                <span class="text-h4 font-medium text-red">0{{ $index }}</span>
                            </div>
                            <span class="text-p text-gray-dark">{{ $step['location'] }}</span>
                        </div>
                        <span
                            class="font-family-clash-display text-xl rg:text-2xl font-normal text-black">{{ $step['job'] }}</span>
                    </div>
                    <div class="flex flex-col">
                        @if(array_key_exists('months', $step))
                            <span class="text-base font-normal text-gray-dark md:text-right whitespace-nowrap">
                                {{ $step['months'] }}
                            </span>
                        @endif
                        <span
                            class="text-h2 font-medium text-red md:text-right whitespace-nowrap">{{ $step['year'] }}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
