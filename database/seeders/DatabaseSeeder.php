<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Services\PrefectureService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PrefectureSeeder::class,
        ]);

        $this->seedCities();
    }

    /**
     * @return void
     */
    private function seedCities(): void
    {
        $prefectureService = app(PrefectureService::class);
        $prefectures = $prefectureService->builder([])->get();

        foreach ($prefectures as $prefecture) {
            $class = "Database\\Seeders\\Cities\\{$prefecture->name}CitiesSeeder";

            if (class_exists($class)) {
                $this->call($class);
            }
        }
    }
}
