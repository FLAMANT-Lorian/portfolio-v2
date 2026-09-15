<?php

namespace App\Data\Pages;

class Projects
{
    public static function hero(): array
    {
        return [
            'title' => __('pages/projects.hero.title'),
            'text' => __('pages/projects.hero.text'),
            'fields' => [
                'search' => [
                    'label' => __('pages/projects.hero.fields.search.label'),
                    'placeholder' => __('pages/projects.hero.fields.search.placeholder'),
                ],
                'filter' => [
                    'label' => __('pages/projects.hero.fields.filter.label'),
                    'title' => __('pages/projects.hero.fields.filter.title')
                ]
            ]
        ];
    }
}
