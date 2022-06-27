<?php

namespace App\Http\Controllers;

use App\Models\boissons;
use Illuminate\Http\Request;

class BoissonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view("page.creer.ajouterBoisson");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Verification du remplissage des champs requis*/
        $this->validate($request, [

            "nom" => 'required',
            "prix"=>"required",
            
        ]);

        
        /* Exportation des nouvelles donnée dans la base de donnée */
        $boisson = new boissons;

        $boisson->nom = $request->input('nom');
        $boisson->prix = $request->input('prix');

        $boisson->save();
        return redirect()->route("accueil")->with('success', 'Nouvelle Boisson ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $boisson=boissons::find($id);
         return view("page.edit.editBoisson")->with("boisson",$boisson);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*Verification du remplissage des champs requis*/
        $this->validate($request, [

            "nom" => 'required',
            "prix"=>"required",
            
        ]);

        
        /* Exportation des nouvelles donnée dans la base de donnée */
        $boisson =boissons::find($id);

        $boisson->nom = $request->input('nom');
        $boisson->prix = $request->input('prix');
        
        $boisson->save();
        return redirect()->route("accueil")->with('success', 'Boissons mise a jours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boisson = boissons::find($id);
        $boisson->delete();
        return redirect()->route("accueil")->with('success', 'Boissons supprimer');
    }
}
