<?php

namespace App\Data\Pages;

class Legals
{
    public static function hero(): array
    {
        return [
            'title' => __('pages/legals.hero.title'),
            'text' => __('pages/legals.hero.text')
        ];
    }
}
