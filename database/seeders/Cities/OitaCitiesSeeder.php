<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class OitaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Oita';
        $this->cities = [
            ['name' => 'Ōita',             'code' => '44201', 'lat' => 33.2396, 'long' => 131.6093],
            ['name' => 'Beppu',            'code' => '44202', 'lat' => 33.2847, 'long' => 131.4911],
            ['name' => 'Nakatsu',          'code' => '44203', 'lat' => 33.4586, 'long' => 131.2164],
            ['name' => 'Saiki',            'code' => '44204', 'lat' => 32.8859, 'long' => 131.7760],
            ['name' => 'Hita',             'code' => '44205', 'lat' => 33.2445, 'long' => 130.9506],
            ['name' => 'Usa',              'code' => '44206', 'lat' => 33.4499, 'long' => 131.3366],
            ['name' => 'Usuki',            'code' => '44207', 'lat' => 33.1234, 'long' => 131.7446],
            ['name' => 'Bungo-ōno',        'code' => '44208', 'lat' => 33.3450, 'long' => 131.4410],
            ['name' => 'Yufu',             'code' => '44209', 'lat' => 33.1559, 'long' => 131.3193],
            ['name' => 'Kitsuki',          'code' => '44210', 'lat' => 33.4473, 'long' => 131.5367],
            ['name' => 'Kunisaki',         'code' => '44211', 'lat' => 33.3000, 'long' => 131.6580],
            ['name' => 'Bungotakada',      'code' => '44212', 'lat' => 33.3547, 'long' => 131.7024],
            ['name' => 'Taketa',           'code' => '44213', 'lat' => 32.9165, 'long' => 130.9895],
            ['name' => 'Tsukumi',          'code' => '44214', 'lat' => 32.6073, 'long' => 131.8780],
        ];
    }
}
