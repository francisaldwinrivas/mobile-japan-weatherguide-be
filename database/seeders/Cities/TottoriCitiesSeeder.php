<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class TottoriCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Tottori';
        $this->cities = [
            ['name' => 'Tottori', 'code' => '31201', 'lat' => 35.5011, 'long' => 134.2350],
            ['name' => 'Yonago', 'code' => '31202', 'lat' => 35.4286, 'long' => 133.3307],
            ['name' => 'Kurayoshi', 'code' => '31203', 'lat' => 35.4315, 'long' => 133.8223],
            ['name' => 'Sakaiminato', 'code' => '31204', 'lat' => 35.5431, 'long' => 133.2314],
        ];
    }
}
