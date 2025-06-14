<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class YamanashiCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Yamanashi';
        $this->cities = [
            ['name' => 'Chūō',           'code' => '19203', 'lat' => 35.6658, 'long' => 138.6114],
            ['name' => 'Fuefuki',        'code' => '19204', 'lat' => 35.6892, 'long' => 138.6257],
            ['name' => 'Fujiyoshida',    'code' => '19205', 'lat' => 35.4893, 'long' => 138.8056],
            ['name' => 'Hokuto',         'code' => '19206', 'lat' => 35.7092, 'long' => 138.5814],
            ['name' => 'Kai',            'code' => '19207', 'lat' => 35.6547, 'long' => 138.5881],
            ['name' => 'Kōfu',           'code' => '19201', 'lat' => 35.6639, 'long' => 138.5684],
            ['name' => 'Kōshū',          'code' => '19208', 'lat' => 35.6621, 'long' => 138.7521],
            ['name' => 'Minami-Alps',    'code' => '19209', 'lat' => 35.6556, 'long' => 138.5264],
            ['name' => 'Nirasaki',       'code' => '19210', 'lat' => 35.6175, 'long' => 138.5947],
            ['name' => 'Ōtsuki',         'code' => '19211', 'lat' => 35.7498, 'long' => 138.9458],
            ['name' => 'Tsuru',          'code' => '19212', 'lat' => 35.4035, 'long' => 138.9300],
            ['name' => 'Uenohara',       'code' => '19213', 'lat' => 35.6629, 'long' => 139.1131],
            ['name' => 'Yamanashi',      'code' => '19214', 'lat' => 35.7508, 'long' => 138.8056],
        ];
    }
}
