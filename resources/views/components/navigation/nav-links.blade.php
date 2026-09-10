@php
    use App\Data\Header;

    $links = Header::navigation();
@endphp

<ul class="flex flex-col md:flex-row gap-6 md:gap-8 items-start">
    @foreach($links as $link)
        <li>
            <x-navigation.nav-link
                :route="$link['route']"
                :title="$link['title']"
                :label="$link['label']"
                :exactRoute="$link['exactRoute'] ?? false"
            />
            @endforeach
        </li>
</ul>
