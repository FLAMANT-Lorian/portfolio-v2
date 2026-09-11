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
}
