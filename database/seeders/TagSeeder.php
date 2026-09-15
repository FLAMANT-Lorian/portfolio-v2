<?php

namespace Database\Seeders;

use App\Enums\ProjectTypes;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        foreach (ProjectTypes::cases() as $type) {
            Tag::create(['name' => $type->value]);
        }
    }
}
