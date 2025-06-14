<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class KagoshimaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Kagoshima';
        $this->cities = [
            ['name' => 'Aira',               'code' => '42215', 'lat' => 31.7667, 'long' => 130.5500],
            ['name' => 'Akune',              'code' => '42206', 'lat' => 32.2761, 'long' => 130.2231],
            ['name' => 'Amami',              'code' => '42212', 'lat' => 28.3727, 'long' => 129.4935],
            ['name' => 'Hioki',              'code' => '42208', 'lat' => 31.5792, 'long' => 130.4272],
            ['name' => 'Ibusuki',            'code' => '42214', 'lat' => 31.2594, 'long' => 130.6575],
            ['name' => 'Ichikikushikino',    'code' => '42210', 'lat' => 31.8010, 'long' => 130.2600],
            ['name' => 'Isa',                'code' => '42204', 'lat' => 32.0667, 'long' => 130.6667],
            ['name' => 'Izumi',              'code' => '42207', 'lat' => 32.0314, 'long' => 130.3746],
            ['name' => 'Kagoshima',          'code' => '42201', 'lat' => 31.5667, 'long' => 130.5500],
            ['name' => 'Kanoya',             'code' => '42202', 'lat' => 31.4167, 'long' => 130.8500],
            ['name' => 'Kirishima',          'code' => '42211', 'lat' => 31.7930, 'long' => 130.8800],
            ['name' => 'Makurazaki',         'code' => '42209', 'lat' => 31.2433, 'long' => 130.3186],
            ['name' => 'Minamikyūshū',       'code' => '42205', 'lat' => 31.5550, 'long' => 130.3575],
            ['name' => 'Minamisatsuma',      'code' => '42213', 'lat' => 31.5031, 'long' => 130.2453],
            ['name' => 'Nishinoomote',       'code' => '42203', 'lat' => 30.7462, 'long' => 130.9765],
            ['name' => 'Satsumasendai',      'code' => '42216', 'lat' => 32.0667, 'long' => 130.3072],
            ['name' => 'Shibushi',           'code' => '42217', 'lat' => 31.5975, 'long' => 131.1969],
            ['name' => 'Soo',                'code' => '42218', 'lat' => 31.5883, 'long' => 130.5697],
            ['name' => 'Tarumizu',           'code' => '42219', 'lat' => 31.5492, 'long' => 130.5719],
        ];
    }
}
