<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class OkinawaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Okinawa';
        $this->cities = [
            ['name' => 'Naha',               'code' => '47201', 'lat' => 26.2124, 'long' => 127.6789],
            ['name' => 'Okinawa',            'code' => '47202', 'lat' => 26.3358, 'long' => 127.8017],
            ['name' => 'Uruma',              'code' => '47203', 'lat' => 26.3583, 'long' => 127.8208],
            ['name' => 'Urasoe',             'code' => '47204', 'lat' => 26.2350, 'long' => 127.7417],
            ['name' => 'Ginowan',            'code' => '47205', 'lat' => 26.3194, 'long' => 127.7681],
            ['name' => 'Tomigusuku',         'code' => '47206', 'lat' => 26.1347, 'long' => 127.6697],
            ['name' => 'Nago',               'code' => '47207', 'lat' => 26.5736, 'long' => 127.9780],
            ['name' => 'Itoman',             'code' => '47208', 'lat' => 26.1269, 'long' => 127.6781],
            ['name' => 'Miyakojima',         'code' => '47209', 'lat' => 24.8036, 'long' => 125.2822],
            ['name' => 'Ishigaki',           'code' => '47210', 'lat' => 24.3445, 'long' => 124.1575],
            ['name' => 'Nanjō',              'code' => '47211', 'lat' => 26.1292, 'long' => 127.7411],
            ['name' => 'Yaese',              'code' => '47212', 'lat' => 26.1486, 'long' => 127.6847],
            ['name' => 'Chatan',             'code' => '47213', 'lat' => 26.3186, 'long' => 127.7472],
        ];
    }
}
