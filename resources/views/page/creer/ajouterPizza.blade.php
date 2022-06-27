@extends('layouts.app')
@section('content')
    {{-- Info de la pizza --}}
    <section class="w-100">
        <!-- Session Status -->
        <x-auth-session-status class="mb-3" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-3" :errors="$errors" />
    </section>

    <section class="container d-flex flex-column justify-content-center mt-5 vh-100">
        <h1>Ajouter une nouvelle Pizza</h1>
        {!! Form::open(['action' => 'PizzasController@store', 'methode' => 'post', 'class' => 'd-flex flex-column mt-3', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group d-flex flex-column">
            {!! Form::label('nom', 'Nom', ['class' => 'form-contol']) !!}
            {!! Form::text('nom', '', ['class' => 'form-contol']) !!}
        </div>

        {{-- ajouter les composant --}}

        <div class="form-group d-flex flex-column">
            {!! Form::label('composants', 'Composants', ['class' => 'form-contol']) !!}
            {!! Form::text('composants', '', ['class' => 'form-contol']) !!}
        </div>

        {{-- ajouter prix --}}

        <div class="form-group d-flex flex-column">
            {!! Form::label('prix', 'Prix', ['class' => 'form-contol']) !!}
            {!! Form::text('prix', '', ['class' => 'form-contol']) !!}
        </div>

        {!! Form::submit('Ajouter', ['class' => 'btn btn-success col-6 mt-5']) !!}
        {!! Form::close() !!}
    </section>
@endsection
