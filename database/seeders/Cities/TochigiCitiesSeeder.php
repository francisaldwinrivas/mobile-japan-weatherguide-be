<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class TochigiCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Tochigi';
        $this->cities = [
            ['name' => 'Utsunomiya',       'code' => '092011', 'lat' => 36.555112, 'long' => 139.882807],
            ['name' => 'Ashikaga',         'code' => '092029', 'lat' => 36.340151, 'long' => 139.449698],
            ['name' => 'Tochigi',          'code' => '092037', 'lat' => 36.382380, 'long' => 139.734081],
            ['name' => 'Sano',             'code' => '092045', 'lat' => 36.308578, 'long' => 139.593118],
            ['name' => 'Kanuma',           'code' => '092053', 'lat' => 36.567111, 'long' => 139.745013],
            ['name' => 'Nikkō',            'code' => '092061', 'lat' => 36.719903, 'long' => 139.698216],
            ['name' => 'Oyama',            'code' => '092088', 'lat' => 36.314671, 'long' => 139.800131],
            ['name' => 'Mooka',            'code' => '092096', 'lat' => 36.440419, 'long' => 140.013442],
            ['name' => 'Ōtawara',          'code' => '092100', 'lat' => 36.871484, 'long' => 140.017419],
            ['name' => 'Yaita',            'code' => '092118', 'lat' => 36.806686, 'long' => 139.924054],
            ['name' => 'Nasushiobara',     'code' => '092134', 'lat' => 36.961698, 'long' => 140.046066],
            ['name' => 'Sakura',           'code' => '092142', 'lat' => 36.685301, 'long' => 139.966452],
            ['name' => 'Nasukarasuyama',  'code' => '092151', 'lat' => 36.656893, 'long' => 140.151426],
            ['name' => 'Shimotsuke',       'code' => '092169', 'lat' => 36.387195, 'long' => 139.841967],
        ];
    }
}
