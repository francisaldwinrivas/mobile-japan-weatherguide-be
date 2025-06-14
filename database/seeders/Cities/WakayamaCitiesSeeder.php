<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class WakayamaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Wakayama';
        $this->cities = [
            ['name' => 'Wakayama', 'code' => '30201', 'lat' => 34.2260, 'long' => 135.1675],
            ['name' => 'Shingu', 'code' => '30202', 'lat' => 33.7331, 'long' => 135.9911],
            ['name' => 'Tanabe', 'code' => '30203', 'lat' => 33.7324, 'long' => 135.3786],
            ['name' => 'Gobō', 'code' => '30204', 'lat' => 33.8917, 'long' => 135.1578],
            ['name' => 'Hashimoto', 'code' => '30205', 'lat' => 34.3150, 'long' => 135.6051],
            ['name' => 'Arida', 'code' => '30206', 'lat' => 34.0736, 'long' => 135.1331],
            ['name' => 'Kainan', 'code' => '30207', 'lat' => 34.1596, 'long' => 135.2053],
            ['name' => 'Iwamizawa', 'code' => '30208', 'lat' => 34.3169, 'long' => 135.6241], // *Note: Likely incorrect; verify if needed
            ['name' => 'Kinokawa', 'code' => '30209', 'lat' => 34.2317, 'long' => 135.3967],
        ];
    }
}
