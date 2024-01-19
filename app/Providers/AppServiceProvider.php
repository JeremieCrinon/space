<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Planet;
use App\Models\Crew;
use App\Models\Tech;

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
            $fr_crew_role = Crew::orderBy('id')->first()->fr_role;
            $en_crew_role = Crew::orderBy('id')->first()->en_role;
            $firstCrewId = Crew::orderBy('id')->first()->id;
            $fr_tech_name = Tech::orderBy('id')->first()->fr_name;
            $en_tech_name = Tech::orderBy('id')->first()->en_name;
            $firstTechId = Tech::orderBy('id')->first()->id;
            $view->with([
                'firstItemId' => $firstItemId,
                'fr_name' => $fr_name,
                'en_name' => $en_name,
                'fr_crew_role' => $fr_crew_role,
                'en_crew_role' => $en_crew_role,
                'firstCrewId' => $firstCrewId,
                'fr_tech_name' => $fr_tech_name,
                'en_tech_name' => $en_tech_name,
                'firstTechId' => $firstTechId,
            ]);
        });
    }
}
