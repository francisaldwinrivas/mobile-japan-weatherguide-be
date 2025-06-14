<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class KyotoCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Kyoto';
        $this->cities = [
            ['name' => 'Kyoto',        'code' => '26101', 'lat' => 35.01167, 'long' => 135.76833],
            ['name' => 'Uji',          'code' => '26202', 'lat' => 34.90296, 'long' => 135.82039],
            ['name' => 'Kameoka',      'code' => '26204', 'lat' => 35.00943, 'long' => 135.58319],
            ['name' => 'Nagaokakyō',   'code' => '26205', 'lat' => 34.94241, 'long' => 135.72810],
            ['name' => 'Maizuru',      'code' => '26207', 'lat' => 35.44759, 'long' => 135.33655],
            ['name' => 'Fukuchiyama',  'code' => '26209', 'lat' => 35.30205, 'long' => 135.11045],
            ['name' => 'Jōyō',         'code' => '26210', 'lat' => 34.80465, 'long' => 135.79760],
            ['name' => 'Kyōtanabe',    'code' => '26212', 'lat' => 34.80779, 'long' => 135.76300],
            ['name' => 'Yawata',       'code' => '26213', 'lat' => 34.88461, 'long' => 135.80252],
            ['name' => 'Mukō',         'code' => '26214', 'lat' => 34.94975, 'long' => 135.70269],
            ['name' => 'Kyōtango',     'code' => '26216', 'lat' => 35.70121, 'long' => 135.30382],
            ['name' => 'Ayabe',        'code' => '26217', 'lat' => 35.31189, 'long' => 135.29238],
            ['name' => 'Miyazu',       'code' => '26218', 'lat' => 35.56908, 'long' => 135.32995],
            ['name' => 'Nantan',       'code' => '26219', 'lat' => 35.23326, 'long' => 135.56944],
        ];
    }
}
