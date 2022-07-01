@extends('layouts.app')

@section('content')
    {{-- Title --}}
    <section class="container-fluid d-flex justify-content-md-center align-items-center mt-5 mb-5">
        <h1 id="Title" class="display-4 font-weight-bold">Popie's Pizza</h1>
    </section>

    {{-- Contact --}}
    <section class="container d-flex justify-content-center">

        <div class="border_transition d-flex flex-column p-2 col-12 col-md-6">

            <div class="border_transition d-flex flex-column justify-content-center align-items-center p-5">
                <h3><b>Contact</b></h3>
                <div class="d-flex flex-column flex-md-row align-items-center">
                    <div class="col-md-3 col-5"><img src="/storage/icones/phone.png" alt="" class="img-fluid"></div>
                    <div class="col-md-9"><h4>0596 XXXXXX</h4></div>
                </div>
            </div>

        </div>

    </section>

    {{-- presentation --}}
    <section class="container d-flex flex-column align-item-center mb-5">
        <div class="d-flex flex-column p-3">
            <div class="d-flex justify-content-center align-items-center">
                <img src="/storage/icones/hand_up.gif" class="col-12 col-md-7" alt="">
            </div>
            <h3 class="lg_text display-4">1. Explorez le menu parmi ses différentes catégories…</h3>
        </div>

        <div class="d-flex flex-column p-3">
            <div class="d-flex justify-content-center align-items-center">
                <img src="/storage/icones/hand_good.gif" class="col-12 col-md-7" alt="">
            </div>
            <h3 class="lg_text display-4">2. Faites votre choix !</h3>
            <h6 class="sm_text">Tout nos prix (0.0) sont nets en Euros, service compris. Nos produits sont susceptibles de contenir des allergenes, nous consulter pour plus d’informations</h6>
        </div>
    </section>

    {{-- Pizza --}}
    <section class="container d-flex flex-column">

        <div class="collapse_init d-flex">
            <h1 class="col-9">PIZZA</h1>
            <div class="col-3 d-flex justify-content-end">
                <button onclick="change(collapse_pizza)" id="collapse_pizza" class="more_less_btn d-flex justify-content-center align-items-center" type="button"
                    data-bs-toggle="collapse" data-bs-target="#Pizza_collapse" aria-expanded="false"
                    aria-controls="Pizza_collapse">+</button>
            </div>
        </div>

        <div id="Pizza_collapse" class="collapse collapse_elements mt-3">
            @foreach ($pizzas as $pizza)
                <div class="d-flex flex-column mb-4">
                    <div class="d-flex inner_collapse">
                        <h4 style="color:darkblue">{{ $pizza->nom }}</h4>
                        <div class="inner_line"></div>
                        <h4 style="color:darkblue">{{ $pizza->prix }}€</h4>
                    </div>
                    <div class="mt-2">
                        <h5>{{ $pizza->composants }}</h5>
                        <div class="d-flex">
                            @if (Auth::user())
                                <a href="Pizzas/{{ $pizza->id }}/edit" class="btn btn-primary ">Edit</a>
                            
                                {!! Form::open(['action' => ['PizzasController@destroy', $pizza->id], 'method' => 'DELETE']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <hr class="solid">
    </section>

    {{-- Desserts --}}
    <section class="container d-flex flex-column">

        <div class="collapse_init d-flex">
            <h1 class="col-9">DESSERTS</h1>
            <div class="col-3 d-flex justify-content-end">
                <button  onclick="change(collapse_desserts)" id="collapse_desserts"  class=" more_less_btn d-flex justify-content-center align-items-center" type="button"
                    data-bs-toggle="collapse" data-bs-target="#Desserts_collapse" aria-expanded="false"
                    aria-controls="Desserts_collapse">+</button>
            </div>
        </div>

        <div id="Desserts_collapse" class="collapse mt-3">
            @foreach ($desserts as $dessert)
                <div class="d-flex flex-column mb-4">
                    <div class="d-flex inner_collapse">
                        <h4 style="color:darkblue">{{ $dessert->nom }}</h4>
                        <div class="inner_line"></div>
                        <h4 style="color:darkblue">{{ $dessert->prix }}€</h4>
                    </div>
                    <div class="mt-2">
                        <h5>{{ $dessert->composants }}</h5>
                        <div class="d-flex">
                            @if (Auth::user())
                                <a href="Desserts/{{ $dessert->id }}/edit" class="btn btn-primary ">Edit</a>
                            
                                {!! Form::open(['action' => ['DessertsController@destroy', $dessert->id], 'method' => 'DELETE']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <hr class="solid">
    </section>

    {{-- Boissons --}}
    <section class="container d-flex flex-column mb-5">

        <div class="collapse_init d-flex">
            <h1 class="col-9">BOISSONS</h1>
            <div class="col-3 d-flex justify-content-end">
                <button onclick="change(collapse_boissons)" id="collapse_boissons" class="more_less_btn d-flex justify-content-center align-items-center" type="button"
                    data-bs-toggle="collapse" data-bs-target="#Boissons_collapse" aria-expanded="false"
                    aria-controls="Boissons_collapse">+</button>
            </div>
        </div>

        <div id="Boissons_collapse" class="collapse mt-3">
            @foreach ($boissons as $boisson)
                <div class="d-flex flex-column mb-4">
                    <div class="d-flex inner_collapse">
                        <h4 style="color:darkblue">{{ $boisson->nom }}</h4>
                        <div class="inner_line"></div>
                        <h4 style="color:darkblue">{{ $boisson->prix }}€</h4>
                    </div>
                    <div class="d-flex">
                        @if (Auth::user())
                            <a href="Boissons/{{ $boisson->id }}/edit" class="btn btn-primary ">Edit</a>
                        
                            {!! Form::open(['action' => ['BoissonsController@destroy', $boisson->id], 'method' => 'DELETE']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <hr class="solid mb-5">
    </section>

    {{-- Google map et horraire --}}
    <section class="container d-flex flex-column align-items-center flex-md-row mb-5 ">
        
        <div class="d-flex flex-column justify-content-center col-md-6 me-md-5 mb-5">
            
            <div class="border_transition p-5">
                <h1 class="lg_text text-center"><b>Horaire</b></h1>
                <h2 class="text-center"> Du lundi au vendredi: <br> 17h30 à 22h</h2>
            </div>

        </div>

        <div class="col-md-6 mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.1069311725876!2d-61.121617164572505!3d14.63164499731893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6ff77e825497ea33!2zMTTCsDM3JzUzLjkiTiA2McKwMDcnMTMuOCJX!5e0!3m2!1sfr!2sfr!4v1655729325222!5m2!1sfr!2sfr" width="100%" height="450" style="border:1px solid; border-radius:30px" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
