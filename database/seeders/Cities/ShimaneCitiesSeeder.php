<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class ShimaneCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Shimane';
        $this->cities = [
            ['name' => 'Matsue',  'code' => '32301', 'lat' => 35.4770, 'long' => 133.0592],
            ['name' => 'Izumo',   'code' => '32302', 'lat' => 35.3386, 'long' => 132.7390],
            ['name' => 'Hamada',  'code' => '32303', 'lat' => 34.8281, 'long' => 132.1391],
            ['name' => 'Masuda',  'code' => '32304', 'lat' => 34.6291, 'long' => 131.9459],
            ['name' => 'Yasugi',  'code' => '32305', 'lat' => 35.3357, 'long' => 133.1976],
            ['name' => 'Unnan',   'code' => '32307', 'lat' => 35.2492, 'long' => 132.8948],
            ['name' => 'Ōda',     'code' => '32306', 'lat' => 35.1396, 'long' => 132.4881],
            ['name' => 'Gōtsu',   'code' => '32308', 'lat' => 34.9810, 'long' => 132.2949],
        ];
    }
}
