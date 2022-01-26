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
                <h1 class="title">Palmares</h1>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container animate__animated animate__fadeInLeft">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <br>
                    <h2 class="title">Horario</h2>
                    <h5>Lunes: 11:00 - 22:00</h5>
                    <h5>Martes: 11:00 - 22:00</h5>
                    <h5>Miércoles: 11:00 - 22:00</h5>
                    <h5>Jueves: 11:00 - 22:00</h5>
                    <h5>Viernes: 11:00 - 22:00</h5>
                    <h5>Sábado: 11:00 - 22:00</h5>
                    <h5>Domingo: 11:00 - 22:00</h5>
                </div>
            </div>

            <div class="features">
                <h2 class="title">Estamos ubicados contiguo al ICE en Palmares, Provincia de Alajuela, Palmares</h2>
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d491.06807999428133!2d-84.43496977324335!3d10.05438316936801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa05bf4c45e6ee7%3A0x480ee71f2214b7a8!2sHondashi%20Sushi!5e0!3m2!1ses-419!2scr!4v1620515431694!5m2!1ses-419!2scr" width="600" height="450" style="width: -webkit-fill-available;" allowfullscreen="" loading="lazy"></iframe>
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

