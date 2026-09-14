<?php

namespace App\Data\Pages;

use App\Data\Options;

class About
{
    public static function hero(): array
    {
        $email = Options::mail();

        return [
            'title' => __('pages/about.text-media.title'),
            'title-2' => __('pages/about.text-media.title-2'),
            'description' => __('pages/about.text-media.description'),
            'btn-1' => [
                'label' => __('pages/about.text-media.btn-1.label'),
                'title' => $email['title'],
                'route' => $email['route'],
                'blank' => false
            ],
            'btn-2' => [
                'label' => __('pages/about.text-media.btn-2.label'),
                'title' => __('pages/about.text-media.btn-2.title'),
                'route' => route('projects'),
                'blank' => false
            ],
            'image' => [
                'src' => 'assets/img/projects/lvm/lvm-card.webp',
                'alt' => __('pages/about.text-media.image_alt')
            ]
        ];
    }

    public static function career(): array
    {
        return [
            'title' => __('pages/about.career.title'),
            'steps' => [
                '1' => [
                    'job' => __('pages/about.career.steps.1.job'),
                    'location' => __('pages/about.career.steps.1.location'),
                    'year' => __('pages/about.career.steps.1.year'),
                ],
                '2' => [
                    'job' => __('pages/about.career.steps.2.job'),
                    'location' => __('pages/about.career.steps.2.location'),
                    'year' => __('pages/about.career.steps.2.year'),
                ],
                '3' => [
                    'job' => __('pages/about.career.steps.3.job'),
                    'location' => __('pages/about.career.steps.3.location'),
                    'year' => __('pages/about.career.steps.3.year'),
                    'months' => __('pages/about.career.steps.3.months')
                ],
            ]
        ];
    }

    public static function commitment(): array
    {
        $email = Options::mail();

        return [
            'title' => __('pages/about.commitment.title'),
            'text' => __('pages/about.commitment.text'),
            'button' => [
                'label' => __('pages/about.commitment.button.label'),
                'title' => $email['title'],
                'route' => $email['route'],
            ],
            'list' => [
                '1' => [
                    'title' => __('pages/about.commitment.list.1.title'),
                    'description' => __('pages/about.commitment.list.1.description'),
                ],
                '2' => [
                    'title' => __('pages/about.commitment.list.2.title'),
                    'description' => __('pages/about.commitment.list.2.description'),
                ],
                '3' => [
                    'title' => __('pages/about.commitment.list.3.title'),
                    'description' => __('pages/about.commitment.list.3.description'),
                ],
                '4' => [
                    'title' => __('pages/about.commitment.list.4.title'),
                    'description' => __('pages/about.commitment.list.4.description'),
                ],
            ]
        ];
    }
}
