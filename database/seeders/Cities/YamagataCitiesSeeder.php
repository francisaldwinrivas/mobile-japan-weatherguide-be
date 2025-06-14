<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class YamagataCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Yamagata';
        $this->cities = [
            ['name' => 'Yamagata',      'code' => '062011', 'lat' => 38.26833, 'long' => 140.86944],
            ['name' => 'Tsuruoka',      'code' => '062025', 'lat' => 38.71667, 'long' => 139.82167],
            ['name' => 'Sakata',        'code' => '062030', 'lat' => 38.91667, 'long' => 139.98333],
            ['name' => 'Yonezawa',      'code' => '062040', 'lat' => 37.91667, 'long' => 140.11667],
            ['name' => 'Tendō',         'code' => '062050', 'lat' => 38.38306, 'long' => 140.36972],
            ['name' => 'Higashine',     'code' => '062060', 'lat' => 38.43889, 'long' => 140.40056],
            ['name' => 'Sagae',         'code' => '062070', 'lat' => 38.37250, 'long' => 140.27250],
            ['name' => 'Shinjō',        'code' => '062080', 'lat' => 38.75861, 'long' => 140.30083],
            ['name' => "Nan'yō",        'code' => '062090', 'lat' => 38.10319, 'long' => 140.15609],
            ['name' => 'Kaminoyama',    'code' => '062100', 'lat' => 38.13333, 'long' => 140.33333],
            ['name' => 'Nagai',         'code' => '062110', 'lat' => 38.16667, 'long' => 140.00000],
            ['name' => 'Murayama',      'code' => '062120', 'lat' => 38.51671, 'long' => 140.33518],
            ['name' => 'Obanazawa',     'code' => '062130', 'lat' => 38.59362, 'long' => 140.40194],
        ];
    }
}
