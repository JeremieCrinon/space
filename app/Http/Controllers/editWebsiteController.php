<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\Crew;
use App\Models\Tech;

class editWebsiteController extends Controller
{
    public function planets()
    {
        $planets = Planet::all();
        
        return view('private.editWebsite', compact('planets'));
    }

    public function crews()
    {
        $crews = Crew::all();

        return view('private.editCrew', compact('crews'));
    }

    public function teches()
    {
        $teches = Tech::all();

        return view('private.editTech', compact('teches'));
    }
}
