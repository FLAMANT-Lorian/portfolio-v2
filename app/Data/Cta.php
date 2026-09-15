<?php

namespace App\Data;

class Cta
{
    public static function infos(): array
    {
        $mail = Options::$mail;

        return [
            'title' => __('partials/cta.title'),
            'text' => __('partials/cta.text'),
            'button' => [
                'label' => __('partials/cta.button.label'),
                'title' => __('partials/cta.button.title') . $mail,
                'route' => 'mailto:' . $mail
            ]
        ];
    }
}
