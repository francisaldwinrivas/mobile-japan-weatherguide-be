<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class IwateCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Iwate';
        $this->cities = [
            ['name' => 'Morioka',           'code' => '032011', 'lat' => 39.7035, 'long' => 141.1527],
            ['name' => 'Morioka (alt)',     'code' => '032011', 'lat' => 39.7455, 'long' => 141.2692],
            ['name' => 'Ichinoseki',        'code' => '032031', 'lat' => 38.9167, 'long' => 141.1333],
            ['name' => 'Ichinoseki‑Shi',    'code' => '032031', 'lat' => 38.9167, 'long' => 141.1333],
            ['name' => 'Ōshū',              'code' => '032035', 'lat' => 39.1393, 'long' => 141.1685],
            ['name' => 'Ōtsuchi',           'code' => '032038', 'lat' => 39.3667, 'long' => 141.9000],
            ['name' => 'Ōfunato',           'code' => '032041', 'lat' => 39.0717, 'long' => 141.7167],
            ['name' => 'Kamaishi',          'code' => '032043', 'lat' => 39.2875, 'long' => 141.7985],
            ['name' => 'Kitakami',          'code' => '032053', 'lat' => 39.3076, 'long' => 141.0080],
            ['name' => 'Kuji',              'code' => '032059', 'lat' => 40.1436, 'long' => 141.6592],
            ['name' => 'Miyako',            'code' => '032065', 'lat' => 39.6572, 'long' => 141.8514],
            ['name' => 'Rikuzentakata',     'code' => '032071', 'lat' => 39.0408, 'long' => 141.5770],
            ['name' => 'Hachimantai',       'code' => '032077', 'lat' => 39.8998, 'long' => 141.1299],
            ['name' => 'Tōno',              'code' => '032081', 'lat' => 39.3648, 'long' => 141.5092],
            ['name' => 'Takizawa',          'code' => '032088', 'lat' => 39.8000, 'long' => 141.0667],
        ];
    }
}
