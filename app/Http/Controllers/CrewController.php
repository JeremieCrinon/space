<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;

class CrewController extends Controller
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
        return view('crew.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fr_role' => 'required|max:64',
            'en_role' => 'required|max:64',
            'name' => 'required|max:32',
            'fr_description' => 'required|max:500',
            'en_description' => 'required|max:500',
            'image' => 'required|image',
        ]);
        $crew = new Crew;
        if ($request->hasFile('image')) {
            $crew->image = $request->file('image')->store('img', 'public');
        } else {
            return back()->with('message', "L'image n'a pas été envoyée !");
        }
        $crew->fr_role = $request->fr_role;
        $crew->en_role = $request->en_role;
        $crew->name = $request->name;
        $crew->fr_description = $request->fr_description;
        $crew->en_description = $request->en_description;
        $crew->image = $request->image->store('img', 'public');
        $crew->save();
        return back()->with('message', "La planet a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $useless, string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
