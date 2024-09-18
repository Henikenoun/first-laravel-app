<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;


class CategorieController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    //get
    public function index()
    {
        try{
            $categories = categorie::all();
            return response()->json([
                'message' => 'Liste des catégories',
                'categories' => $categories
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erreur lors de la récupération des catégories',
                'error' => $e->getMessage()
            ]);

        }
        
    }

    /**
     * Store a newly created resource in storage.
     *///post
    public function store(Request $request)
    {
        try{
            $categorie = new categorie([
                "nomcategorie" => $request->input("nomcategorie"),
                "imagecategorie" => $request->input("imagecategorie")
            ]);
            $categorie->save();
            return response()->json([
                'message' => 'Catégorie ajoutée avec succès',
                'categorie' => $categorie
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erreur lors de l\'ajout de la catégorie',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *///get(id)
    public function show($id)
    {
        try{
            $categorie = categorie::findOrFail($id);
            return response()->json([
                'message' => 'Détails de la catégorie',
                'categorie' => $categorie
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erreur lors de la récupération de la catégorie',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *///put
    public function update(Request $request, categorie $categorie)
    {
        try{
            $categorie->nomcategorie = $request->nomcategorie;
            $categorie->imagecategorie = $request->imagecategorie;
            $categorie->save();
            return response()->json([
                'message' => 'Catégorie modifiée avec succès',
                'categorie' => $categorie
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erreur lors de la modification de la catégorie',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *///delete
    public function destroy($id)
    {
        try{
            $categorie = categorie::findOrFail($id);
            $categorie->delete();
            return response()->json([
                'message' => 'Catégorie supprimée avec succès'
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Erreur lors de la suppression de la catégorie',
                'error' => $e->getMessage()
            ]);
        }
    }
}
