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
            'website' => [
                'label' => __('pages/project.text-media.website.label'),
                'title' => __('pages/project.text-media.website.title'),
            ],
            'github' => [
                'label' => __('pages/project.text-media.github.label'),
                'title' => __('pages/project.text-media.github.title'),
            ],
        ];
    }
}
