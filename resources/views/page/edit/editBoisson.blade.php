@extends('layouts.app')

@section('content')
    <section class="container min-vh-100 d-flex flex-column justify-content-center">
        <h1>Modifier les informations de Boisson</h1>

        {!! Form::open(["action"=>["BoissonsController@update",$boisson->id],"method"=>"PUT","class"=>"d-flex flex-column mt-3","enctype"=>"multipart/form-data"]) !!}
            
            <div class="form-group d-flex flex-column">
                {!! Form::label("nom","Nom", ["class"=>"form-contol"]) !!}
                {!! Form::text("nom",$boisson->nom, ["class"=>"form-contol"]) !!}
            </div>

            {{-- ajouter prix --}}
           
            <div class="form-group d-flex flex-column">
                {!! Form::label("prix", "Prix", ["class"=>"form-contol"]) !!}
                {!! Form::number("prix",$boisson->prix, ["class"=>"form-contol"]) !!}
            </div>
            

            {!! Form::submit("Mettre à jours", ["class"=>"btn btn-success col-6 mt-5"]) !!}
        {!! Form::close() !!}
    </section>
@endsection                                                 