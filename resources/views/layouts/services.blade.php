@extends('layouts.master')

@section('content')

    <div class="card">
        <img src="images/services-page.jpg" alt="" class="card-img w-100" style="height: 600px;">
        <div class="card-img-overlay text-center text-white" style="font-family: Belleza; padding-top: 200px;">
            <h3 class="display-3 card-title">We can do a number of things for you.</h3>
        </div>
    </div>

    <div class="jumbotron bg-light my-5">
        <h4 class="display-4 text-danger"> Services We Offer </h4>
        <p class="lead">List of services offered goes here. </p>
    </div>
    <hr class="my-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-img-top text-center">
                    <img src="images/icon-design.png" style="height: 500px;" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title display-5 text-danger">Building Contractors</h5>
                    <p class="lead">Description of building contractors goes here</p>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p><small>we would love to work with you</small></p>
                </div>
            </div>

            <div class="card">
                <div class="card-img-top text-center">
                    <img src="images/icon-building-contractor.jpg" style="height: 500px;" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title display-5 text-danger">Interior Design</h5>
                    <p class="lead">Description of interior design goes here</p>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p><small>we would love to work with you</small></p>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection