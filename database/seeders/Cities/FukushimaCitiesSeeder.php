<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class FukushimaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Fukushima';
        $this->cities = [
            ['name' => 'Fukushima',      'code' => '072011', 'lat' => 37.75,    'long' => 140.47],
            ['name' => 'Aizuwakamatsu', 'code' => '072021', 'lat' => 37.4997,  'long' => 139.9294],
            ['name' => 'Koriyama',      'code' => '072031', 'lat' => 37.4005,  'long' => 140.3597],
            ['name' => 'Iwaki',         'code' => '072041', 'lat' => 37.0504,  'long' => 140.8877],
            ['name' => 'Sukagawa',      'code' => '072051', 'lat' => 37.2929,  'long' => 140.3570],
            ['name' => 'Nihonmatsu',    'code' => '072061', 'lat' => 37.5849,  'long' => 140.4311],
            ['name' => 'Kitakata',      'code' => '072071', 'lat' => 37.6636,  'long' => 139.9979],
            ['name' => 'Shirakawa',     'code' => '072081', 'lat' => 37.1167,  'long' => 140.2194],
            ['name' => 'Soma',          'code' => '072091', 'lat' => 37.7644,  'long' => 140.9150],
            ['name' => 'Minamisoma',    'code' => '072101', 'lat' => 37.68,    'long' => 140.95],
            ['name' => 'Tamura',        'code' => '072111', 'lat' => 37.4056,  'long' => 140.7728],
            ['name' => 'Date',          'code' => '072121', 'lat' => 37.7511,  'long' => 140.4922],
            ['name' => 'Motomiya',      'code' => '072131', 'lat' => 37.5589,  'long' => 140.4822],
        ];
    }
}
