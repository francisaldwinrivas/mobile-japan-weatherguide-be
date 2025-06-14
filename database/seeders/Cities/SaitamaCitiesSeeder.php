<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class SaitamaCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Saitama';
        $this->cities = [
            ['name' => 'Saitama',          'code' => '112011', 'lat' => 35.8610,   'long' => 139.6455],
            ['name' => 'Kawaguchi',        'code' => '112023', 'lat' => 35.8051,   'long' => 139.7200],
            ['name' => 'Kawagoe',          'code' => '112031', 'lat' => 35.9258,   'long' => 139.4856],
            ['name' => 'Tokorozawa',       'code' => '112041', 'lat' => 35.8178,   'long' => 139.4691],
            ['name' => 'Koshigaya',        'code' => '112056', 'lat' => 35.8911,   'long' => 139.7909],
            ['name' => 'Sōka',             'code' => '112064', 'lat' => 35.8350,   'long' => 139.8040],
            ['name' => 'Kasukabe',         'code' => '112073', 'lat' => 35.9931,   'long' => 139.7497],
            ['name' => 'Ageo',             'code' => '112081', 'lat' => 35.9704,   'long' => 139.5816],
            ['name' => 'Kumagaya',         'code' => '112092', 'lat' => 36.1435,   'long' => 139.3889],
            ['name' => 'Niiza',            'code' => '112106', 'lat' => 35.8031,   'long' => 139.5753],
            ['name' => 'Warabi',           'code' => '112114', 'lat' => 35.8329,   'long' => 139.6458],
            ['name' => 'Fujimi',           'code' => '112122', 'lat' => 35.8540,   'long' => 139.5548],
            ['name' => 'Fujimino',         'code' => '112130', 'lat' => 35.8425,   'long' => 139.5078],
            ['name' => 'Kitamoto',         'code' => '112138', 'lat' => 36.0269,   'long' => 139.5302],
            ['name' => 'Chichibu',         'code' => '112150', 'lat' => 35.9597,   'long' => 138.9335],
            ['name' => 'Higashimatsuyama', 'code' => '112168', 'lat' => 36.0421,   'long' => 139.39996],
            ['name' => 'Iruma',            'code' => '112176', 'lat' => 35.8325,   'long' => 139.4483],
            ['name' => 'Kawajima',         'code' => '112184', 'lat' => 35.9444,   'long' => 139.4836],
            ['name' => 'Misato',           'code' => '112192', 'lat' => 35.9167,   'long' => 139.8611],
            ['name' => 'Miyoshi',          'code' => '112200', 'lat' => 35.8600,   'long' => 139.4844],
            ['name' => 'Moroyama',         'code' => '112218', 'lat' => 35.9000,   'long' => 139.3950],
            ['name' => 'Ogawa',            'code' => '112226', 'lat' => 35.9600,   'long' => 139.3372],
            ['name' => 'Ogose',            'code' => '112234', 'lat' => 35.9375,   'long' => 139.3628],
            ['name' => 'Ranzan',           'code' => '112242', 'lat' => 35.9333,   'long' => 139.3611],
            ['name' => 'Tokigawa',         'code' => '112250', 'lat' => 35.9833,   'long' => 139.3222],
            ['name' => 'Yoshimi',          'code' => '112268', 'lat' => 36.0000,   'long' => 139.3500],
            ['name' => 'Yokoze',           'code' => '112276', 'lat' => 35.9550,   'long' => 139.1478],
            ['name' => 'Minano',           'code' => '112284', 'lat' => 35.9675,   'long' => 139.1292],
            ['name' => 'Nagatoro',         'code' => '112292', 'lat' => 35.9350,   'long' => 139.1617],
            ['name' => 'Ogano',            'code' => '112300', 'lat' => 35.9450,   'long' => 139.1175],
            ['name' => 'Hanno',            'code' => '112318', 'lat' => 35.8600,   'long' => 139.3078],
            ['name' => 'Yorii',            'code' => '112326', 'lat' => 36.0417,   'long' => 139.2911],
            ['name' => 'Ina',              'code' => '112334', 'lat' => 35.9750,   'long' => 139.5172],
            ['name' => 'Matsubushi',       'code' => '112342', 'lat' => 35.9861,   'long' => 139.6903],
            ['name' => 'Sugito',           'code' => '112350', 'lat' => 35.9836,   'long' => 139.6875],
            ['name' => 'Miyashiro',        'code' => '112368', 'lat' => 35.9175,   'long' => 139.6958],
            ['name' => 'Shiraoka',         'code' => '112376', 'lat' => 35.9191,   'long' => 139.7267],
            ['name' => 'Satte',            'code' => '112384', 'lat' => 35.9667,   'long' => 139.6167],
            ['name' => 'Hasuda',           'code' => '112392', 'lat' => 35.9764,   'long' => 139.6558],
            ['name' => 'Kuki',             'code' => '112400', 'lat' => 36.0647,   'long' => 139.7258],
            ['name' => 'Gyōda',            'code' => '112418', 'lat' => 36.1297,   'long' => 139.5961],
            ['name' => 'Kazo',             'code' => '112426', 'lat' => 36.0975,   'long' => 139.6711],
            ['name' => 'Hanyū',            'code' => '112434', 'lat' => 36.0806,   'long' => 139.6278],
            ['name' => 'Okegawa',          'code' => '112442', 'lat' => 35.9488,   'long' => 139.6403],
            ['name' => 'Asaka',            'code' => '112450', 'lat' => 35.8047,   'long' => 139.6019],
            ['name' => 'Wakō',             'code' => '112458', 'lat' => 35.7878,   'long' => 139.5750],
            ['name' => 'Shiki',            'code' => '112466', 'lat' => 35.8281,   'long' => 139.5167],
            ['name' => 'Toda',             'code' => '112474', 'lat' => 35.8176,   'long' => 139.6779],
            ['name' => 'Sayama',           'code' => '112482', 'lat' => 35.8314,   'long' => 139.4458],
            ['name' => 'Sakado',           'code' => '112490', 'lat' => 35.9540,   'long' => 139.3957],
            ['name' => 'Honjō',            'code' => '112508', 'lat' => 36.1867,   'long' => 139.2692],
            ['name' => 'Fukaya',           'code' => '112516', 'lat' => 36.1853,   'long' => 139.2794],
            ['name' => 'Gyōda',            'code' => '112524', 'lat' => 36.1297,   'long' => 139.5961],
            ['name' => 'Kōnosu',           'code' => '112532', 'lat' => 36.1172,   'long' => 139.4989],
            ['name' => 'Hasuda',           'code' => '112540', 'lat' => 35.9764,   'long' => 139.6558],
        ];
    }
}
