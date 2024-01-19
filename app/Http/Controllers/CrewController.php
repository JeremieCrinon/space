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
        $crew = Crew::find($id);
        if (!$crew) {
            // Gérer le cas où la planète n'est pas trouvée
            abort(404);
        }
        $crews = Crew::all();
        return view('pages.crew', compact('crew', 'crews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crew = Crew::find($id);
        if (!$crew) {
            // Gérer le cas où la planète n'est pas trouvée
            abort(404);
        }
        return view('crew.edit', compact('crew'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'fr_role' => 'required|max:64',
            'en_role' => 'required|max:64',
            'name' => 'required|max:32',
            'fr_description' => 'required|max:500',
            'en_description' => 'required|max:500',
            'image' => 'nullable|image',
        ]);

        // Trouver la planète par son ID
        $crew = Crew::findOrFail($id);

        // Mise à jour des données
        $crew->fr_role = $validatedData['fr_role'];
        $crew->en_role = $validatedData['en_role'];
        $crew->name = $validatedData['name'];
        $crew->fr_description = $validatedData['fr_description'];
        $crew->en_description = $validatedData['en_description'];

        // Gestion de l'upload de l'image
        if ($request->hasFile('image')) {
            // On fais le lien qui mène vers l'enciène image
            $imagePath = public_path("storage/" . $crew->image);

            // Supprime l'image si elle existe
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $crew->image = $request->file('image')->store('img', 'public');
            $crew->image = $request->image->store('img', 'public');
        }

        // Sauvegarder les modifications
        $crew->save();

        // Rediriger avec un message
        return redirect()->route('edit')->with('success', 'Crew updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crew = Crew::findOrFail($id); // Trouve la planète ou renvoie une erreur 404 si elle n'existe pas
        // Construit le chemin complet de l'image
        $imagePath = public_path("storage/" . $crew->image);

        // Supprime l'image si elle existe
        if (file_exists($imagePath)) {
            $result = "Le crew à correctement été supprimée !";
            unlink($imagePath);
        } else {
            $result = "L'image n'existe pas, elle se trouve normalement à l'emplacement " . $imagePath . "veuillez la supprimer manuellement.";
        }
        $crew->delete(); // Supprime la planète de la base de données

        return back()->with('success', $result);
    }
}
