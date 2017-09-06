@extends('layouts.master')


@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" style="height: 620px; " src="images/projects-3.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-1">In need of a building contractor/interior designer?</h3>
                    <a href="#" class="btn btn-lg red">
                        <span class="fa fa-phone"></span>Call Now To Get Started
                    </a>
                    <p><a  class="text-white" href="/projects"><h5 class="display-5">click on this link to view this project</h5></a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height: 620px; " src="images/projects-5.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-1">For quality building contractors...</h3>
                    <a href="#" class="btn btn-lg red">
                        <span class="fa fa-phone"></span>Call Now To Get Started
                    </a>
                    <p><a  class="text-white" href="/projects"><h5 class="display-5">click on this link to view this project</h5></a></p>                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height: 620px; " src="images/projects-6.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-1">For creative interior designers</h3>
                    <a href="#" class="btn btn-lg btn-4x red">
                        <span class="fa fa-phone"></span>Call Now To Get Started
                    </a>
                    <p><a  class="text-white" href="/projects"><h5 class="display-5">click on this link to view this project</h5></a></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
           


@endsection