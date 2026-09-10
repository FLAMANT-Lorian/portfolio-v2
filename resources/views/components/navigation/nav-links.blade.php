@php
    $links = [
        [
            'label' => 'Accueil',
            'title' => 'Vers la page d’accueil',
            'route' => route('home'),
            'exactRoute' => true
        ],
        [
            'label' => 'Projets',
            'title' => 'Vers la page des projets',
            'route' => route('projects')
        ],
    ];
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
