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
            'name' => [
                'fr' => 'Le Vieux Moulin',
                'en' => 'Le Vieux Moulin'
            ],
            'slug' => 'le-vieux-moulin',
            'excerpt' => [
                'fr' => 'Site vitrine du Vieux Moulin de Strainchamps',
                'en' => 'Showcase website for the Old Mill at Strainchamps'
            ],
            'featured_image' => 'assets/img/projects/lvm/lvm-card.webp',
            'featured_image_alt' => [
                'fr' => 'Présentation du site du Vieux Moulin de Strainchamps',
                'en' => 'Introduction to the Vieux Moulin de Strainchamps website'
            ],
            'description' => [
                'fr' => 'Réalisation d’un site internet pour l’ASBL Le Vieux Moulin. Ce projet m’a permis d’améliorer mes compétences en design et développement avec WordPress mais aussi en gestion de l’information pour de garder une structure à la fois simple et cohérente.',
                'en' => 'Development of a website for the non-profit organisation Le Vieux Moulin. This project enabled me to improve my skills in design and development using WordPress, as well as in information management, to ensure the site had a structure that was both simple and consistent.'
            ],
            'website_url' => 'https://le-vieux-moulin.lorianflamant.com/',
            'github_url' => 'https://github.com/FLAMANT-Lorian/ASBL-Le-vieux-moulin-site',
            'context' => [
                'fr' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés car je ne connaissait pas du tout le terme SRG, j’ai donc fait des recherches afin de mieux comprendre les besoins de mon client.',
                'en' => 'The lack of a website for the non-profit organisation Le Vieux Moulin was a challenge for me, as I was not familiar with the term SRG, so I did research to better understand the needs of my client.'
            ],
            'result' => [
                'fr' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés car je ne connaissait pas du tout le terme SRG, j’ai donc fait des recherches afin de mieux comprendre les besoins de mon client.',
                'en' => 'The lack of a website for the non-profit organisation Le Vieux Moulin was a challenge for me, as I was not familiar with the term SRG, so I did research to better understand the needs of my client.'
            ],
            'images' => []
        ])->tags()->attach($project1Tags);
    }
}
