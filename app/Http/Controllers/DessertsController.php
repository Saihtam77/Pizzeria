<?php

namespace App\Http\Controllers;

use App\Models\desserts;
use Illuminate\Http\Request;

class DessertsController extends Controller
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
        return view("page.creer.ajouterDesserts");
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
            "composants"=>'required',
            "prix"=>"required",
            
        ]);
        
        /* Exportation des nouvelles donnée dans la base de donnée */
        $dessert =new desserts;

        $dessert->nom = $request->input('nom');
        $dessert->composants = $request->input('composants');
        $dessert->prix = $request->input('prix');

        

        $dessert->save();
        return redirect()->route("accueil")->with('success', 'Dessert Ajouter');
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
        $dessert=desserts::find($id);
        return view("page.edit.editDessert")->with("dessert",$dessert);
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
            "composants"=>'required',
            "prix"=>"required",
    
        ]);

        
        /* Exportation des nouvelles donnée dans la base de donnée */
        $dessert =desserts::find($id);

        $dessert->nom = $request->input('nom');
        $dessert->composants = $request->input('composants');
        $dessert->prix = $request->input('prix');

     

        $dessert->save();
        return redirect()->route("accueil")->with('success', 'Dessert mit jours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dessert = desserts::find($id);
        $dessert->delete();
        return redirect()->route("accueil")->with('success', 'Desserts supprimer');
    }
}
