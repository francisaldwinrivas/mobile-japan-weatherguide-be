<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class ShigaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Shiga';
        $this->cities = [
            ['name' => 'Higashiōmi',     'code' => '25202', 'lat' => 35.3886, 'long' => 136.3120],
            ['name' => 'Hikone',         'code' => '25206', 'lat' => 35.2745, 'long' => 136.2596],
            ['name' => 'Kōka',           'code' => '25209', 'lat' => 34.9167, 'long' => 136.1667],
            ['name' => 'Konan',          'code' => '25210', 'lat' => 35.0167, 'long' => 136.0833],
            ['name' => 'Kusatsu',        'code' => '25212', 'lat' => 35.0131, 'long' => 135.9599],
            ['name' => 'Maibara',        'code' => '25215', 'lat' => 35.3846, 'long' => 136.3774],
            ['name' => 'Moriyama',       'code' => '25217', 'lat' => 35.0882, 'long' => 135.9687],
            ['name' => 'Nagahama',       'code' => '25219', 'lat' => 35.4226, 'long' => 136.2627],
            ['name' => 'Ōmihachiman',    'code' => '25221', 'lat' => 35.1525, 'long' => 136.0696],
            ['name' => 'Ōtsu',           'code' => '25204', 'lat' => 35.0179, 'long' => 135.8546],
            ['name' => 'Rittō',          'code' => '25226', 'lat' => 35.0000, 'long' => 136.0141],
            ['name' => 'Takashima',      'code' => '25227', 'lat' => 35.3545, 'long' => 136.0286],
            ['name' => 'Yasu',           'code' => '25229', 'lat' => 35.0680, 'long' => 136.0233],
        ];
    }
}
