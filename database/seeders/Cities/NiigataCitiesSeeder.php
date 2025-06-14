<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class NiigataCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Niigata';
        $this->cities = [
            ['name' => 'Agano',           'code' => '152011', 'lat' => 37.8142, 'long' => 139.2591],
            ['name' => 'Gosen',           'code' => '152023', 'lat' => 37.7333, 'long' => 139.1667],
            ['name' => 'Itoigawa',        'code' => '152027', 'lat' => 37.0333, 'long' => 137.8940],
            ['name' => 'Jōetsu',          'code' => '152033', 'lat' => 37.1483, 'long' => 138.3375],
            ['name' => 'Kamo',            'code' => '152042', 'lat' => 37.6644, 'long' => 139.0350],
            ['name' => 'Kashiwazaki',     'code' => '152056', 'lat' => 37.3667, 'long' => 138.5500],
            ['name' => 'Minamiuonuma',    'code' => '152068', 'lat' => 37.0559, 'long' => 138.9374],
            ['name' => 'Mitsuke',         'code' => '152077', 'lat' => 37.5333, 'long' => 138.9333],
            ['name' => 'Murakami',        'code' => '152085', 'lat' => 38.3102, 'long' => 139.6173],
            ['name' => 'Myōkō',           'code' => '152094', 'lat' => 37.0000, 'long' => 138.2500],
            ['name' => 'Nagaoka',         'code' => '152103', 'lat' => 37.4452, 'long' => 138.8568],
            ['name' => 'Niigata',         'code' => '152011', 'lat' => 37.8864, 'long' => 139.0364],
            ['name' => 'Ojiya',           'code' => '152124', 'lat' => 37.3000, 'long' => 138.8000],
            ['name' => 'Sado',            'code' => '152132', 'lat' => 38.0444, 'long' => 138.3898],
            ['name' => 'Sanjō',           'code' => '152141', 'lat' => 37.5407, 'long' => 139.0898],
            ['name' => 'Shibata',         'code' => '152150', 'lat' => 37.9500, 'long' => 139.3333],
            ['name' => 'Tainai',          'code' => '152168', 'lat' => 38.0665, 'long' => 139.3744],
            ['name' => 'Tōkamachi',       'code' => '152176', 'lat' => 37.1333, 'long' => 138.7667],
            ['name' => 'Tsubame',         'code' => '152184', 'lat' => 37.6654, 'long' => 138.9252],
            ['name' => 'Uonuma',          'code' => '152193', 'lat' => 37.2209, 'long' => 139.0979],
        ];
    }
}
