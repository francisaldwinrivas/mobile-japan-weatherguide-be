<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class MiyazakiCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Miyazaki';
        $this->cities = [
            ['name' => 'Miyazaki',        'code' => '45201', 'lat' => 31.9077, 'long' => 131.4202],
            ['name' => 'Miyakonojō',     'code' => '45202', 'lat' => 31.7176, 'long' => 131.0591],
            ['name' => 'Nobeoka',        'code' => '45203', 'lat' => 32.5902, 'long' => 132.5672],
            ['name' => 'Hyūga',          'code' => '45204', 'lat' => 32.4224, 'long' => 131.6602],
            ['name' => 'Nichinan',       'code' => '45205', 'lat' => 31.6072, 'long' => 131.3528],
            ['name' => 'Kobayashi',      'code' => '45206', 'lat' => 31.9926, 'long' => 130.9627],
            ['name' => 'Saito',          'code' => '45207', 'lat' => 32.6083, 'long' => 131.0274],
            ['name' => 'Kushima',        'code' => '45208', 'lat' => 31.6658, 'long' => 131.2750],
            ['name' => 'Ebino',          'code' => '45209', 'lat' => 31.7173, 'long' => 130.8839],
        ];
    }
}
