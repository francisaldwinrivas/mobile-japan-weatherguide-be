<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class KanagawaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Kanagawa';
        $this->cities = [
            ['name' => 'Yokohama',           'code' => '14100', 'lat' => 35.4437, 'long' => 139.6380],
            ['name' => 'Kawasaki',           'code' => '14130', 'lat' => 35.5206, 'long' => 139.7172],
            ['name' => 'Sagamihara',        'code' => '14140', 'lat' => 35.5500, 'long' => 139.3500],
            ['name' => 'Fujisawa',          'code' => '14160', 'lat' => 35.3493, 'long' => 139.4767],
            ['name' => 'Yokosuka',          'code' => '14170', 'lat' => 35.2836, 'long' => 139.6672],
            ['name' => 'Hiratsuka',         'code' => '14190', 'lat' => 35.3279, 'long' => 139.3374],
            ['name' => 'Chigasaki',         'code' => '14196', 'lat' => 35.3364, 'long' => 139.4043],
            ['name' => 'Yamato',             'code' => '14202', 'lat' => 35.4693, 'long' => 139.4617],
            ['name' => 'Atsugi',             'code' => '14211', 'lat' => 35.4651, 'long' => 139.3271],
            ['name' => 'Odawara',           'code' => '14207', 'lat' => 35.2711, 'long' => 139.1663],
            ['name' => 'Kamakura',          'code' => '14215', 'lat' => 35.3089, 'long' => 139.5503],
            ['name' => 'Hadano',            'code' => '14220', 'lat' => 35.3711, 'long' => 139.2236],
            ['name' => 'Ebina',             'code' => '14224', 'lat' => 35.4376, 'long' => 139.3931],
            ['name' => 'Zama',              'code' => '14227', 'lat' => 35.4879, 'long' => 139.3910],
            ['name' => 'Isehara',           'code' => '14234', 'lat' => 35.4101, 'long' => 139.2920],
            ['name' => 'Ayase',             'code' => '14236', 'lat' => 35.4399, 'long' => 139.4309],
            ['name' => 'Zushi',             'code' => '14237', 'lat' => 35.2990, 'long' => 139.5913],
            ['name' => 'Miura',             'code' => '14242', 'lat' => 35.1675, 'long' => 139.6410],
            ['name' => 'Minamiashigara',    'code' => '14244', 'lat' => 35.3099, 'long' => 139.0702],
            ['name' => 'Ninomiya',          'code' => '14245', 'lat' => 35.3015, 'long' => 139.2558],
            ['name' => 'Yugawara',          'code' => '14248', 'lat' => 35.1500, 'long' => 139.0667],
            ['name' => 'Hakone',            'code' => '14252', 'lat' => 35.1895, 'long' => 139.0265],
            ['name' => 'Oiso',              'code' => '14254', 'lat' => 35.3156, 'long' => 139.3163],
            ['name' => 'Hayama',            'code' => '14255', 'lat' => 35.2765, 'long' => 139.5773],
            ['name' => 'Samukawa',          'code' => '14260', 'lat' => 35.3360, 'long' => 139.4070],
            ['name' => 'Kawasaki-shi',      'code' => '14130', 'lat' => 35.5206, 'long' => 139.7172],
            ['name' => 'Yokohama-shi',      'code' => '14100', 'lat' => 35.4437, 'long' => 139.6380],
            ['name' => 'Kanagawa-shi',      'code' => '14270', 'lat' => 35.4778, 'long' => 139.6139],
        ];
    }
}
