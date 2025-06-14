<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class AomoriCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Aomori';
        $this->cities = [
            ['name' => 'Aomori',     'code' => '022001', 'lat' => 40.81667, 'long' => 140.73333],
            ['name' => 'Hachinohe',  'code' => '022031', 'lat' => 40.51222, 'long' => 141.48800],
            ['name' => 'Hirosaki',   'code' => '022035', 'lat' => 40.60312, 'long' => 140.46392],
            ['name' => 'Kuroishi',   'code' => '022038', 'lat' => 40.64278, 'long' => 140.59444],
            ['name' => 'Goshogawara', 'code' => '022040', 'lat' => 40.80778, 'long' => 140.44611],
            ['name' => 'Towada',     'code' => '022047', 'lat' => 40.61644, 'long' => 141.25082],
            ['name' => 'Misawa',     'code' => '022050', 'lat' => 40.68306, 'long' => 141.36917],
            ['name' => 'Mutsu',      'code' => '022068', 'lat' => 41.28333, 'long' => 141.21667],
            ['name' => 'Tsugaru',    'code' => '022070', 'lat' => 40.80357, 'long' => 140.40299],
            ['name' => 'Hirakawa',   'code' => '022077', 'lat' => 40.58417, 'long' => 140.56639],
            ['name' => 'Kuroishi',   'code' => '022038', 'lat' => 40.61709, 'long' => 140.70467],
            ['name' => 'Kuroishi',   'code' => '022038', 'lat' => 40.64581, 'long' => 140.58354],
        ];
    }
}
