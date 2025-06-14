<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class EhimeCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Ehime';
        $this->cities = [
            ['name' => 'Matsuyama',       'code' => '38201', 'lat' => 33.83916, 'long' => 132.76558],
            ['name' => 'Imabari',         'code' => '38202', 'lat' => 34.06667, 'long' => 132.99791],
            ['name' => 'Niihama',         'code' => '38205', 'lat' => 33.96000, 'long' => 133.10000],
            ['name' => 'Saijō',           'code' => '38206', 'lat' => 33.90944, 'long' => 133.19278],
            ['name' => 'Shikokuchūō',     'code' => '38213', 'lat' => 33.65972, 'long' => 133.47917],
            ['name' => 'Ōzu',             'code' => '38204', 'lat' => 33.47778, 'long' => 132.56417],
            ['name' => 'Uwajima',         'code' => '38203', 'lat' => 33.22917, 'long' => 132.56667],
            ['name' => 'Seiyo',           'code' => '38214', 'lat' => 33.48806, 'long' => 132.57833],
            ['name' => 'Tōon',            'code' => '38215', 'lat' => 33.80333, 'long' => 132.76583],
            ['name' => 'Iyo',             'code' => '38210', 'lat' => 33.79528, 'long' => 132.69722],
            ['name' => 'Yawatahama',      'code' => '38204', 'lat' => 33.46250, 'long' => 132.55556],
        ];
    }
}
