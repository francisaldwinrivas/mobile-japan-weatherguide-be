<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class NaraCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Nara';
        $this->cities = [
            ['name' => 'Nara', 'code' => '29201', 'lat' => 34.6851, 'long' => 135.8048],
            ['name' => 'Yamatokoriyama', 'code' => '29202', 'lat' => 34.6502, 'long' => 135.7924],
            ['name' => 'Tenri', 'code' => '29203', 'lat' => 34.5972, 'long' => 135.8328],
            ['name' => 'Kashihara', 'code' => '29204', 'lat' => 34.5124, 'long' => 135.7928],
            ['name' => 'Sakurai', 'code' => '29205', 'lat' => 34.5147, 'long' => 135.8483],
            ['name' => 'Gojo', 'code' => '29206', 'lat' => 34.3511, 'long' => 135.6972],
            ['name' => 'Gose', 'code' => '29207', 'lat' => 34.4513, 'long' => 135.7379],
            ['name' => 'Ikoma', 'code' => '29208', 'lat' => 34.6911, 'long' => 135.7008],
            ['name' => 'Yamatotakada', 'code' => '29209', 'lat' => 34.5047, 'long' => 135.7456],
            ['name' => 'Uda', 'code' => '29210', 'lat' => 34.5153, 'long' => 135.9603],
        ];
    }
}
