<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Planet;

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
        View::composer('header', function ($view) {
            $firstItemId = Planet::orderBy('id')->first()->id;
            $fr_name = Planet::orderBy('id')->first()->fr_name;
            $en_name = Planet::orderBy('id')->first()->en_name;
            $view->with([
                'firstItemId' => $firstItemId,
                'fr_name' => $fr_name,
                'en_name' => $en_name,
            ]);
        });
    }
}
