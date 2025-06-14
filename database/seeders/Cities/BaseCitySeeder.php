<?php

declare(strict_types=1);

namespace Database\Seeders\Cities;

use App\Services\CityService;
use App\Services\PrefectureService;
use Illuminate\Database\Seeder;

abstract class BaseCitySeeder extends Seeder
{
    /**
     * @var array
     */
    public array $cities;

    /**
     * @var string
     */
    public string $prefectureName;

    /**
     * @var PrefectureService
     */
    protected PrefectureService $prefectureService;

    /**
     * @var CityService
     */
    protected CityService $cityService;

    public function run(): void
    {
        $this->prefectureService = app(PrefectureService::class);
        $this->cityService = app(CityService::class);

        $this->insertCities();
    }

    protected function insertCities(): void
    {
        $prefecture = $this->prefectureService->builder(['name' => $this->prefectureName])->first();

        if (! $prefecture) {
            return;
        }

        foreach ($this->cities as $city) {
            $this->cityService->create([
                ...$city,
                'prefecture_id' => $prefecture->getKey(),
            ]);
        }
    }
}
