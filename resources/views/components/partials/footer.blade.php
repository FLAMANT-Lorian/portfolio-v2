@php
    use App\Data\Options;

    $navigation_links = Options::navigation();
    $phone = Options::phone();
    $mail = Options::mail();
    $cv = Options::cv();
    $resources = Options::resources();
    $legals = Options::legals()
@endphp

<footer class="bg-red" id="footer">
    <h2 class="sr-only">{{ __('partials/footer.navigation-title') }}</h2>
    <div class="screen-width grid-default px-default py-18 rl:py-23 gap-y-8">
        <div class="md:col-span-4 rl:col-span-3">
            <h3 class="text-h3 font-medium text-white pb-3">{{ __('partials/footer.navigation-links-title') }}</h3>
            <ul class="flex flex-col gap-1 items-start">
                @foreach($navigation_links as $navigation_link)
                    <li>
                        <a wire:navigate
                           @if($navigation_link['exactRoute'])
                               wire:current.exact="font-bold before:w-2 before:h-2 hover:font-bold!"
                           @else
                               wire:current="font-bold before:w-2 before:h-2 hover:font-bold!"
                           @endif
                           class="hover:font-semibold focus:font-semibold text-p text-white ease-all flex flex-row gap-2 items-center before:content-[''] before:block before:w-0 before:h-0 before:bg-white"
                           aria-label="{{ $navigation_link['label'] }}"
                           title="{{ $navigation_link['title'] }}"
                           href="{{ $navigation_link['route'] }}">
                            {{ $navigation_link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="md:col-span-4 rl:col-span-3">
            <h3 class="text-h3 font-medium text-white pb-3">{{ __('partials/footer.coordinate-title') }}</h3>
            <ul class="flex flex-col gap-1 items-start">
                <li>
                    <a wire:navigate
                       class="hover:font-semibold focus:font-semibold text-p text-white ease-all flex flex-row gap-2 items-center before:content-[''] before:block before:w-0 before:h-0 before:bg-white"
                       aria-label="{{ $phone['label'] }}"
                       title="{{ $phone['title'] }}"
                       href="{{ $phone['route'] }}">
                        {{ $phone['label'] }}
                    </a>
                </li>
                <li>
                    <a wire:navigate
                       class="hover:font-semibold focus:font-semibold text-p text-white ease-all flex flex-row gap-2 items-center before:content-[''] before:block before:w-0 before:h-0 before:bg-white"
                       aria-label="{{ $mail['label'] }}"
                       title="{{ $mail['title'] }}"
                       href="{{ $mail['route'] }}">
                        {{ $mail['label'] }}
                    </a>
                </li>
                <li>
                    <a class="hover:font-semibold focus:font-semibold text-p text-white ease-all flex flex-row gap-2 items-center before:content-[''] before:block before:w-0 before:h-0 before:bg-white"
                       aria-label="{{ $cv['label'] }}"
                       title="{{ $cv['title'] }}"
                       download
                       href="{{ asset($cv['route']) }}">
                        {{ $cv['label'] }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="md:col-span-4 rl:col-span-3">
            <h3 class="text-h3 font-medium text-white pb-3">{{ __('partials/footer.resources-title') }}</h3>
            <ul class="flex flex-col gap-1 items-start">
                @foreach($resources as $resource)
                    <li>
                        <a target="_blank"
                           class="hover:font-semibold focus:font-semibold text-p text-white ease-all flex flex-row gap-2 items-center before:content-[''] before:block before:w-0 before:h-0 before:bg-white"
                           aria-label="{{ $resource['label'] }}"
                           title="{{ $resource['title'] }}"
                           href="{{ $resource['route'] }}">
                            {{ $resource['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="md:col-span-4 rl:col-span-3 rl:justify-self-end">
            <h3 class="text-h3 font-medium text-white pb-3">{{ __('partials/footer.socials-title') }}</h3>
            <x-parts.socials
                class="rl:justify-self-end!"/>
        </div>
        <div
            class="font-family-dm-sans text-base text-white pt-10 rl:pt-6 mt-2 rl:mt-9.5 col-span-full flex flex-col md:flex-row md:justify-between gap-3 border-t border-t-white">
            <span>© {{ date('Y') }} Flamant Lorian. {{ __('partials/footer.rights') }}</span>
            <a class="hover:font-semibold focus:font-semibold ease-all"
               aria-label="{{ $legals['label'] }}"
               title="{{ $legals['title'] }}"
               wire:navigate
               href="{{ $legals['route'] }}">{{ $legals['label'] }}</a>
        </div>
    </div>
</footer>
@livewireScriptConfig
