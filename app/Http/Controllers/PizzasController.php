<?php

namespace App\Http\Controllers;

use App\Models\ingredients;
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
            /* image not required */
            "images"=>'image|nullable|max:1999'
        ]);

        /*verification de l'import d'images*/
        if ($request->hasFile("images")) {
            $filenameWithExt = $request->file('images')->getClientOriginalName();
            /* recup le nom du fichier sans l'extension */
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            /* recup le l'extension du fichier */
            $extension = $request->file('images')->getClientOriginalExtension();
            /* stockage de l'image */
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('images')->storeAs('pizzas/photos', $fileNameToStore);
        } else {
            $fileNameToStore = "noimage.jpg";
        }
        /* Exportation des nouvelles donnée dans la base de donnée */
        $pizza = new pizzas;

        $pizza->nom = $request->input('nom');
        $pizza->images = $fileNameToStore;

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
        $ingredients=ingredients::Where("pizza_id","=","id")->get();
        return view("page.edit.editPizza",[
            "pizza"=>$pizza,
            "ingredients"=>$ingredients
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
