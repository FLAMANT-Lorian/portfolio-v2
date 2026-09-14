<?php

namespace App\Data;

class Errors
{
    public static function notFound(): array
    {
        return [
            'code' => 404,
            'title' => __('errors.404.title'),
            'text' => __('errors.404.text'),
            'button' => [
                'label' => __('errors.404.button.label'),
                'title' => __('errors.404.button.title'),
                'route' => route('home'),
            ]
        ];
    }
}
