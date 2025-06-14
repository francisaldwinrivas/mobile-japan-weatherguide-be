<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class OkayamaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Okayama';
        $this->cities = [
            ['name' => 'Okayama',    'code' => '33100', 'lat' => 34.6550, 'long' => 133.9195],
            ['name' => 'Kurashiki',  'code' => '33211', 'lat' => 34.5853, 'long' => 133.7731],
            ['name' => 'Tsuyama',    'code' => '33322', 'lat' => 35.0592, 'long' => 134.0410],
            ['name' => 'Tamano',     'code' => '33326', 'lat' => 34.4668, 'long' => 133.9395],
            ['name' => 'Kasaoka',    'code' => '33213', 'lat' => 34.5013, 'long' => 133.7789],
            ['name' => 'Soja',       'code' => '33214', 'lat' => 34.6466, 'long' => 133.8460],
            ['name' => 'Takahashi',  'code' => '33216', 'lat' => 35.0464, 'long' => 133.5021],
            ['name' => 'Niimi',      'code' => '33217', 'lat' => 35.0667, 'long' => 133.4195],
            ['name' => 'Mimasaka',   'code' => '33342', 'lat' => 35.0865, 'long' => 134.0068],
            ['name' => 'Maniwa',     'code' => '33345', 'lat' => 35.1536, 'long' => 133.7295],
            ['name' => 'Akaiwa',     'code' => '33368', 'lat' => 34.7773, 'long' => 134.2319],
            ['name' => 'Setouchi',   'code' => '33377', 'lat' => 34.5296, 'long' => 133.7947],
            ['name' => 'Asakuchi',   'code' => '33381', 'lat' => 34.5314, 'long' => 133.7040],
            ['name' => 'Bizen',      'code' => '33382', 'lat' => 34.6189, 'long' => 134.0528],
            ['name' => 'Ibara',      'code' => '33387', 'lat' => 34.6278, 'long' => 133.3577],
        ];
    }
}
