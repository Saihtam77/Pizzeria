@extends('layouts.app')
@section('content')
    {{-- <section class="container d-flex justify-content-center align-items-center">
        <embed src="/storage/Mention_legale" type="application/pdf" class="w-100 h-100">
    </section> --}}
    <section class="container d-flex flex-column min-vh-100">
        <h1 class="text-center display-4 mt-5 mb-5">Mention légales</h1>

        <div id="Identite" class="container d-flex flex-column mb-5">
            <h3 class="mb-3"><b>Identité</b></h3>
            <div class="d-flex flex-column">
                <h5>Propriétaire du site:</h5>
                <h5>Adresse du site</h5>
                <h5>Propriétaire du site:</h5>
            </div>
        </div>

        <div id="Personne_moral" class="container d-flex flex-column mb-5">
            <h5>ALIMAR est une société a responsabilité limité au capital de 3 000 euros – SIRET 849 141 924 </h5>
        </div>

        <div id="Condition uttilisation" class="container d-flex flex-column mb-5">
            <h3 class="mb-3"><b>Condition d'uttilisation</b></h3>
            <h5>L’utilisation du présent site implique l’acceptation pleine et entière des conditions générales d’utilisation décrites ci-après. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment.</h5>
        </div>

        <div id="Hebergement" class="container d-flex flex-column mb-5">
            <h3 class="mb-3"><b>Herbergements</b></h3>
            <h5>L’utilisation du présent site implique l’acceptation pleine et entière des conditions générales d’utilisation décrites ci-après. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment.</h5>
        </div>

        <div id="Propriete_intellectuelle" class="container d-flex flex-column mb-5">
            <h3 class="mb-3"><b>Propriété intellectuelle</b></h3>
            <h5>Sauf mention contraire, tous les éléments accessibles sur le site (textes, images, graphismes, logo, icônes, sons, logiciels, etc.) restent la propriété exclusive de leurs auteurs, en ce qui concerne les droits de propriété intellectuelle ou les droits d’usage. 1
                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’auteur.23
                Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient est considérée comme constitutive d’une contrefaçon et passible de poursuites. 4
                Les marques et logos reproduits sur le site sont déposés par les sociétés qui en sont propriétaires.
                </h5>
        </div>

        <div id="Liens" class="container d-flex flex-column mb-5">
            <h3 class="mb-3 text-decoration"><b>Liens</b></h3>
            <h5><b>Lien sortants</b></h5>
            <h5>Le propriétaire du site décline toute responsabilité et n’est pas engagé par le référencement via des liens hypertextes, de ressources tierces présentes sur le réseau Internet, tant en ce qui concerne leur contenu que leur pertinence.</h5>
            
            <h5><b>Lien entrant</b></h5>
            <h5>Le propriétaire du site autorise les liens hypertextes vers l’une des pages de ce site, à condition que ceux-ci ouvrent une nouvelle fenêtre et soient présentés de manière non équivoque afin d’éviter :</h5>
            <ul>
                <li><h5>tout risque de confusion entre le site citant et le propriétaire du site</h5></li>
                <li><h5>ainsi que toute présentation tendancieuse, ou contraire aux lois en vigueur</h5>.</li>
            </ul>
            <h5>Le propriétaire du site se réserve le droit de demander la suppression d’un lien s’il estime que le site source ne respecte pas les règles ainsi définies.</h5>
        </div>

        <div id="Confidentalite" class="container d-flex flex-column mb-5">
            <h3 class="mb-3"><b>Confidentalité</b></h3>
            <h5>Le site ne recueille pas d’informations personnelles, et n’est pas assujetti à déclaration à la CNIL</h5>
        </div>

        <div id="Credit" class="container d-flex flex-column mb-5">
            <h3 class="mb-3"><b>Credit</b></h3>
            <h5 class="mb-3">Mentions légales fournies par WebExpress – Version 1.7 – Utilisation libre sous Licence Creative Commons CC BY-NC-ND 3.0 FR / creativecommons.org.</h5>
            <ol>
                <li><h6>Articles L111-1 et suivants du Code de la Propriété Intellectuelle du 1er juillet 1992</h6></li>
                <li><h6>Article 41 de la loi du 11 mars 1957 </h6></li>
                <li><h6>Article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995</h6></li>
                <li><h6>Articles L.335-2 et suivants du Code de Propriété Intellectuelle</h6></li>
                <li><h6>Loi n° 78-87 du 6 janvier 1978, modifiée par la loi n° 2004-801 du 6 août 2004, relative à l’informatique, aux fichiers et aux libertés</h6></li>
                <li><h6>Articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés</h6></li>
                <li><h6>Loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données</h6></li>
                <li><h6>Loi n° 2004-801 du 6 août 2004</h6></li>
                <li><h6>Article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique</h6></li>
            </ol>
        </div>

    </section> 
@endsection
