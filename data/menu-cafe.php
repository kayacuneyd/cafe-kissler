<?php

return [
    'fruehstueck' => [
        'title' => 'Frühstück & Brunch',
        'description' => 'Täglich frisch zubereitet von 8:00 bis 12:00 Uhr',
        'items' => [
            [
                'name' => 'Klassisches Frühstück',
                'description' => 'Frische Brötchen, Aufschnitt, Käse, Marmelade, Butter',
                'price' => '8,50',
            ],
            [
                'name' => 'Brunch-Buffet (Sonntags)',
                'description' => 'Vielfältiges Buffet mit warmen und kalten Speisen',
                'price' => '15,90',
                'highlight' => true,
            ],
            // ... weitere Optionen
        ],
    ],
    'mittagstisch' => [
        'title' => 'Mittagstisch',
        'description' => 'Montag bis Freitag von 11:30 bis 14:00 Uhr',
        'items' => [
            [
                'name' => 'Wiener Schnitzel',
                'description' => 'Mit Pommes Frites und Salat',
                'price' => '12,90',
            ],
            [
                'name' => 'Schweinebraten',
                'description' => 'Traditionell mit Kartoffelknödel und Rotkraut',
                'price' => '13,50',
            ],
        ],
    ],
    'spezialitaeten' => [
        'title' => 'Unsere Spezialitäten',
        'items' => [
            [
                'name' => 'Kaiserschmarrn',
                'description' => 'Fluffiger Kaiserschmarrn mit Zwetschgenröster und Puderzucker',
                'price' => '9,50',
                'highlight' => true,
                'icon' => '⭐', // Customer favorite
            ],
            [
                'name' => 'Cappuccino XXL',
                'description' => 'Unser berühmter großer Cappuccino',
                'price' => '4,20',
            ],
        ],
    ],
];


