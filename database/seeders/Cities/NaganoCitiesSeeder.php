<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class NaganoCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Nagano';
        $this->cities = [
            ['name' => 'Nagano',       'code' => '20101', 'lat' => 36.6514, 'long' => 138.1811],
            ['name' => 'Matsumoto',    'code' => '20102', 'lat' => 36.2381, 'long' => 137.9712],
            ['name' => 'Ueda',         'code' => '20103', 'lat' => 36.4023, 'long' => 138.2529],
            ['name' => 'Saku',         'code' => '20105', 'lat' => 36.2268, 'long' => 138.4831],
            ['name' => 'Iida',         'code' => '20106', 'lat' => 35.5178, 'long' => 137.8212],
            ['name' => 'Azumino',      'code' => '20107', 'lat' => 36.2930, 'long' => 137.9485],
            ['name' => 'Shiojiri',     'code' => '20108', 'lat' => 36.1283, 'long' => 137.8531],
            ['name' => 'Ina',          'code' => '20109', 'lat' => 35.8310, 'long' => 137.9558],
            ['name' => 'Chikuma',      'code' => '20110', 'lat' => 36.5629, 'long' => 138.1089],
            ['name' => 'Chino',        'code' => '20111', 'lat' => 35.9908, 'long' => 138.3729],
            ['name' => 'Suzaka',       'code' => '20112', 'lat' => 36.6522, 'long' => 138.3575],
            ['name' => 'Suwa',         'code' => '20113', 'lat' => 36.0425, 'long' => 138.1108],
            ['name' => 'Okaya',        'code' => '20114', 'lat' => 36.0839, 'long' => 138.1217],
            ['name' => 'Nakano',       'code' => '20115', 'lat' => 36.6489, 'long' => 138.1839],
            ['name' => 'Komoro',       'code' => '20116', 'lat' => 35.9422, 'long' => 138.4450],
            ['name' => 'Komagane',     'code' => '20117', 'lat' => 35.8299, 'long' => 137.8588],
            ['name' => 'Tomi',         'code' => '20118', 'lat' => 36.4224, 'long' => 138.2926],
            ['name' => 'Ōmachi',       'code' => '20119', 'lat' => 36.5683, 'long' => 137.8611],
            ['name' => 'Iiyama',       'code' => '20120', 'lat' => 36.8323, 'long' => 138.3610],
            ['name' => 'Tōkamachi',    'code' => '20121', 'lat' => 36.9091, 'long' => 138.9508],
        ];
    }
}
