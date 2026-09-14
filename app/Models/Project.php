<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\Attributes\Translatable;
use Spatie\Translatable\HasTranslations;

#[Translatable('excerpt', 'description', 'context', 'result', 'featured_image_alt')]
class Project extends Model
{
    use HasTranslations;

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

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

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
