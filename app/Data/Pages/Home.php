<?php

namespace App\Data\Pages;

class Home
{
    public static function hero(): array
    {
        return [
            'title' => __('pages/home.hero.title'),
            'subtitle' => __('pages/home.hero.subtitle'),
            'text' => __('pages/home.hero.text'),
            'button' => [
                'label' => __('pages/home.hero.button.label'),
                'title' => __('pages/home.hero.button.title'),
                'route' => '#',
            ],
            'img' => [
                'src' => asset('assets/img/lorian-flamant.webp'),
                'alt' => __('pages/home.hero.img.alt')
            ]
        ];
    }

    public static function projects(): array
    {
        return [
            'title' => [
                'part-1' => 'Découvrez mes',
                'part-2' => 'derniers projets',
            ],
            'button' => [
                'label' => 'Voir tous les projets',
                'title' => 'Voir tous les projets',
                'route' => route('projects')
            ]
        ];
    }
}
