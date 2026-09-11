<?php

namespace App\Data;

class Options
{
    public static string $phone = '0492/10.83.29';
    public static string $mail = 'lorian.flamant05@gmail.com';

    public static function socials(): array
    {
        return [
            [
                'label' => __('options.socials.instagram.label'),
                'title' => __('options.socials.instagram.title'),
                'route' => '#',
                'icon' => 'instagram'
            ],
            [
                'label' => __('options.socials.github.label'),
                'title' => __('options.socials.github.title'),
                'route' => '#',
                'icon' => 'github'
            ],
            [
                'label' => __('options.socials.linkedin.label'),
                'title' => __('options.socials.linkedin.title'),
                'route' => '#',
                'icon' => 'linkedin'
            ],
        ];
    }
}
