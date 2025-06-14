<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

class TokyoCitiesSeeder extends BaseCitySeeder
{
    public function __construct()
    {
        $this->prefectureName = 'Tokyo';
        $this->cities = [
            ['name' => 'Adachi-ku',         'code' => '13121', 'lat' => 35.7788, 'long' => 139.7951],
            ['name' => 'Arakawa-ku',        'code' => '13118', 'lat' => 35.7399, 'long' => 139.7813],
            ['name' => 'Bunkyō-ku',         'code' => '13105', 'lat' => 35.7175, 'long' => 139.7473],
            ['name' => 'Chiyoda-ku',        'code' => '13101', 'lat' => 35.6940, 'long' => 139.7536],
            ['name' => 'Chūō-ku',          'code' => '13102', 'lat' => 35.6699, 'long' => 139.7771],
            ['name' => 'Edogawa-ku',        'code' => '13123', 'lat' => 35.6924, 'long' => 139.8757],
            ['name' => 'Itabashi-ku',       'code' => '13119', 'lat' => 35.7512, 'long' => 139.7093],
            ['name' => 'Katsushika-ku',     'code' => '13122', 'lat' => 35.7532, 'long' => 139.8557],
            ['name' => 'Kita-ku',           'code' => '13117', 'lat' => 35.7526, 'long' => 139.7335],
            ['name' => 'Kōtō-ku',          'code' => '13108', 'lat' => 35.6667, 'long' => 139.8167],
            ['name' => 'Meguro-ku',         'code' => '13110', 'lat' => 35.6415, 'long' => 139.6982],
            ['name' => 'Minato-ku',         'code' => '13103', 'lat' => 35.6500, 'long' => 139.7333],
            ['name' => 'Nakano-ku',         'code' => '13114', 'lat' => 35.7109, 'long' => 139.6625],
            ['name' => 'Nerima-ku',         'code' => '13120', 'lat' => 35.7355, 'long' => 139.6517],
            ['name' => 'Ōta-ku',           'code' => '13116', 'lat' => 35.5613, 'long' => 139.7161],
            ['name' => 'Setagaya-ku',       'code' => '13115', 'lat' => 35.6466, 'long' => 139.6533],
            ['name' => 'Shibuya-ku',        'code' => '13113', 'lat' => 35.6640, 'long' => 139.6982],
            ['name' => 'Shinagawa-ku',      'code' => '13111', 'lat' => 35.6090, 'long' => 139.7302],
            ['name' => 'Shinjuku-ku',       'code' => '13104', 'lat' => 35.6938, 'long' => 139.7036],
            ['name' => 'Suginami-ku',       'code' => '13107', 'lat' => 35.6995, 'long' => 139.6364],
            ['name' => 'Sumida-ku',         'code' => '13106', 'lat' => 35.7107, 'long' => 139.8015],
            ['name' => 'Taitō-ku',          'code' => '13109', 'lat' => 35.7126, 'long' => 139.7800],
            ['name' => 'Toshima-ku',        'code' => '13112', 'lat' => 35.7325, 'long' => 139.7154],
            ['name' => 'Akiruno-shi',       'code' => '13201', 'lat' => 35.7329, 'long' => 139.2253],
            ['name' => 'Akishima-shi',      'code' => '13202', 'lat' => 35.7078, 'long' => 139.3642],
            ['name' => 'Chōfu-shi',         'code' => '13203', 'lat' => 35.6592, 'long' => 139.5484],
            ['name' => 'Fuchū-shi',         'code' => '13205', 'lat' => 35.6667, 'long' => 139.5000],
            ['name' => 'Fussa-shi',         'code' => '13206', 'lat' => 35.7367, 'long' => 139.3236],
            ['name' => 'Hachiōji-shi',      'code' => '13207', 'lat' => 35.6558, 'long' => 139.3239],
            ['name' => 'Hamura-shi',        'code' => '13208', 'lat' => 35.7635, 'long' => 139.3141],
            ['name' => 'Higashikurume-shi', 'code' => '13209', 'lat' => 35.7582, 'long' => 139.5295],
            ['name' => 'Higashimurayama-shi', 'code' => '13210', 'lat' => 35.7546, 'long' => 139.4685],
            ['name' => 'Higashiyamato-shi', 'code' => '13211', 'lat' => 35.7630, 'long' => 139.4458],
            ['name' => 'Hino-shi',          'code' => '13212', 'lat' => 35.6731, 'long' => 139.3987],
            ['name' => 'Inagi-shi',         'code' => '13213', 'lat' => 35.6329, 'long' => 139.4929],
            ['name' => 'Kiyose-shi',        'code' => '13214', 'lat' => 35.7855, 'long' => 139.5263],
            ['name' => 'Kodaira-shi',       'code' => '13215', 'lat' => 35.7274, 'long' => 139.4817],
            ['name' => 'Koganei-shi',       'code' => '13216', 'lat' => 35.7011, 'long' => 139.5110],
            ['name' => 'Kokubunji-shi',     'code' => '13217', 'lat' => 35.7055, 'long' => 139.4613],
            ['name' => 'Komae-shi',         'code' => '13218', 'lat' => 35.6349, 'long' => 139.5772],
            ['name' => 'Kunitachi-shi',     'code' => '13219', 'lat' => 35.6863, 'long' => 139.4388],
            ['name' => 'Machida-shi',       'code' => '13220', 'lat' => 35.5403, 'long' => 139.4508],
            ['name' => 'Mitaka-shi',        'code' => '13221', 'lat' => 35.6835, 'long' => 139.5596],
            ['name' => 'Musashimurayama-shi', 'code' => '13222', 'lat' => 35.7504, 'long' => 139.3839],
            ['name' => 'Musashino-shi',     'code' => '13223', 'lat' => 35.7061, 'long' => 139.5594],
            ['name' => 'Nishitōkyō-shi',    'code' => '13224', 'lat' => 35.7349, 'long' => 139.5462],
            ['name' => 'Ōme-shi',           'code' => '13225', 'lat' => 35.7881, 'long' => 139.2750],
            ['name' => 'Tachikawa-shi',     'code' => '13226', 'lat' => 35.7145, 'long' => 139.4045],
            ['name' => 'Tama-shi',          'code' => '13227', 'lat' => 35.6305, 'long' => 139.4398],
        ];
    }
}
