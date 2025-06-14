<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class YamaguchiCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Yamaguchi';
        $this->cities = [
            ['name' => 'Shimonoseki',    'code' => '35201', 'lat' => 34.1728, 'long' => 130.9877],
            ['name' => 'Yamaguchi',      'code' => '35202', 'lat' => 34.1775, 'long' => 131.5467],
            ['name' => 'Ube',            'code' => '35203', 'lat' => 33.9431, 'long' => 131.2511],
            ['name' => 'Shūnan',         'code' => '35204', 'lat' => 34.1514, 'long' => 131.8250],
            ['name' => 'Iwakuni',        'code' => '35205', 'lat' => 34.2061, 'long' => 132.0629],
            ['name' => 'Hōfu',           'code' => '35206', 'lat' => 34.0729, 'long' => 131.5681],
            ['name' => "San'yō-Onoda",   'code' => '35207', 'lat' => 34.0396, 'long' => 131.1542],
            ['name' => 'Kudamatsu',      'code' => '35208', 'lat' => 34.0324, 'long' => 131.8868],
            ['name' => 'Hikari',         'code' => '35209', 'lat' => 33.9825, 'long' => 131.9749],
            ['name' => 'Hagi',           'code' => '35210', 'lat' => 34.4000, 'long' => 131.4167],
            ['name' => 'Nagato',         'code' => '35211', 'lat' => 34.3488, 'long' => 131.1470],
            ['name' => 'Yanai',          'code' => '35212', 'lat' => 33.9624, 'long' => 132.1311],
        ];
    }
}
