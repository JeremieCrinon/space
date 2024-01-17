<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class editWebsiteController extends Controller
{
    public function index()
    {
        $planets = Planet::all();

        return view('private.editWebsite', compact('planets'));
    }
}
