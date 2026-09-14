<?php

namespace App\Data\Projects;

class Projects
{
    public static function lvm(): array
    {
        return [
            'name' => 'Le Vieux Moulin',
            'slug' => 'le-vieux-moulin',
            'excerpt' => [
                'fr' => 'Site du Vieux Moulin de Strainchamps',
                'en' => 'Website for the Vieux Moulin at Strainchamps'
            ],
            'featured_image' => 'lvm-card.webp',
            'featured_image_alt' => [
                'fr' => 'Présentation du site du Vieux Moulin de Strainchamps sur un téléphone',
                'en' => 'Introduction to the Vieux Moulin de Strainchamps website on a phone'
            ],
            'hero_image' => 'lvm-hero.webp',
            'hero_image_alt' => [
                'fr' => 'Présentation du site du Vieux Moulin de Strainchamps sur un ordinateur',
                'en' => 'Introduction to the Vieux Moulin de Strainchamps website on a computer'
            ],
            'description' => [
                'fr' => 'Un Service Résidentiel Général (SRG) est une structure d’hébergement pour les enfants et les jeunes ne pouvant temporairement pas rester dans leur milieu familial. Le Vieux Moulin de Strainchamps est un SRG qui accueille des enfants et des jeunes âgés entre 0 et 18 ans.',
                'en' => 'A Service Résidentiel Général (SRG) is a residential facility for children and young people who are temporarily unable to stay within their family environment. Le Vieux Moulin de Strainchamps is an SRG that welcomes children and young people aged between 0 and 18.'
            ],
            'website_url' => 'https://le-vieux-moulin.lorianflamant.com/',
            'github_url' => 'https://github.com/FLAMANT-Lorian/ASBL-Le-vieux-moulin-site',
            'context' => [
                'fr' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi une des premières difficultés,car je ne connaissait pas du tout le terme SRG. J’ai donc fait des recherches afin de mieux comprendre les besoins de mon client avant de me lancer dans le projet.',
                'en' => 'The lack of a website for the non-profit organisation Le Vieux Moulin was a challenge for me, as I was not familiar with the term SRG. So I did research to better understand the needs of my client before starting the project.'
            ],
            'result' => [
                'fr' => 'Grâce aux différentes recherches effectuées, j’ai pu comprendre les besoins de mon client et créer un site internet qui correspondait à ses besoins. En essayant au maximum de rendre le site agréable pour les enfants, afin qu’ils se sentent en sécurité dans l’hébergement, mais aussi pour rassurer les parents de ceux-ci.',
                'en' => 'Thanks to the research I carried out, I was able to understand my client’s needs and create a website that matched them. I aimed to make the site as welcoming as possible for children, so they would feel safe within the facility, while also reassuring their parents.'
            ],
            'images' => [
                [
                    'path' => 'lvm-1.webp',
                    'alt' => [
                        'fr' => 'Différents écrans du site du Vieux Moulin de Strainchamps en version mobile',
                        'en' => 'Different screens of the Old Mill of Strainchamps website in mobile version'
                    ]
                ],
                [
                    'path' => 'lvm-2.webp',
                    'alt' => [
                        'fr' => 'Wireframe du site du Vieux Moulin de Strainchamps',
                        'en' => 'Wireframe of the Old Mill of Strainchamps website'
                    ]
                ],
                [
                    'path' => 'lvm-3.webp',
                    'alt' => [
                        'fr' => 'Comparaison du site du Vieux Moulin de Strainchamps en version mobile et ordinateur',
                        'en' => 'Comparison of the Old Mill of Strainchamps website in mobile and desktop version'
                    ]
                ],
            ],
        ];
    }
}
