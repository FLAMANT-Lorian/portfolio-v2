<?php

namespace App\Data;

class Header
{
    public static function navigation(): array
    {
        return [
            [
                'label' => __('partials/header.navigation.home.label'),
                'title' => __('partials/header.navigation.home.title'),
                'route' => route('home'),
                'exactRoute' => true
            ],
            [
                'label' => __('partials/header.navigation.projects.label'),
                'title' => __('partials/header.navigation.projects.title'),
                'route' => route('projects')
            ],
        ];
    }

    public static function socials(): array
    {
        return [
            [
                'label' => __('partials/header.socials.instagram.label'),
                'title' => __('partials/header.socials.instagram.title'),
                'route' => '#',
                'icon' => 'instagram'
            ],
            [
                'label' => __('partials/header.socials.github.label'),
                'title' => __('partials/header.socials.github.title'),
                'route' => '#',
                'icon' => 'github'
            ],
            [
                'label' => __('partials/header.socials.linkedin.label'),
                'title' => __('partials/header.socials.linkedin.title'),
                'route' => '#',
                'icon' => 'linkedin'
            ],
        ];
    }
}
