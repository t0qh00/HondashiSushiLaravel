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
                <h1 class="title">Galería</h1>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container animate__animated animate__fadeIn">
        <div class="section text-center section-landing">

            </div>


            <div class="features">
                <div class="row">

                </div>
            </div>
        </div>

        <div class="section text-center">
            <div>
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-md-6">
                        <div>
                            <img src="{{ $category->featured_image_url}}" alt="Thumbnail Image" class="img-raised imgGalery">
                            <h4 class="title">
                                {{ $category->name}}
                            </h4>

                        </div>
                    </div>
                    @endforeach
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

