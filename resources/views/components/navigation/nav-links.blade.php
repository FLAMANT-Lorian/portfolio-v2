@php
    use App\Data\Header;

    $links = Header::navigation();
@endphp

<ul class="flex flex-col gap-6 items-start">
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
