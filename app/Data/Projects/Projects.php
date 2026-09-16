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
                'fr' => 'Le fait que l’ASBL ne possédait pas encore de site internet était pour moi l’une des premières difficultés, car je ne connaissais pas du tout le terme SRG. J’ai donc fait des recherches afin de mieux comprendre les besoins de mon client avant de me lancer dans le projet.',
                'en' => 'The lack of a website for the non-profit organisation Le Vieux Moulin was a challenge for me, as I was not familiar with the term SRG. So I did research to better understand the needs of my client before starting the project.'
            ],
            'result' => [
                'fr' => 'Grâce aux différentes recherches effectuées, j’ai pu comprendre les besoins de mon client et créer un site internet qui correspondait à ses besoins. J’ai essayé au maximum de rendre le site agréable pour les enfants, afin qu’ils se sentent en sécurité dans l’hébergement, mais aussi pour rassurer leurs parents.',
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

    public static function refuge(): array
    {
        return [
            'name' => 'Refuge animalier',
            'slug' => 'refuge-animalier',
            'excerpt' => [
                'fr' => 'Site et application d’un refuge animalier',
                'en' => 'Website and application of an animal shelter'
            ],
            'featured_image' => 'refuge-card.webp',
            'featured_image_alt' => [
                'fr' => 'Présentation du site de présentation du refuge sur un ordinateur',
                'en' => 'Introduction to the animal shelter website on a computer'
            ],
            'hero_image' => 'refuge-hero.webp',
            'hero_image_alt' => [
                'fr' => 'Présentation du site de présentation du refuge sur un ordinateur',
                'en' => 'Introduction to the animal shelter website on a computer'
            ],
            'description' => [
                'fr' => 'Un refuge animalier est une structure qui accueille, soigne et prend en charge des animaux abandonnés, maltraités ou trouvés, en attendant de leur trouver une famille d’adoption. Ce refuge propose un site vitrine ainsi qu’une application permettant de présenter les animaux disponibles à l’adoption et de faciliter la gestion du refuge au quotidien.',
                'en' => 'An animal shelter is a facility that takes in, cares for, and looks after abandoned, mistreated, or stray animals while they wait to be adopted by a new family. This shelter offers a showcase website as well as an application to present the animals available for adoption and to facilitate the shelter’s day-to-day management.'
            ],
            'github_url' => 'https://github.com/FLAMANT-Lorian/refuge-animalier',
            'context' => [
                'fr' => 'Ce projet a été réalisé dans le cadre du cours de projet web. Il avait pour but de se familiariser avec Laravel, un framework PHP permettant de créer des applications web complexes très facilement.',
                'en' => 'This project was carried out as part of the web project course. Its goal was to familiarize myself with Laravel, a PHP framework that allows you to create complex web applications very easily.'
            ],
            'result' => [
                'fr' => 'Grâce aux différents tests effectués, ainsi qu’aux longues heures de recherche dans la documentation de Laravel, j’ai pu créer une application qui répondait aux besoins de notre client fictif. Cette application sert à gérer les différents animaux, ainsi que leurs potentielles demandes d’adoption.',
                'en' => 'Thanks to the various tests carried out, as well as many long hours of research in the Laravel documentation, I was able to create an application that met the needs of our fictional client. This application is used to manage the shelter’s animals, as well as their potential adoption requests.'
            ],
            'images' => [
                [
                    'path' => 'refuge-1.webp',
                    'alt' => [
                        'fr' => 'Différents écrans du tableau de bord de l’administration du refuge',
                        'en' => 'Different screens of the shelter’s admin dashboard'
                    ]
                ],
                [
                    'path' => 'refuge-2.webp',
                    'alt' => [
                        'fr' => 'Page de contact sur le site vitrine en version mobile et ordinateur',
                        'en' => 'Contact page on the showcase website in mobile and desktop version'
                    ]
                ],
                [
                    'path' => 'refuge-3.webp',
                    'alt' => [
                        'fr' => 'Wireframe du tableau de bord de l’administration du refuge',
                        'en' => 'Wireframe of the shelter’s admin dashboard'
                    ]
                ],
            ],
        ];
    }

    public static function pfe(): array
    {
        return [
            'name' => 'ASBL Les Coccinelles',
            'slug' => 'asbl-les-coccinelles',
            'excerpt' => [
                'fr' => 'Site et application de l’ASBL Les Coccinelles',
                'en' => 'Website and application of ASBL Les Coccinelles'
            ],
            'featured_image' => 'pfe-card.webp',
            'featured_image_alt' => [
                'fr' => 'Présentation du site de présentation de l’ASBL sur un ordinateur',
                'en' => 'Introduction to the ASBL website on a computer'
            ],
            'hero_image' => 'pfe-hero.webp',
            'hero_image_alt' => [
                'fr' => 'Présentation du site de présentation du refuge sur un téléphone',
                'en' => 'Introduction to the animal shelter website on a phone'
            ],
            'description' => [
                'fr' => 'L’ASBL Les Coccinelles est l’ASBL de mon village. Elle organise durant l’année plusieurs événements afin de faire vivre notre petit village, mais aussi pour favoriser les rencontres avec les nouveaux arrivants.',
                'en' => 'ASBL Les Coccinelles is the local non-profit organisation of my village. It organizes several events throughout the year to bring life to our small village, but also to encourage encounters with newcomers.'
            ],
            'github_url' => 'https://github.com/FLAMANT-Lorian/les-coccinelles-admin',
            'context' => [
                'fr' => 'Ce projet a été réalisé comme projet de fin d’études à la HEPL. Pour celui-ci, j’ai décidé de réaliser une application de gestion pour l’ASBL, afin de lui faciliter la gestion des réservations de la salle, des événements, ainsi que l’organisation des futures réunions. Je leur ai également réalisé un site vitrine afin de promouvoir leur image.',
                'en' => 'This project was carried out as my final-year project at HEPL. For this project, I decided to build a management application for the ASBL, to make it easier for them to manage room bookings, events, and the organisation of future meetings. I also created a showcase website for them to promote their image.'
            ],
            'result' => [
                'fr' => 'Grâce à la bonne communication entre mon client et moi-même, j’ai pu comprendre les réels besoins de l’ASBL et ainsi lui fabriquer un outil efficace qui répond exactement à ses besoins.',
                'en' => 'Thanks to the good communication between my client and myself, I was able to understand the real needs of the ASBL, and thus build them an efficient tool that meets their needs exactly.'
            ],
            'images' => [
                [
                    'path' => 'pfe-1.webp',
                    'alt' => [
                        'fr' => 'Différents écrans du tableau de bord de l’administration de l’ASBL',
                        'en' => 'Different screens of the ASBL’s admin dashboard'
                    ]
                ],
                [
                    'path' => 'pfe-2.webp',
                    'alt' => [
                        'fr' => 'Wireframe du tableau de bord de l’administration de l’ASBL',
                        'en' => 'Wireframe of the ASBL’s admin dashboard'
                    ]
                ],
                [
                    'path' => 'pfe-3.webp',
                    'alt' => [
                        'fr' => 'Page de présentation de l’historique de l’ASBL sur différentes tailles d’écrans',
                        'en' => 'Presentation page of the ASBL’s history on different screen sizes'
                    ]
                ],
            ],
        ];
    }
}
