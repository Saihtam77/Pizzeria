@extends('layouts.app')

@section('content')
    <section class="container min-vh-100 d-flex flex-column justify-content-center">
        <h1>Modifier les informations de la Pizza</h1>

        {!! Form::open(["action"=>["PizzasController@update",$pizza->id],"method"=>"PUT","class"=>"d-flex flex-column mt-3","enctype"=>"multipart/form-data"]) !!}
            <div class="form-group d-flex flex-column">
                {!! Form::label("nom","Nom", ["class"=>"form-contol"]) !!}
                {!! Form::text("nom",$pizza->nom, ["class"=>"form-contol"]) !!}
            </div>

            {{-- ajouter ingredient --}}
           
            <div class="form-group d-flex flex-column">
                {!! Form::label("composants", "Composants", ["class"=>"form-contol"]) !!}
                {!! Form::text("composants",$pizza->composants, ["class"=>"form-contol"]) !!}
            </div>

            {{-- ajouter prix --}}
           
            <div class="form-group d-flex flex-column">
                {!! Form::label("prix", "Prix", ["class"=>"form-contol"]) !!}
                {!! Form::text("prix",$pizza->prix, ["class"=>"form-contol"]) !!}
            </div>

            {!! Form::submit("Mettre à jours", ["class"=>"btn btn-success col-6 mt-5"]) !!}
        {!! Form::close() !!}
    </section>
@endsection                                                 