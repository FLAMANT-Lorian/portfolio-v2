<?php

namespace Database\Seeders;

use App\Data\Projects\Projects;
use App\Enums\ProjectTypes;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $website = Tag::where('name', ProjectTypes::WEBSITE->value)->first();
        $web_application = Tag::where('name', ProjectTypes::WEB_APP->value)->first();
        $mobile_application = Tag::where('name', ProjectTypes::MOBILE_APP->value)->first();
        $design = Tag::where('name', ProjectTypes::DESIGN->value)->first();

        $project1Tags = [$website];
        Project::create(Projects::lvm())->tags()->attach($project1Tags);
    }
}
