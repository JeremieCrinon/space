<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('planets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'fr_name' => 'required|max:20',
            'en_name' => 'required|max:20',
            'fr_description' => 'required|max:255',
            'en_description' => 'required|max:255',
            'distance' => 'required|max:20',
            'time' => 'required|max:20',
            'image' => 'required|image',
        ]);
        $planet = new Planet;
        if ($request->hasFile('image')) {
            $planet->image = $request->file('image')->store('img', 'public');
        } else {
            return back()->with('message', "L'image n'a pas été envoyée !");
        }
        $planet->fr_name = $request->fr_name;
        $planet->en_name = $request->en_name;
        $planet->fr_description = $request->fr_description;
        $planet->en_description = $request->en_description;
        $planet->distance = $request->distance;
        $planet->time = $request->time;
        $planet->image = $request->image->store('img', 'public');
        $planet->save();
        return back()->with('message', "La planet a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
