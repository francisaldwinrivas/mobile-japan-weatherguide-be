<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class MieCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Mie';
        $this->cities = [
            ['name' => 'Iga',            'code' => '24216', 'lat' => 34.7686, 'long' => 136.1301],
            ['name' => 'Inabe',          'code' => '24214', 'lat' => 35.1606, 'long' => 136.5079],
            ['name' => 'Ise',            'code' => '24203', 'lat' => 34.4954, 'long' => 136.7061],
            ['name' => 'Kameyama',       'code' => '24210', 'lat' => 34.8687, 'long' => 136.3935],
            ['name' => 'Kumano',         'code' => '24212', 'lat' => 33.9229, 'long' => 136.0265],
            ['name' => 'Kuwana',         'code' => '24205', 'lat' => 35.0618, 'long' => 136.6835],
            ['name' => 'Matsusaka',      'code' => '24204', 'lat' => 34.5667, 'long' => 136.5333],
            ['name' => 'Nabari',         'code' => '24208', 'lat' => 34.6264, 'long' => 136.1083],
            ['name' => 'Owase',          'code' => '24209', 'lat' => 33.9817, 'long' => 136.1969],
            ['name' => 'Shima',          'code' => '24215', 'lat' => 34.3379, 'long' => 136.8134],
            ['name' => 'Suzuka',         'code' => '24207', 'lat' => 34.8811, 'long' => 136.5844],
            ['name' => 'Toba',           'code' => '24211', 'lat' => 34.4833, 'long' => 136.8333],
            ['name' => 'Tsu',            'code' => '24201', 'lat' => 34.7186, 'long' => 136.5057],
            ['name' => 'Yokkaichi',      'code' => '24202', 'lat' => 34.9652, 'long' => 136.6245],
        ];
    }
}
