<?php

use App\Group;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->groupsAndStreets() as $groupAttributes) {
            $group = Group::create([
                'name' => $groupAttributes['name'],
                'description' => $groupAttributes['description'],
            ]);

            foreach ($groupAttributes['streets'] as $streetAttributes) {
                $group->streets()->create([
                    'name' => $streetAttributes['name'],
                    'borough' => $streetAttributes['borough'] ?? null,
                    'postcode' => $streetAttributes['postcode'] ?? null,
                    'price' => $streetAttributes['price'],
                ]);
            }
        }
    }

    /**
     * [name description]
     *
     * @return  [type]
     */
    private function groupsAndStreets()
    {
        return [
            [
                'name' => 'Dark Blue Group',
                'description' => "Mayfair is not a street, but a location in London (between Piccadilly, Regent Street, Oxford Street and Park Lane). The most expensive square on the board, and in reality.",
                'streets' => [
                    [
                        'name' => 'Mayfair',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '400',
                    ],
                    [
                        'name' => 'Park Lane',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '350',
                    ],
                ],
            ],
            [
                'name' => 'Green Group',
                'description' => "All of these streets have a background in retail and commercial properties. There is no actual Bond Street; it is split into New Bond Street to the north and Old Bond Street to the south.",
                'streets' => [
                    [
                        'name' => 'Bond Street',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '320',
                    ],
                    [
                        'name' => 'Oxford Street',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '300',
                    ],
                    [
                        'name' => 'Regent Street',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '300',
                    ],
                ],
            ],
            [
                'name' => 'Yellow Group',
                'description' => "Streets with an entertainment and nightlife-based theme; Leicester Square is known for cinemas and theatres, Coventry Street for clubs and restaurants, and Piccadilly for hotels.",
                'streets' => [
                    [
                        'name' => 'Piccadilly',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '280',
                    ],
                    [
                        'name' => 'Coventry Street',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '260',
                    ],
                    [
                        'name' => 'Leicester Square',
                        'borough' => 'City of Westminster',
                        'postcode' => 'WC2',
                        'price' => '260',
                    ],
                ],
            ],
            [
                'name' => 'Red Group',
                'description' => "All adjacent to each other as part of the A4 road, a major road running west from Central London.",
                'streets' => [
                    [
                        'name' => 'Trafalgar Square',
                        'borough' => 'City of Westminster',
                        'postcode' => 'WC2',
                        'price' => '240',
                    ],
                    [
                        'name' => 'Fleet Street',
                        'borough' => 'City of Westminster',
                        'postcode' => 'EC4',
                        'price' => '220',
                    ],
                    [
                        'name' => 'Strand',
                        'borough' => 'City of Westminster',
                        'postcode' => 'WC2',
                        'price' => '220',
                    ],
                ],
            ],
            [
                'name' => 'Orange Group',
                'description' => "Locations dealing with the police and law. There is no actual Marlborough Street in this part of London; the square on the board was mis-named after the Marlborough Street Magistrates Court.",
                'streets' => [
                    [
                        'name' => 'Vine Street',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '200',
                    ],
                    [
                        'name' => 'Marlborough Street',
                        'borough' => 'City of Westminster',
                        'postcode' => 'W1',
                        'price' => '180',
                    ],
                    [
                        'name' => 'Bow Street',
                        'borough' => 'City of Westminster',
                        'postcode' => 'WC2',
                        'price' => '180',
                    ],
                ],
            ],
            [
                'name' => 'Pink Group',
                'description' => "These streets all converge at Trafalgar Square.",
                'streets' => [
                    [
                        'name' => "Northumberl'd Ave.",
                        'borough' => 'City of Westminster',
                        'postcode' => 'WC2',
                        'price' => '160',
                    ],
                    [
                        'name' => 'Whitehall',
                        'borough' => 'City of Westminster',
                        'postcode' => 'SW1',
                        'price' => '140',
                    ],
                    [
                        'name' => 'Pall Mall',
                        'borough' => 'City of Westminster',
                        'postcode' => 'SW1',
                        'price' => '140',
                    ],
                ],
            ],
            [
                'name' => 'Light Blue Group',
                'description' => "Part of the London Inner Ring Road, this section of which opened in 1756 as the New Road. From west to east the road runs as Euston Road to King's Cross, then Pentonville Road to the Angel, Islington. The Angel is a former pub, not a street. It was a Lyons Corner House in 1935.",
                'streets' => [
                    [
                        'name' => 'Pentonville Road',
                        'borough' => 'London Borough of Islington',
                        'postcode' => 'N1',
                        'price' => '120',
                    ],
                    [
                        'name' => 'Euston Road',
                        'borough' => 'London Borough of Camden',
                        'postcode' => 'NW1',
                        'price' => '100',
                    ],
                    [
                        'name' => 'The Angel Islington',
                        'borough' => 'London Borough of Islington',
                        'postcode' => 'N1',
                        'price' => '100',
                    ],
                ],
            ],
            [
                'name' => 'Brown Group',
                'description' => "Old Kent Road is the only location south of the River Thames; also the only one both outside and more than one tube stop away from the Circle line.",
                'streets' => [
                    [
                        'name' => 'Whitechapel',
                        'borough' => 'London Borough of Tower Hamlets',
                        'postcode' => 'E1',
                        'price' => '60',
                    ],
                    [
                        'name' => 'Old Kent Road',
                        'borough' => 'London Borough of Southwark',
                        'postcode' => 'SE1',
                        'price' => '60',
                    ],
                ],
            ],
            [
                'name' => 'Stations',
                'description' => "The four London termini of the London and North Eastern Railway, principally King's Cross, which served Waddingtons' home town of Leeds.",
                'streets' => [
                    [
                        'name' => 'Kings Cross Station',
                        'borough' => 'London Borough of Camden',
                        'postcode' => 'N1',
                        'price' => '200',
                    ],
                    [
                        'name' => 'Marylebone Station',
                        'borough' => 'City of Westminster',
                        'postcode' => 'NW1',
                        'price' => '200',
                    ],
                    [
                        'name' => 'Fenchurch St. Station',
                        'borough' => 'City of London',
                        'postcode' => 'EC3',
                        'price' => '200',
                    ],
                    [
                        'name' => 'Liverpool St. Station',
                        'borough' => 'London Borough of Tower Hamlets',
                        'postcode' => 'EC2',
                        'price' => '200',
                    ],
                ],
            ],
            [
                'name' => 'Utilities',
                'description' => "These utilities have non-specific locations. They are included just for fun and completion of the Monopoly title deed cards.",
                'streets' => [
                    [
                        'name' => 'Electric Company',
                        'price' => '150',
                    ],
                    [
                        'name' => 'Water Works',
                        'price' => '150',
                    ],
                ],
            ],
        ];
    }
}
