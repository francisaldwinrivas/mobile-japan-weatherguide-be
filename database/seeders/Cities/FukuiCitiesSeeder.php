<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class FukuiCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Fukui';
        $this->cities = [
            ['name' => 'Fukui',        'code' => '18201', 'lat' => 36.0653, 'long' => 136.2216],
            ['name' => 'Sakai',        'code' => '18210', 'lat' => 36.2144, 'long' => 136.2236],
            ['name' => 'Echizen',      'code' => '18209', 'lat' => 35.9711, 'long' => 136.1500],
            ['name' => 'Sabae',        'code' => '18207', 'lat' => 36.0685, 'long' => 136.1958],
            ['name' => 'Tsuruga',      'code' => '18202', 'lat' => 35.6561, 'long' => 136.0664],
            ['name' => 'Ōno',          'code' => '18205', 'lat' => 36.0906, 'long' => 136.4836],
            ['name' => 'Obama',        'code' => '18204', 'lat' => 35.4726, 'long' => 135.8914],
            ['name' => 'Awara',        'code' => '18208', 'lat' => 36.2297, 'long' => 136.2797],
            ['name' => 'Katsuyama',    'code' => '18206', 'lat' => 36.1981, 'long' => 136.4841],
        ];
    }
}
