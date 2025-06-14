<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class ShizuokaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Shizuoka';
        $this->cities = [
            ['name' => 'Shizuoka',       'code' => '22100', 'lat' => 34.9753, 'long' => 138.3828],
            ['name' => 'Hamamatsu',      'code' => '22130', 'lat' => 34.7108, 'long' => 137.7261],
            ['name' => 'Fuji',           'code' => '22140', 'lat' => 35.1589, 'long' => 138.6773],
            ['name' => 'Numazu',         'code' => '22160', 'lat' => 35.1086, 'long' => 138.8644],
            ['name' => 'Iztumi City',    'code' => '22120', 'lat' => 34.9590, 'long' => 138.9730],
            ['name' => 'Shimada',        'code' => '22170', 'lat' => 34.8336, 'long' => 138.1528],
            ['name' => 'Kakegawa',       'code' => '22172', 'lat' => 34.7667, 'long' => 138.0167],
            ['name' => 'Fujieda',        'code' => '22176', 'lat' => 34.9081, 'long' => 138.2414],
            ['name' => 'Yaizu',          'code' => '22180', 'lat' => 34.8631, 'long' => 138.3153],
            ['name' => 'Iwata',          'code' => '22182', 'lat' => 34.7663, 'long' => 137.8498],
            ['name' => 'Fukuroi',        'code' => '22190', 'lat' => 34.7441, 'long' => 137.9348],
            ['name' => 'Gotemba',        'code' => '22192', 'lat' => 35.3092, 'long' => 138.9353],
            ['name' => 'Koshi',          'code' => '22194', 'lat' => 35.0934, 'long' => 138.7445],
            ['name' => 'Mishima',        'code' => '22200', 'lat' => 35.1175, 'long' => 138.9171],
            ['name' => 'Atami',          'code' => '22202', 'lat' => 35.0955, 'long' => 139.0717],
            ['name' => 'Izu City',       'code' => '22208', 'lat' => 34.9436, 'long' => 138.9450],
            ['name' => 'Shizuoka',       'code' => '22212', 'lat' => 35.2016, 'long' => 138.3143],
            ['name' => 'Kosai',          'code' => '22214', 'lat' => 34.7138, 'long' => 137.5155],
            ['name' => 'Susono',         'code' => '22216', 'lat' => 35.1741, 'long' => 138.9228],
            ['name' => 'Kikugawa',       'code' => '22218', 'lat' => 34.7519, 'long' => 138.0964],
            ['name' => 'Izunokuni',      'code' => '22220', 'lat' => 35.0390, 'long' => 138.9729],
            ['name' => 'Makinohara',     'code' => '22222', 'lat' => 34.7323, 'long' => 138.1862],
            ['name' => 'Owase',          'code' => '22224', 'lat' => 35.0156, 'long' => 139.5518],
        ];
    }
}
