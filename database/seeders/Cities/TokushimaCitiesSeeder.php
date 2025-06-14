<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class TokushimaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Tokushima';
        $this->cities = [
            ['name' => 'Tokushima',      'code' => '36201', 'lat' => 34.0667, 'long' => 134.5667],
            ['name' => 'Anan',           'code' => '36202', 'lat' => 33.9167, 'long' => 134.6500],
            ['name' => 'Awa',            'code' => '36203', 'lat' => 34.0425, 'long' => 134.3950],
            ['name' => 'Komatsushima',   'code' => '36204', 'lat' => 34.0210, 'long' => 134.6030],
            ['name' => 'Mima',           'code' => '36205', 'lat' => 34.0680, 'long' => 134.3180],
            ['name' => 'Miyoshi',        'code' => '36206', 'lat' => 34.0780, 'long' => 134.0400],
            ['name' => 'Naruto',         'code' => '36207', 'lat' => 34.1500, 'long' => 134.6000],
            ['name' => 'Yoshinogawa',    'code' => '36208', 'lat' => 34.0000, 'long' => 134.3167],
        ];
    }
}
