<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class AkitaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Akita';
        $this->cities = [
            ['name' => 'Akita',         'code' => '052011', 'lat' => 39.71861, 'long' => 140.10250],
            ['name' => 'Daisen',        'code' => '052024', 'lat' => 39.45306, 'long' => 140.47556],
            ['name' => 'Katagami',      'code' => '052029', 'lat' => 39.85722, 'long' => 140.01306],
            ['name' => 'Kazuno',        'code' => '052034', 'lat' => 40.21583, 'long' => 140.78861],
            ['name' => 'Kitaakita',     'code' => '052039', 'lat' => 40.22611, 'long' => 140.37083],
            ['name' => 'Nikaho',        'code' => '052049', 'lat' => 39.20306, 'long' => 139.90778],
            ['name' => 'Noshiro',       'code' => '052053', 'lat' => 40.21194, 'long' => 140.02722],
            ['name' => 'Oga',           'code' => '052057', 'lat' => 39.88667, 'long' => 139.84750],
            ['name' => 'Odate',         'code' => '052061', 'lat' => 40.27139, 'long' => 140.56389],
            ['name' => 'Semboku',       'code' => '052064', 'lat' => 39.70000, 'long' => 140.73056],
            ['name' => 'Yokote',        'code' => '052067', 'lat' => 39.31389, 'long' => 140.56667],
            ['name' => 'Yurihonjo',     'code' => '052072', 'lat' => 39.38583, 'long' => 140.04889],
            ['name' => 'Yuzawa',        'code' => '052078', 'lat' => 39.16444, 'long' => 140.49583],
        ];
    }
}
