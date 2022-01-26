@extends('layouts.app')

@section('body-class', 'landing-page')

@section('styles')
    <style>
        .team .row .col-md-4{
            margin-bottom: 5em;
        }
        .team.row{
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }
        .team.row > [class*='col-']{
            display: flex;
            flex-direction: column;
        }

        .tt-query {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
        color: #999
        }

        .tt-menu {    /* used to be tt-dropdown-menu in older versions */
        width: 222px;
        margin-top: 4px;
        padding: 4px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
                border-radius: 4px;
        -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
            -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .tt-suggestion {
        padding: 3px 20px;
        line-height: 24px;
        }

        .tt-suggestion.tt-cursor,.tt-suggestion:hover {
        color: #fff;
        background-color: #0097cf;

        }

        .tt-suggestion p {
        margin: 0;
        }
    </style>
@endsection

@section('content')

<div class="header header-filter" style="height: 50vh !important; background-image: url('/img/Banner3.jpg');">
<div class="container">
        <div class="row" style="text-align: end;">
            <div class="col-md-12">
                <h1 class="title">Bienvenido a Hondashi</h1>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container animate__animated animate__fadeIn">
        <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-bg-12">
                        <img src="/img/Banner2.jpg" class="d-block w-100 principalImage" style=" height: auto;" alt="...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">Hondashi Sushi</h2>
                    <hr>
                    <h5 style="text-align: justify;">Cuando pensamos en sushi pensamos en los rollos, en pescado, en Japón, pero que significa esto, esta palabra viene de la unión
                         de dos palabras: Su = Vinagre y Shi-Meshi = Arroz. Este arte ha ido evolucionando poco a poco, originalmente en Japón empezaron a comer el arroz
                         con el pescado después de pasar por una técnica de conservación. Desde ese tiempo hasta la actualidad la manera de preparar y comer ha ido cambiando
                          hasta lo que conocemos a día de hoy.
                        Hondashi ha elaborado sus versiones y este nos trae la mejor calidad en productos, variedad de platillos y la mejor preparación acompañado del mejor
                         servicio para transportarte a un viaje por toda la cultura gastronómica de Japón.</h5>
                         <br>
                         <h5 style="text-align: justify;">Se inicia en Palmares con el sueño de que las personas experimenten nuestros sabores únicos, Cristian Lenin con 20 años de experiencia en
                            elaborar sushi decide empezar con su propio templo de la comida japonesa con especialidad en sushi.
                            Actualmente en Palmares cumplimos 4 años de estar compartiendo nuestros sabores, en San Ramón se crea un
                            segundo Hondashi debido a que el pueblo ramonense nos pedía estar más cerca de ellos, por ello estamos compartiendo también con ellos.</h5>
                </div>
            </div>

            <div class="features">
                <div class="row">

                </div>
            </div>
        </div>

        <div class="section text-center">
            <div class="card">
                <img src="/img/Cristian.jpeg" class="card-img-top imgP" alt="..." >
                <div class="card-body">
                    <h5 class="card-title">Chef Cristian Lenin</h5>

                </div>
            </div>
        </div>


        <div class="section landing-section">
            <div class="row">

            </div>

        </div>
    </div>

</div>

@include('includes.footer')
@endsection

