<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Services\PrefectureService;
use Illuminate\Database\Seeder;

class PrefectureSeeder extends Seeder
{
    /**
     * @param PrefectureService $service
     */
    public function __construct(private PrefectureService $service)
    {
        // Do something...
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prefectures = [
            ['id' => 1, 'name' => 'Hokkaido',   'code' => 'JP-01', 'lat' => 43.06417, 'long' => 141.3469],
            ['id' => 2, 'name' => 'Aomori',     'code' => 'JP-02', 'lat' => 40.82444, 'long' => 140.7400],
            ['id' => 3, 'name' => 'Iwate',      'code' => 'JP-03', 'lat' => 39.70361, 'long' => 141.1525],
            ['id' => 4, 'name' => 'Miyagi',     'code' => 'JP-04', 'lat' => 38.26889, 'long' => 140.8719],
            ['id' => 5, 'name' => 'Akita',      'code' => 'JP-05', 'lat' => 39.71861, 'long' => 140.1025],
            ['id' => 6, 'name' => 'Yamagata',   'code' => 'JP-06', 'lat' => 38.24056, 'long' => 140.3633],
            ['id' => 7, 'name' => 'Fukushima',  'code' => 'JP-07', 'lat' => 37.75000, 'long' => 140.4678],
            ['id' => 8, 'name' => 'Ibaraki',    'code' => 'JP-08', 'lat' => 36.34139, 'long' => 140.4467],
            ['id' => 9, 'name' => 'Tochigi',    'code' => 'JP-09', 'lat' => 36.56583, 'long' => 139.8836],
            ['id' => 10, 'name' => 'Gunma',     'code' => 'JP-10', 'lat' => 36.39111, 'long' => 139.0608],
            ['id' => 11, 'name' => 'Saitama',   'code' => 'JP-11', 'lat' => 35.85694, 'long' => 139.6489],
            ['id' => 12, 'name' => 'Chiba',     'code' => 'JP-12', 'lat' => 35.60472, 'long' => 140.1233],
            ['id' => 13, 'name' => 'Tokyo',     'code' => 'JP-13', 'lat' => 35.68944, 'long' => 139.6917],
            ['id' => 14, 'name' => 'Kanagawa',  'code' => 'JP-14', 'lat' => 35.44778, 'long' => 139.6425],
            ['id' => 15, 'name' => 'Niigata',   'code' => 'JP-15', 'lat' => 37.90222, 'long' => 139.0236],
            ['id' => 16, 'name' => 'Toyama',    'code' => 'JP-16', 'lat' => 36.69528, 'long' => 137.2114],
            ['id' => 17, 'name' => 'Ishikawa',  'code' => 'JP-17', 'lat' => 36.59444, 'long' => 136.6256],
            ['id' => 18, 'name' => 'Fukui',     'code' => 'JP-18', 'lat' => 36.06528, 'long' => 136.2219],
            ['id' => 19, 'name' => 'Yamanashi', 'code' => 'JP-19', 'lat' => 35.66389, 'long' => 138.5683],
            ['id' => 20, 'name' => 'Nagano',    'code' => 'JP-20', 'lat' => 36.65139, 'long' => 138.1811],
            ['id' => 21, 'name' => 'Gifu',      'code' => 'JP-21', 'lat' => 35.39111, 'long' => 136.7222],
            ['id' => 22, 'name' => 'Shizuoka',  'code' => 'JP-22', 'lat' => 34.97694, 'long' => 138.3831],
            ['id' => 23, 'name' => 'Aichi',     'code' => 'JP-23', 'lat' => 35.18028, 'long' => 136.9067],
            ['id' => 24, 'name' => 'Mie',       'code' => 'JP-24', 'lat' => 34.73028, 'long' => 136.5086],
            ['id' => 25, 'name' => 'Shiga',     'code' => 'JP-25', 'lat' => 35.00444, 'long' => 135.8683],
            ['id' => 26, 'name' => 'Kyoto',     'code' => 'JP-26', 'lat' => 35.02139, 'long' => 135.7556],
            ['id' => 27, 'name' => 'Osaka',     'code' => 'JP-27', 'lat' => 34.68639, 'long' => 135.5200],
            ['id' => 28, 'name' => 'Hyogo',     'code' => 'JP-28', 'lat' => 34.69139, 'long' => 135.1831],
            ['id' => 29, 'name' => 'Nara',      'code' => 'JP-29', 'lat' => 34.68528, 'long' => 135.8328],
            ['id' => 30, 'name' => 'Wakayama',  'code' => 'JP-30', 'lat' => 34.22611, 'long' => 135.1675],
            ['id' => 31, 'name' => 'Tottori',   'code' => 'JP-31', 'lat' => 35.50361, 'long' => 134.2383],
            ['id' => 32, 'name' => 'Shimane',   'code' => 'JP-32', 'lat' => 35.47222, 'long' => 133.0506],
            ['id' => 33, 'name' => 'Okayama',   'code' => 'JP-33', 'lat' => 34.66167, 'long' => 133.9350],
            ['id' => 34, 'name' => 'Hiroshima', 'code' => 'JP-34', 'lat' => 34.39639, 'long' => 132.4594],
            ['id' => 35, 'name' => 'Yamaguchi', 'code' => 'JP-35', 'lat' => 34.18583, 'long' => 131.4714],
            ['id' => 36, 'name' => 'Tokushima', 'code' => 'JP-36', 'lat' => 34.06583, 'long' => 134.5594],
            ['id' => 37, 'name' => 'Kagawa',    'code' => 'JP-37', 'lat' => 34.34028, 'long' => 134.0433],
            ['id' => 38, 'name' => 'Ehime',     'code' => 'JP-38', 'lat' => 33.84167, 'long' => 132.7661],
            ['id' => 39, 'name' => 'Kochi',     'code' => 'JP-39', 'lat' => 33.55972, 'long' => 133.5311],
            ['id' => 40, 'name' => 'Fukuoka',   'code' => 'JP-40', 'lat' => 33.60639, 'long' => 130.4181],
            ['id' => 41, 'name' => 'Saga',      'code' => 'JP-41', 'lat' => 33.24944, 'long' => 130.2989],
            ['id' => 42, 'name' => 'Nagasaki',  'code' => 'JP-42', 'lat' => 32.74472, 'long' => 129.8736],
            ['id' => 43, 'name' => 'Kumamoto',  'code' => 'JP-43', 'lat' => 32.78972, 'long' => 130.7417],
            ['id' => 44, 'name' => 'Oita',      'code' => 'JP-44', 'lat' => 33.23806, 'long' => 131.6125],
            ['id' => 45, 'name' => 'Miyazaki',  'code' => 'JP-45', 'lat' => 31.91111, 'long' => 131.4239],
            ['id' => 46, 'name' => 'Kagoshima', 'code' => 'JP-46', 'lat' => 31.56028, 'long' => 130.5581],
            ['id' => 47, 'name' => 'Okinawa',   'code' => 'JP-47', 'lat' => 26.21250, 'long' => 127.6811],
        ];

        foreach ($prefectures as $prefecture) {
            $this->service->create($prefecture);
        }
    }
}
