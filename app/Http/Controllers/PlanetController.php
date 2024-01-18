<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use Illuminate\Support\Facades\Storage;

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
            'fr_description' => 'required|max:500',
            'en_description' => 'required|max:500',
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
    public function show(string $useless, string $id)
    {
        $planet = Planet::find($id);
        if (!$planet) {
            // Gérer le cas où la planète n'est pas trouvée
            abort(404);
        }
        $planets = Planet::all();
        return view('pages.destination', compact('planet', 'planets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $planet = Planet::find($id);
        if (!$planet) {
            // Gérer le cas où la planète n'est pas trouvée
            abort(404);
        }
        return view('planets.edit', compact('planet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'fr_name' => 'required|max:20',
            'en_name' => 'required|max:20',
            'fr_description' => 'required|max:500',
            'en_description' => 'required|max:500',
            'distance' => 'required|max:20',
            'time' => 'required|max:20',
            'image' => 'nullable|image',
        ]);

        // Trouver la planète par son ID
        $planet = Planet::findOrFail($id);

        // Mise à jour des données
        $planet->fr_name = $validatedData['fr_name'];
        $planet->en_name = $validatedData['en_name'];
        $planet->fr_description = $validatedData['fr_description'];
        $planet->en_description = $validatedData['en_description'];
        $planet->distance = $validatedData['distance'];
        $planet->time = $validatedData['time'];

        // Gestion de l'upload de l'image
        if ($request->hasFile('image')) {
            // On fais le lien qui mène vers l'enciène image
            $imagePath = public_path("storage/" . $planet->image);

            // Supprime l'image si elle existe
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $planet->image = $request->file('image')->store('img', 'public');
            $planet->image = $request->image->store('img', 'public');
        }

        // Sauvegarder les modifications
        $planet->save();

        // Rediriger avec un message
        return redirect()->route('edit')->with('success', 'Planet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $planet = Planet::findOrFail($id); // Trouve la planète ou renvoie une erreur 404 si elle n'existe pas
        // Construit le chemin complet de l'image
        $imagePath = public_path("storage/" . $planet->image);

        // Supprime l'image si elle existe
        if (file_exists($imagePath)) {
            $result = "La planete à correctement été supprimée !";
            unlink($imagePath);
        } else {
            $result = "L'image n'existe pas, elle se trouve normalement à l'emplacement " . $imagePath;
        }
        $planet->delete(); // Supprime la planète de la base de données

        return back()->with('success', $result);
    }
}
