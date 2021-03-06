<?php

namespace App\Http\Controllers;

use App\Models\pizzas;
use Illuminate\Http\Request;

class PizzasController extends Controller
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
        return view("page.creer.ajouterPizza");
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
            "composants"=>"required",
            "prix"=>"required",
            
        ]);

       
        
        /* Exportation des nouvelles donnée dans la base de donnée */
        $pizza = new pizzas;

        $pizza->nom = $request->input('nom');
        $pizza->composants= $request->input('composants');
        $pizza->prix = $request->input('prix');
    

        $pizza->save();
        return redirect()->route("accueil")->with('success', 'Nouvelle pizza ajouter');
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
        $pizza=pizzas::find($id);
       
        return view("page.edit.editPizza",[
            "pizza"=>$pizza,
        ]);
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
            "composants"=>"required",
            "prix"=>"required",

        
        ]);

        
        
        /* Exportation des nouvelles donnée dans la base de donnée */
        $pizza =pizzas::find($id);

        $pizza->nom = $request->input('nom');
        $pizza->composants = $request->input('composants');
        $pizza->prix = $request->input('prix');
       

        $pizza->save();
        return redirect()->route("accueil")->with('success', 'Pizza mise a jours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = pizzas::find($id);
        $pizza->delete();
        return redirect()->route("accueil")->with('success', 'Pizza supprimer');    
    }
}
