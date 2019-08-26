<?php

return [

    [
        'name' => 'Brown Group',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam distinctio dolor et, perspiciatis possimus reprehenderit culpa illo commodi, harum adipisci delectus cum non, iste in qui nihil earum nesciunt tempora.',
        'streets' => [
            [
                'name' => 'Old Kent Road',
                'borough' => 'Southwark',
                'postcode' => 'SE1',
            ],
            [
                'name' => 'Whitechapel',
                'borough' => 'Tower Hamlets',
                'postcode' => 'E1',
            ],
        ],
    ],

    [
        'name' => 'Light Blue Group',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam distinctio dolor et, perspiciatis possimus reprehenderit culpa illo commodi, harum adipisci delectus cum non, iste in qui nihil earum nesciunt tempora.',
        'streets' => [
            [
                'name' => 'The Angel Islington',
                'borough' => 'Islington',
                'postcode' => 'N1',
            ],
            [
                'name' => 'Euston Road',
                'borough' => 'Camden',
                'postcode' => 'NW1',
            ],
            [
                'name' => 'Pentonville Road',
                'borough' => 'Islington',
                'postcode' => 'N1',
            ],
        ],
    ],

    /*

    [
        'name' => 'Kings Cross Station',
        'price' => 200,
        'type' => 'Station',
        'borough' => 'Camden',
        'postcode' => 'N1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
            ['filename' => 'photo2.jpg', 'features' => ['Bingo', 'Road']],
            ['filename' => 'photo2.jpg', 'features' => ['Cash Point', 'Road']],
            ['filename' => 'photo3.jpg', 'features' => ['Street Sign']],
        ],
    ],

    [
        'name' => 'Pall Mall',
        'color' => 'Pink',
        'price' => 140,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'SW1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Electric Company',
        'price' => 150,
        'type' => 'Utility',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Whitehall',
        'color' => 'Pink',
        'price' => 140,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'SW1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Northumberland Avenue',
        'color' => 'Pink',
        'price' => 160,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'WC2',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Marylebone Station',
        'price' => 200,
        'type' => 'Station',
        'borough' => 'Westminster',
        'postcode' => 'NW1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Bow Street',
        'color' => 'Orange',
        'price' => 180,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'WC2',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Marlborough Street',
        'color' => 'Orange',
        'price' => 180,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Vine Street',
        'color' => 'Orange',
        'price' => 200,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Strand',
        'color' => 'Red',
        'price' => 220,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'WC2',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Fleet Street',
        'color' => 'Red',
        'price' => 220,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'EC4',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Trafalgar Square',
        'color' => 'Red',
        'price' => 240,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'WC2',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Fenchurch Street Station',
        'price' => 200,
        'type' => 'Station',
        'borough' => 'City of London',
        'postcode' => 'EC3M',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Leicester Square',
        'color' => 'Yellow',
        'price' => 260,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Coventry Street',
        'color' => 'Yellow',
        'price' => 260,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Water Works',
        'price' => 150,
        'type' => 'Utility',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Piccadilly',
        'color' => 'Yellow',
        'price' => 280,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Regent Street',
        'color' => 'Green',
        'price' => 300,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Oxford Street',
        'color' => 'Green',
        'price' => 300,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Bond Street',
        'color' => 'Green',
        'price' => 320,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Liverpool Street Station',
        'price' => 200,
        'type' => 'Station',
        'borough' => 'Tower Hamlets',
        'postcode' => 'EC2M',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Park Lane',
        'color' => 'Dark Blue',
        'price' => 350,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],

    [
        'name' => 'Mayfair',
        'color' => 'Dark Blue',
        'price' => 400,
        'type' => 'Property',
        'borough' => 'Westminster',
        'postcode' => 'W1',
        'photos' => [
            ['filename' => 'photo1.jpg', 'features' => ['Shop', 'Road', 'Cars']],
            ['filename' => 'photo2.jpg', 'features' => ['Church', 'Road']],
        ],
    ],*/

];
