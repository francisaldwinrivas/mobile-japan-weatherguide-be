<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class KagawaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Kagawa';
        $this->cities = [
            ['name' => 'Takamatsu',        'code' => '37201', 'lat' => 34.2685, 'long' => 134.0545],
            ['name' => 'Marugame',        'code' => '37202', 'lat' => 34.2856, 'long' => 133.8153],
            ['name' => 'Sakaide',         'code' => '37203', 'lat' => 34.3240, 'long' => 133.8922],
            ['name' => 'Zentsūji',        'code' => '37204', 'lat' => 34.2258, 'long' => 133.7769],
            ['name' => 'Mitoyo',          'code' => '37205', 'lat' => 34.1618, 'long' => 133.7228],
            ['name' => "Kan'onji",        'code' => '37206', 'lat' => 34.0846, 'long' => 133.6745],
            ['name' => 'Sanuki',          'code' => '37207', 'lat' => 34.2662, 'long' => 134.2094],
            ['name' => 'Higashikagawa',   'code' => '37208', 'lat' => 34.2116, 'long' => 134.3335],
        ];
    }
}
