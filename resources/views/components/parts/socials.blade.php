@php
    use App\Data\Options;

    $socials = Options::socials();
@endphp

<ul class="justify-self-start flex flex-row gap-4 items-center">
    @foreach($socials as $social)
        <li>
            <a aria-label="{{ $social['label'] }}"
               target="_blank"
               title="{{ $social['title'] }}"
               class="block text-white hover:scale-120 focus:scale-120 ease-all"
               href="{{ $social['route'] }}">
                <span class="sr-only">{{ $social['label'] }}</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#{{ $social['icon'] }}"></use>
                </svg>
            </a>
        </li>
    @endforeach
</ul>
