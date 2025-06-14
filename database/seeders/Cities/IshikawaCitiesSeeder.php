<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class IshikawaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Ishikawa';
        $this->cities = [
            ['name' => 'Kanazawa',     'code' => '17201',  'lat' => 36.5613,  'long' => 136.6562],
            ['name' => 'Hakusan',       'code' => '17202',  'lat' => 36.5622,  'long' => 136.6139],
            ['name' => 'Komatsu',       'code' => '17203',  'lat' => 36.4053,  'long' => 136.4508],
            ['name' => 'Kaga',          'code' => '17204',  'lat' => 36.2747,  'long' => 136.2439],
            ['name' => 'Nonoichi',      'code' => '17206',  'lat' => 36.5356,  'long' => 136.6706],
            ['name' => 'Nanao',         'code' => '17207',  'lat' => 37.0120,  'long' => 136.9066],
            ['name' => 'Nomi',          'code' => '17208',  'lat' => 36.4214,  'long' => 136.5594],
            ['name' => 'Kahoku',        'code' => '17209',  'lat' => 36.6497,  'long' => 136.7747],
            ['name' => 'Wajima',        'code' => '17211',  'lat' => 37.4353,  'long' => 136.8964],
            ['name' => 'Hakui',         'code' => '17212',  'lat' => 36.8105,  'long' => 136.7658],
            ['name' => 'Suzu',          'code' => '17214',  'lat' => 37.5089,  'long' => 137.3384],
        ];
    }
}
