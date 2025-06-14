<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class KumamotoCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Kumamoto';
        $this->cities = [
            ['name' => 'Amakusa',          'code' => '43202', 'lat' => 32.5250, 'long' => 130.1620],
            ['name' => 'Arao',             'code' => '43203', 'lat' => 32.9719, 'long' => 130.3478],
            ['name' => 'Aso',              'code' => '43205', 'lat' => 32.9575, 'long' => 131.1006],
            ['name' => 'Hitoyoshi',        'code' => '43206', 'lat' => 32.2364, 'long' => 130.7500],
            ['name' => 'Kikuchi',          'code' => '43208', 'lat' => 32.9161, 'long' => 130.7417],
            ['name' => 'Kōshi',            'code' => '43209', 'lat' => 32.8683, 'long' => 130.7436],
            ['name' => 'Kumamoto',         'code' => '43201', 'lat' => 32.8059, 'long' => 130.6918],
            ['name' => 'Minamata',         'code' => '43211', 'lat' => 32.2011, 'long' => 130.3687],
            ['name' => 'Tamana',           'code' => '43212', 'lat' => 32.8310, 'long' => 130.5544],
            ['name' => 'Uki',              'code' => '43213', 'lat' => 32.7892, 'long' => 130.7011],
            ['name' => 'Uto',              'code' => '43214', 'lat' => 32.7228, 'long' => 130.6175],
            ['name' => 'Yamaga',           'code' => '43215', 'lat' => 33.0001, 'long' => 130.7583],
            ['name' => 'Yatsushiro',       'code' => '43204', 'lat' => 32.5095, 'long' => 130.6025],
            ['name' => 'Amagiyama',        'code' => '43216', 'lat' => 32.7500, 'long' => 130.5000], // if needed; otherwise drop
        ];
    }
}
