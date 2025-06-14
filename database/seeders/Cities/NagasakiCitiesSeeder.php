<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class NagasakiCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Nagasaki';
        $this->cities = [
            ['name' => 'Gotō',               'code' => '42211', 'lat' => 32.7020, 'long' => 128.8220],
            ['name' => 'Hirado',             'code' => '42207', 'lat' => 33.3690, 'long' => 129.5400],
            ['name' => 'Iki',                'code' => '42210', 'lat' => 33.7500, 'long' => 129.7200],
            ['name' => 'Isahaya',            'code' => '42204', 'lat' => 32.9948, 'long' => 130.0433],
            ['name' => 'Matsuura',           'code' => '42208', 'lat' => 33.3330, 'long' => 129.7980],
            ['name' => 'Minamishimabara',    'code' => '42214', 'lat' => 32.6368, 'long' => 130.3011],
            ['name' => 'Nagasaki',           'code' => '42201', 'lat' => 32.7642, 'long' => 129.8727],
            ['name' => 'Ōmura',              'code' => '42205', 'lat' => 32.9163, 'long' => 129.9470],
            ['name' => 'Saikai',             'code' => '42212', 'lat' => 33.1285, 'long' => 129.9072],
            ['name' => 'Sasebo',             'code' => '42202', 'lat' => 33.1784, 'long' => 129.7156],
            ['name' => 'Shimabara',          'code' => '42203', 'lat' => 32.8024, 'long' => 130.3866],
            ['name' => 'Tsushima',           'code' => '42209', 'lat' => 34.2260, 'long' => 129.3196],
            ['name' => 'Unzen',              'code' => '42213', 'lat' => 32.7738, 'long' => 130.2815],
        ];
    }
}
