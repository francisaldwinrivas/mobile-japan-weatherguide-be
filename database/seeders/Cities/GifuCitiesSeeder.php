<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class GifuCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Gifu';
        $this->cities = [
            ['name' => 'Gifu',          'code' => '21101', 'lat' => 35.4233, 'long' => 136.7606],
            ['name' => 'Ōgaki',         'code' => '21102', 'lat' => 35.3111, 'long' => 136.6194],
            ['name' => 'Kakamigahara',  'code' => '21103', 'lat' => 35.4239, 'long' => 136.7589],
            ['name' => 'Kani',          'code' => '21104', 'lat' => 35.4233, 'long' => 136.8547],
            ['name' => 'Tajimi',        'code' => '21105', 'lat' => 35.3270, 'long' => 137.0138],
            ['name' => 'Seki',          'code' => '21106', 'lat' => 35.4103, 'long' => 136.8707],
            ['name' => 'Takayama',      'code' => '21107', 'lat' => 36.1431, 'long' => 137.2529],
            ['name' => 'Nakatsugawa',   'code' => '21108', 'lat' => 35.4825, 'long' => 137.3450],
            ['name' => 'Hashima',       'code' => '21109', 'lat' => 35.3240, 'long' => 136.7544],
            ['name' => 'Minokamo',      'code' => '21110', 'lat' => 35.3708, 'long' => 137.1022],
            ['name' => 'Mizuho',        'code' => '21111', 'lat' => 35.4728, 'long' => 136.9394],
            ['name' => 'Mizunami',      'code' => '21112', 'lat' => 35.3978, 'long' => 137.1100],
            ['name' => 'Motosu',        'code' => '21113', 'lat' => 35.5247, 'long' => 136.6789],
            ['name' => 'Kaizu',         'code' => '21114', 'lat' => 35.2625, 'long' => 136.5697],
            ['name' => 'Ena',           'code' => '21115', 'lat' => 35.4339, 'long' => 137.5047],
            ['name' => 'Gujō',          'code' => '21116', 'lat' => 35.8844, 'long' => 136.9714],
            ['name' => 'Hida',          'code' => '21117', 'lat' => 36.1369, 'long' => 137.2103],
            ['name' => 'Mino',          'code' => '21118', 'lat' => 35.5172, 'long' => 136.7239],
            ['name' => 'Toki',          'code' => '21119', 'lat' => 35.3372, 'long' => 137.1958],
            ['name' => 'Gero',          'code' => '21120', 'lat' => 35.9939, 'long' => 137.2167],
            ['name' => 'Yamagata',      'code' => '21121', 'lat' => 35.4556, 'long' => 136.8256],
        ];
    }
}
