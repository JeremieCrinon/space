<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\Crew;
use App\Models\Tech;

class editWebsiteController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        $crews = Crew::all();
        $teches = Tech::all();

        return view('private.editWebsite', compact('planets', 'crews', 'teches'));
    }
}
