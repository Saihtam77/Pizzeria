@extends('layouts.app')
@section('content')
    
{{--Info de la pizza --}}

    <section class="container d-flex flex-column justify-content-center mt-5 vh-100">
        <h1>Ajouter une nouvelle Pizza</h1>
        {!! Form::open(["action"=>"PizzasController@store","methode"=>"post","class"=>"d-flex flex-column mt-3","enctype"=>"multipart/form-data"]) !!}
            <div class="form-group d-flex flex-column">
                {!! Form::label("nom","Nom", ["class"=>"form-contol"]) !!}
                {!! Form::text("nom","", ["class"=>"form-contol"]) !!}
            </div>

            <div class="form-group d-flex flex-column mt-3">
                {!! Form::label("images","Ajouter une photo ", ["class"=>"form-contol"]) !!}
                {!! Form::file("images", ["class"=>"form-contol"]) !!}
            </div>
        {!! Form::close() !!}
    </section>

    
{{--specifier les ingredients  --}}
   {{--  <section class="container mt-5">
        {!! Form::open(["action"=>"IngredientsController@store","methode"=>"post","class"=>"d-flex flex-column"]) !!}
            <div class="form-group d-flex flex-column">
                {!! Form::label("nom","Nom", ["class"=>"form-contol"]) !!}
                {!! Form::text("nom","", ["class"=>"form-contol"]) !!}
            </div>
        {!! Form::close() !!}
    </section> --}}
 
@endsection