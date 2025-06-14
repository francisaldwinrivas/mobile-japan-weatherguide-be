<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class MiyagiCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Miyagi';
        $this->cities = [
            ['name' => 'Sendai',             'code' => '042010', 'lat' => 38.2682, 'long' => 140.8694],
            ['name' => 'Ishinomaki',         'code' => '042020', 'lat' => 38.4167, 'long' => 141.3000],
            ['name' => 'Ōsaki',              'code' => '042040', 'lat' => 38.5887, 'long' => 140.9730],
            ['name' => 'Natori',             'code' => '042060', 'lat' => 38.1673, 'long' => 140.8667],
            ['name' => 'Tome',               'code' => '042080', 'lat' => 38.6858, 'long' => 141.2575],
            ['name' => 'Kurihara',           'code' => '042100', 'lat' => 38.7500, 'long' => 141.0000],
            ['name' => 'Tagajō',             'code' => '042110', 'lat' => 38.2954, 'long' => 140.9991],
            ['name' => 'Kesennuma',          'code' => '042120', 'lat' => 38.9138, 'long' => 141.5571],
            ['name' => 'Shiogama',           'code' => '042130', 'lat' => 38.3167, 'long' => 141.0333],
            ['name' => 'Shiroishi',          'code' => '042150', 'lat' => 38.0033, 'long' => 140.6183],
            ['name' => 'Iwanuma',            'code' => '042160', 'lat' => 38.1167, 'long' => 140.8833],
            ['name' => 'Higashimatsushima',  'code' => '042170', 'lat' => 38.4089, 'long' => 141.1790],
            ['name' => 'Kakuda',             'code' => '042180', 'lat' => 37.9883, 'long' => 140.7790],
            ['name' => 'Tomiya',             'code' => '042190', 'lat' => 38.3931, 'long' => 140.8861],
        ];
    }
}
