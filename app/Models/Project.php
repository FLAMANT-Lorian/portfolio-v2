<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $fillable = [
        'name',
        'excerpt',
        'featured_image',
        'featured_image_alt',
        'description',
        'website_url',
        'github_url',
        'context',
        'result',
        'images',
    ];

    protected function casts(): array
    {
        return [
            'images' => 'array',
        ];
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
