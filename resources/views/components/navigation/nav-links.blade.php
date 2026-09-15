@php
    use App\Data\Options;

    $links = Options::navigation();
@endphp

<ul class="flex flex-col md:flex-row gap-6 md:gap-8 items-start">
    @php
        $delay = 0;
    @endphp
    @foreach($links as $link)
        <li data-reveal data-dir="top" data-delay="{{ $delay }}">
            <x-navigation.nav-link
                :route="$link['route']"
                :title="$link['title']"
                :label="$link['label']"
                :exactRoute="$link['exactRoute'] ?? false"
            />
        </li>
        @php
            $delay += 0.1;
        @endphp
    @endforeach
</ul>
