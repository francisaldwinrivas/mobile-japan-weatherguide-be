<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class ToyamaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Toyama';
        $this->cities = [
            ['name' => 'Toyama',    'code' => '16201', 'lat' => 36.695952, 'long' => 137.213677],
            ['name' => 'Takaoka',   'code' => '16202', 'lat' => 36.742570, 'long' => 136.962630],
            ['name' => 'Imizu',     'code' => '16211', 'lat' => 36.729390, 'long' => 137.087840],
            ['name' => 'Tonami',    'code' => '16208', 'lat' => 36.623950, 'long' => 136.988990],
            ['name' => 'Nanto',     'code' => '16210', 'lat' => 36.452600, 'long' => 136.911620],
            ['name' => 'Himi',      'code' => '16205', 'lat' => 36.872180, 'long' => 136.940660],
            ['name' => 'Uozu',      'code' => '16204', 'lat' => 36.762340, 'long' => 137.489840],
            ['name' => 'Kurobe',    'code' => '16207', 'lat' => 36.901230, 'long' => 137.449550],
            ['name' => 'Namerikawa', 'code' => '16206', 'lat' => 36.759650, 'long' => 137.362150],
            ['name' => 'Oyabe',     'code' => '16209', 'lat' => 36.663490, 'long' => 136.854990],
        ];
    }
}
