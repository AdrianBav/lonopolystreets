<?php

use App\Street;
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
        foreach (config('streets') as $streetAttributes) {
            $street = Street::create([
                'name' => $streetAttributes['name'],
                'color' => $streetAttributes['color'] ?? null,
                'price' => $streetAttributes['price'],
                'type' => $streetAttributes['type'],
                'borough' => $streetAttributes['borough'] ?? null,
                'postcode' => $streetAttributes['postcode'] ?? null,
            ]);

            $streetFeatures = collect([]);

            foreach ($streetAttributes['photos'] as $photoAttributes) {
                $street->photos()->create([
                    'filename' => $photoAttributes['filename'],
                    'features' => $photoAttributes['features'],
                ]);

                $streetFeatures = $streetFeatures->merge($photoAttributes['features']);
            }

            $street->features = $streetFeatures->unique()->sort()->values();
            $street->save();
        }
    }
}
