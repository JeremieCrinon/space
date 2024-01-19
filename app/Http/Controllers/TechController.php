<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tech;

class TechController extends Controller
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
        return view('teches.create');
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
            'image' => 'required|image',
        ]);
        $tech = new Tech;
        if ($request->hasFile('image')) {
            $tech->image = $request->file('image')->store('img', 'public');
        } else {
            return back()->with('message', "L'image n'a pas été envoyée !");
        }
        $tech->fr_name = $request->fr_name;
        $tech->en_name = $request->en_name;
        $tech->fr_description = $request->fr_description;
        $tech->en_description = $request->en_description;
        $tech->image = $request->image->store('img', 'public');
        $tech->save();
        return back()->with('message', "La technologie a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $useless, string $id)
    {
        $tech = Tech::find($id);
        if (!$tech) {
            // Gérer le cas où la planète n'est pas trouvée
            abort(404);
        }
        $teches = Tech::all();
        return view('pages.tech', compact('tech', 'teches'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tech = Tech::find($id);
        if (!$tech) {
            // Gérer le cas où la planète n'est pas trouvée
            abort(404);
        }
        return view('teches.edit', compact('tech'));
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
        'image' => 'nullable|image',
        ]);

        // Trouver la planète par son ID
        $tech = Tech::findOrFail($id);

        // Mise à jour des données
        $tech->fr_name = $validatedData['fr_name'];
        $tech->en_name = $validatedData['en_name'];
        $tech->fr_description = $validatedData['fr_description'];
        $tech->en_description = $validatedData['en_description'];

        // Gestion de l'upload de l'image
        if ($request->hasFile('image')) {
            // On fais le lien qui mène vers l'enciène image
            $imagePath = public_path("storage/" . $tech->image);

            // Supprime l'image si elle existe
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $tech->image = $request->file('image')->store('img', 'public');
            $tech->image = $request->image->store('img', 'public');
        }

        // Sauvegarder les modifications
        $tech->save();

        // Rediriger avec un message
        return redirect()->route('edit')->with('success', 'Planet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tech = Tech::findOrFail($id); // Trouve la planète ou renvoie une erreur 404 si elle n'existe pas
        // Construit le chemin complet de l'image
        $imagePath = public_path("storage/" . $tech->image);

        // Supprime l'image si elle existe
        if (file_exists($imagePath)) {
            $result = "La technologie à correctement été supprimée !";
            unlink($imagePath);
        } else {
            $result = "L'image n'existe pas, elle se trouve normalement à l'emplacement " . $imagePath;
        }
        $tech->delete(); // Supprime la planète de la base de données

        return back()->with('success', $result);
    }
}
