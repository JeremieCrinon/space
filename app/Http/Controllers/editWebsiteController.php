<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\Crew;

class editWebsiteController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        $crews = Crew::all();

        return view('private.editWebsite', compact('planets', 'crews'));
    }
}
