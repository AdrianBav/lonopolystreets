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
        foreach (config('streets') as $groupAttributes) {
            $group = Group::create([
                'name' => $groupAttributes['name'],
                'description' => $groupAttributes['description'],
            ]);

            foreach ($groupAttributes['streets'] as $streetAttributes) {
                $group->streets()->create([
                    'name' => $streetAttributes['name'],
                    'borough' => $streetAttributes['borough'] ?? null,
                    'postcode' => $streetAttributes['postcode'] ?? null,
                ]);
            }
        }
    }
}
