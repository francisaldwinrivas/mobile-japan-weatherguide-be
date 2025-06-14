<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class KochiCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Kochi';
        $this->cities = [
            ['name' => 'Kōchi',           'code' => '39201', 'lat' => 33.5589, 'long' => 133.5310],
            ['name' => 'Nankoku',         'code' => '39204', 'lat' => 33.5583, 'long' => 133.6492],
            ['name' => 'Shimanto',        'code' => '39210', 'lat' => 33.2550, 'long' => 133.1400],
            ['name' => 'Kōnan',           'code' => '39211', 'lat' => 33.5600, 'long' => 133.6020],
            ['name' => 'Kami',            'code' => '39212', 'lat' => 33.7540, 'long' => 134.0350],
            ['name' => 'Tosa',            'code' => '39205', 'lat' => 33.3630, 'long' => 133.1940],
            ['name' => 'Susaki',          'code' => '39206', 'lat' => 33.4120, 'long' => 133.4210],
            ['name' => 'Sukumo',          'code' => '39209', 'lat' => 32.9660, 'long' => 132.9820],
            ['name' => 'Aki',             'code' => '39203', 'lat' => 33.0820, 'long' => 133.3760],
            ['name' => 'Muroto',          'code' => '39202', 'lat' => 33.2950, 'long' => 134.1300],
            ['name' => 'Tosashimizu',     'code' => '39207', 'lat' => 32.7830, 'long' => 132.7880],
        ];
    }
}
