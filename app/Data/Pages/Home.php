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
                'route' => route('about'),
            ],
            'img' => [
                'src' => 'photo-lorian.webp',
                'alt' => __('pages/home.hero.img.alt')
            ]
        ];
    }

    public static function projects(): array
    {
        return [
            'title' => [
                'part-1' => __('pages/home.projects.title.part-1'),
                'part-2' => __('pages/home.projects.title.part-2'),
            ],
            'button' => [
                'label' => __('pages/home.projects.button.label'),
                'title' => __('pages/home.projects.button.title'),
                'route' => route('projects')
            ]
        ];
    }
}
