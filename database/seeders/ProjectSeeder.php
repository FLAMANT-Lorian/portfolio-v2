<?php

namespace Database\Seeders;

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

        $project1Tags = [$website, $web_application];
        Project::create([
            'name' => 'Le Vieux Moulin',
            'slug' => 'le-vieux-moulin',
            'excerpt' => 'Site vitrine du Vieux Moulin de Strainchamps',
            'featured_image' => 'assets/img/projects/lvm/lvm-card.webp',
            'featured_image_alt' => 'Présentation du site du Vieux Moulin de Strainchamps',
            'description' => 'Réalisation d’un site internet pour l’ASBL Le Vieux Moulin. Ce projet m’a permis d’améliorer mes compétences en design et développement avec WordPress mais aussi en gestion de l’information pour de garder une structure à la fois simple et cohérente.',
            'website_url' => 'https://le-vieux-moulin.lorianflamant.com/',
            'github_url' => 'https://github.com/FLAMANT-Lorian/ASBL-Le-vieux-moulin-site',
            'context' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés car je ne connaissait pas du tout le terme SRG, j’ai donc fait des recherches afin de mieux comprendre les besoins de mon client.',
            'result' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés car je ne connaissait pas du tout le terme SRG, j’ai donc fait des recherches afin de mieux comprendre les besoins de mon client.',
            'images' => []
        ])->tags()->attach($project1Tags);

        $project2Tags = [$design, $mobile_application];
        Project::create([
            'name' => 'Meet’us',
            'slug' => 'meet-us',
            'excerpt' => 'Site vitrine du Vieux Moulin de Strainchamps',
            'featured_image' => 'assets/img/projects/lvm/lvm-card.webp',
            'featured_image_alt' => 'Présentation du site du Vieux Moulin de Strainchamps',
            'description' => 'Réalisation d’un site internet pour l’ASBL Le Vieux Moulin. Ce projet m’a permis d’améliorer mes compétences en design et développement avec WordPress mais aussi en gestion de l’information pour de garder une structure à la fois simple et cohérente.',
            'website_url' => 'https://le-vieux-moulin.lorianflamant.com/',
            'github_url' => 'https://github.com/FLAMANT-Lorian/ASBL-Le-vieux-moulin-site',
            'context' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés car je ne connaissait pas du tout le terme SRG, j’ai donc fait des recherches afin de mieux comprendre les besoins de mon client.',
            'result' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés car je ne connaissait pas du tout le terme SRG, j’ai donc fait des recherches afin de mieux comprendre les besoins de mon client.',
            'images' => []
        ])->tags()->attach($project2Tags);

        Project::create([
            'name' => 'Portfolio',
            'slug' => 'portfolio',
            'excerpt' => 'Site vitrine du Vieux Moulin de Strainchamps',
            'featured_image' => 'assets/img/projects/lvm/lvm-card.webp',
            'featured_image_alt' => 'Présentation du site du Vieux Moulin de Strainchamps',
            'description' => 'Réalisation d’un site internet pour l’ASBL Le Vieux Moulin. Ce projet m’a permis d’améliorer mes compétences en design et développement avec WordPress mais aussi en gestion de l’information pour de garder une structure à la fois simple et cohérente.',
            'website_url' => 'https://le-vieux-moulin.lorianflamant.com/',
            'github_url' => 'https://github.com/FLAMANT-Lorian/ASBL-Le-vieux-moulin-site',
            'context' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés car je ne connaissait pas du tout le terme SRG, j’ai donc fait des recherches afin de mieux comprendre les besoins de mon client.',
            'result' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés car je ne connaissait pas du tout le terme SRG, j’ai donc fait des recherches afin de mieux comprendre les besoins de mon client.',
            'images' => []
        ]);
    }
}
