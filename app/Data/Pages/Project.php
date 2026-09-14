<?php

namespace App\Data\Pages;

class Project
{
    public static function back_btn(): array
    {
        return [
            'label' => __('pages/project.back-btn.label'),
            'title' => __('pages/project.back-btn.title'),
            'route' => route('projects'),
        ];
    }

    public static function text_media(): array
    {
        return [
            'title' => __('pages/project.text-media.title'),
            'btn-1' => [
                'label' => __('pages/project.text-media.website.label'),
                'title' => __('pages/project.text-media.website.title'),
                'blank' => true
            ],
            'btn-2' => [
                'label' => __('pages/project.text-media.github.label'),
                'title' => __('pages/project.text-media.github.title'),
                'blank' => true
            ],
        ];
    }

    public static function about(): array
    {
        return [
            'title' => __('pages/project.about.title'),
            'context' => [
                'title' => __('pages/project.about.context.title'),
            ],
            'result' => [
                'title' => __('pages/project.about.result.title'),
            ]
        ];
    }
}
