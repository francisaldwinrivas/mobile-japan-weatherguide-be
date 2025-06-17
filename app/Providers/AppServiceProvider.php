<?php

declare(strict_types=1);

namespace App\Providers;

use Carbon\CarbonInterval;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * @todo
         * Configure to much realistic value
         */
        Passport::tokensExpireIn(CarbonInterval::years(100));
        Passport::refreshTokensExpireIn(CarbonInterval::years(100));
        Passport::personalAccessTokensExpireIn(CarbonInterval::years(100));

        /**
         * For demo only
         */
        Passport::enablePasswordGrant();
    }
}
