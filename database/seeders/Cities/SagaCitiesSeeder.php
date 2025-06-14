<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class SagaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Saga';
        $this->cities = [
            ['name' => 'Saga',       'code' => '41201', 'lat' => 33.2333, 'long' => 130.3000],
            ['name' => 'Karatsu',    'code' => '41202', 'lat' => 33.4333, 'long' => 129.9733],
            ['name' => 'Tosu',       'code' => '41203', 'lat' => 33.3881, 'long' => 130.5008],
            ['name' => 'Imari',      'code' => '41205', 'lat' => 33.2460, 'long' => 129.9865],
            ['name' => 'Takeo',      'code' => '41206', 'lat' => 33.1684, 'long' => 130.0830],
            ['name' => 'Ogi',        'code' => '41208', 'lat' => 33.1236, 'long' => 130.0928],
            ['name' => 'Kashima',    'code' => '41207', 'lat' => 33.1321, 'long' => 130.0191],
            ['name' => 'Ureshino',   'code' => '41209', 'lat' => 33.0909, 'long' => 130.1508],
            ['name' => 'Kanzaki',    'code' => '41210', 'lat' => 33.3014, 'long' => 130.2867],
            ['name' => 'Taku',       'code' => '41204', 'lat' => 33.2009, 'long' => 130.0821],
        ];
    }
}
