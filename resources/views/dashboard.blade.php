@extends('layouts.app')

@section('content')
    <section class="vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="card mb-5 bg-dark text-white">
            <div class="card-body">
                <h5 class="card-title">Ajouter une pizza</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="{{route("nouvellePizza")}}" class="card-link btn btn-info">Ajouter</a>
            </div>
        </div>

        <div class="card mb-5 bg-dark text-white" >
            <div class="card-body">
                <h5 class="card-title">Ajouter une boisson</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="{{route("nouvelleBoisson")}}" class="card-link btn btn-info">Ajouter</a>
            </div>
        </div>

        <div class="card mb-5 bg-dark text-white" >
            <div class="card-body">
                <h5 class="card-title">Ajouter un nouveau dessert</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                </p>
                <a href="{{route("nouveauDessert")}}" class="card-link btn btn-info">Ajouter</a>
            </div>
        </div>
    </section>  
@endsection
