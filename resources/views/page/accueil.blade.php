@extends('layouts.app')

@section('content')
    <h1>accueil</h1>

    <section class="container d-flex flex-column align-items-center">
        
        @foreach ($pizzas as $pizza)
            <div class="d-flex">
                <div class="col-3 col-md-4"><img src="/storage/pizzas/photos/{{ $pizza->images }} " alt=""></div>
                <div>
                    <h4>{{ $pizza->nom }}</h4>
                </div>
            </div>
        @endforeach
    </section>
@endsection
