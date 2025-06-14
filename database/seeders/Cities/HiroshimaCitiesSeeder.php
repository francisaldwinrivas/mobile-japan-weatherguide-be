<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class HiroshimaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Hiroshima';
        $this->cities = [
            ['name' => 'Akitakata',          'code' => '34202', 'lat' => 34.7025, 'long' => 132.6777],
            ['name' => 'Etajima',            'code' => '34204', 'lat' => 34.2199, 'long' => 132.4435],
            ['name' => 'Fuchū',              'code' => '34205', 'lat' => 34.5667, 'long' => 133.2351],
            ['name' => 'Fukuyama',           'code' => '34207', 'lat' => 34.4833, 'long' => 133.3667],
            ['name' => 'Hatsukaichi',        'code' => '34208', 'lat' => 34.3500, 'long' => 132.3000],
            ['name' => 'Higashihiroshima',   'code' => '34209', 'lat' => 34.4264, 'long' => 132.7433],
            ['name' => 'Hiroshima',          'code' => '34201', 'lat' => 34.4794, 'long' => 132.4531],
            ['name' => 'Kure',               'code' => '34210', 'lat' => 34.2245, 'long' => 132.6291],
            ['name' => 'Mihara',             'code' => '34211', 'lat' => 34.4582, 'long' => 133.0039],
            ['name' => 'Miyoshi',            'code' => '34212', 'lat' => 34.7920, 'long' => 132.8644],
            ['name' => 'Onomichi',           'code' => '34213', 'lat' => 34.4263, 'long' => 133.1633],
            ['name' => 'Ōtake',              'code' => '34214', 'lat' => 34.2378, 'long' => 132.2222],
            ['name' => 'Shōbara',            'code' => '34215', 'lat' => 34.9483, 'long' => 133.0677],
            ['name' => 'Takehara',           'code' => '34216', 'lat' => 34.3500, 'long' => 132.9000],
        ];
    }
}
