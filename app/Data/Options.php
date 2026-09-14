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
                'route' => route('projects'),
                'exactRoute' => false
            ],
            [
                'label' => __('partials/header.navigation.about.label'),
                'title' => __('partials/header.navigation.about.title'),
                'route' => route('about'),
                'exactRoute' => true
            ]
        ];
    }

    public static function phone(): array
    {
        return [
            'label' => self::$phone,
            'title' => __('partials/footer.tel-to') . self::$phone,
            'route' => 'tel:' . str_replace(['/', '.'], '', self::$phone)
        ];
    }

    public static function mail(): array
    {
        return [
            'label' => self::$mail,
            'title' => __('partials/footer.mail-to') . self::$mail,
            'route' => 'mailto:' . self::$mail
        ];
    }

    public static function resources(): array
    {
        return [
            'mdn' => [
                'label' => 'MDN',
                'title' => __('partials/footer.visit') . 'MDN',
                'route' => 'https://developer.mozilla.org/fr/',
            ],
            'w3c' => [
                'label' => 'W3C',
                'title' => __('partials/footer.visit') . 'W3C',
                'route' => 'https://www.w3.org/',
            ],
            'alsacreations' => [
                'label' => 'Alsacréations',
                'title' => __('partials/footer.visit') . 'Alsacréations',
                'route' => 'https://www.alsacreations.com/',
            ],
            'cascade' => [
                'label' => 'La Cascade',
                'title' => __('partials/footer.visit') . 'La Cascade',
                'route' => 'https://la-cascade.io/',
            ],
        ];
    }

    public static function legals(): array
    {
        return [
            'label' => __('partials/footer.legals.label'),
            'title' => __('partials/footer.legals.title'),
            'route' => '#'
        ];
    }
}
