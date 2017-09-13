@extends('layouts.master')

@section('content')

<div id="projectsCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#projectsCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#projectsCarousel" data-slide-to="1"></li>
        <li data-target="#projectsCarousel" data-slide-to="2"></li>
        <li data-target="#projectsCarousel" data-slide-to="3"></li>
        <li data-target="#projectsCarousel" data-slide-to="4"></li>
    </ol>
<div class="carousel-inner">
 <div class="carousel-item active bg-light"  style="height: 620px;">
            <img src="images/projects-1.jpg"  class="d-block w-100  animated zoomIn" alt="">
            <div class="carousel-caption text-left">
                <h1 class="display-4 animated slideInRight">Need a Buiding Contractor/Interior Designer?</h1>
               <p><button class="btn btn-lg btn-danger animated bounceInLeft">Call Now To Get Started</button></p>
                <h3 class="display-5 animated rotateInDownRight"> <a href="#" style="color: #f5f5f5;">click to view our projects</a> </h3>
            </div>
        </div>
        <div class="carousel-item bg-light" style="height: 620px;">
            <img src="images/projects-3.jpg" class="d-block w-100 animated zoomIn" alt="">
            <div class="carousel-caption text-right">
                <h1 class="display-4 animated slideInLeft">For Quality Building Contractors</h1>
                <p><button class="btn btn-lg btn-danger animated bounceInRight">Call Now To Get Started</button></p>
                <h3 class="display-5 animated rotateInDownLeft"> <a href="#" style="color: #f5f5f5;">click to view our projects</a> </h3>
            </div>
        </div>

<div class="carousel-item bg-light" style="height: 620px;">
            <img src="images/projects-4.jpg" class="d-block w-100 animated zoomIn" alt="">
            <div class="carousel-caption text-left">
                <h1 class="display-4 animated slideInRight">For Creative Interior Design</h1>
                <p><button class="btn btn-lg btn-danger animated bounceInLeft">Call Now To Get Started</button></p>
                <h3 class="display-5 animated rotateInDownRight"> <a href="#" style="color: #f5f5f5;">click to view our projects</a> </h3>
            </div>
        </div>
        <div class="carousel-item bg-light" style="height: 620px;">
            <img src="images/projects-5.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption text-right">
                <h1 class="display-4 animated slideInLeft">Building Contractor Needed?</h1>
                <p><button class="btn btn-lg btn-danger animated bounceInRight">Call Now To Get Started</button></p>
                <h3 class="display-5 animated rotateInDownLeft"> <a href="#" style="color: #f5f5f5;">click to view our projects</a> </h3>
            </div>
        </div>
        <div class="carousel-item bg-light" style="height: 620px;">
            <img src="images/projects-6.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption text-left">
                <h1 class="display-4 animated slideInRight">Interior Designer Needed?</h1>
                <p><button class="btn btn-lg btn-danger animated bounceInLeft">Call Now To Get Started</button></p>
                <h3 class="display-5 animated rotateInDownRight"> <a href="#" style="color: #f5f5f5;">click to view our projects</a> </h3>
            </div>
        </div>

    </div>

<a class="carousel-control-prev" href="#projectsCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>


<a class="carousel-control-next" href="#projectsCarousel"  role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>

</div>

<hr class="my-1 bg-danger" style="width: 200px; height:5px;">
<h1 class="display-5 text-center" style="color:#1a1a1a;font-family: Artifika;">CORE SERVICES</h1>
<hr>
<div class="row">
    <div class="col-sm">
        <div class="jumbotron bg-white  text-center" style="font-family: Belleza;">
            <i class="fa fa-building-o fa-5x bg-danger" aria-hidden="true"> </i>
            <h3 class="display-4">Building Contractors</h3>
            <p class="lead" style="font-family: Maven Pro; font-size: 25px;">We are building contractors at your service</p>
            <hr>
            <a href="/services"> <button class="btn btn-lg btn-danger" > VIEW MORE </button> </a>
        </div>
    </div>

    <div class="col-sm">
        <div class="jumbotron bg-white text-center" style="font-family: Belleza;">
            <i class="fa fa-home fa-5x bg-danger" aria-hidden="true"> </i>
                <h3 class="display-4">Interior Designers</h3>
            <p class="lead" style="font-family: Maven Pro; font-size: 25px;">We do creative interior design</p>
            <hr>
            <a href="/services" ><button class="btn btn-lg btn-danger "> VIEW MORE </button></a>
        </div>
    </div>


</div>

<hr>
<div class="row">
    <div class="col-sm text-center border-right-1" style="color: #1a1a1a;">
        <h1 class="display-5 text-danger">Why Choose Us?</h1>
        <p class="lead mt-5 text-center">
            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
        </p>
    </div>
    <div class="col-sm text-center">
        <img class="w-50 mr-0 h-100" src="images/why-choose-us.jpg" alt="">
    </div>
</div>


<hr>


<div class="row">
    <div class="col-sm text-center order-2" style="color: #1a1a1a;">
        <h1 class="display-5 text-danger">Our History</h1>
        <p class="lead mt-5">
            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
        </p>
    </div>
    <div class="col-sm text-center">
        <img class="w-50 mr-0 h-100" src="images/kitchen-manenoz.jpg" alt="">
    </div>
</div>

<hr>

<div class="row">
    <div class="col-sm text-center" style="color: #1a1a1a;">
        <h1 class="display-5 text-danger">Our Clients</h1>
        <p class="lead mt-5 text-right">
            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
        </p>
    </div>
    <div class="col-sm text-center">
        <img class="w-50 mr-0 h-100" src="http://www.huasingh.com/imageRepository/e024cb6c-f77e-4cb9-9297-1139a944b1b9.JPG" alt="">
    </div>
</div>

<hr>

<hr class="my-1 bg-danger" style="width: 200px; height:5px;">
<h1 class="display-5 text-center" style="color:#1a1a1a;font-family: Artifika;">MEET OUR TEAM</h1>
<hr>

<div class="row">
    <div class="col-sm-4 text-center">
        <div class="display-6 text-danger director-info" style="color: #1a1a1a; font-family: Maven Pro; font-size: 25px;">
            <img class="rounded-circle w-50  h-70" src="images/director-4.jpg" alt="">
            <h3>Director Name</h3>
            <p class="lead text-dark">Brief description of director role</p>
        </div>
    </div>

    <div class="col-sm-4 text-center">
        <div class="display-6 text-danger director-info" style="color: #1a1a1a; font-family: Maven Pro; font-size: 25px;">
            <img class="rounded-circle w-50  h-70" src="images/director-6.jpg" alt="">
            <h3>Director Name</h3>
            <p class="lead text-dark">Brief description of director role</p>
        </div>
    </div>

    <div class="col-sm-4 text-center">
        <div class="display-6 text-danger director-info" style="color: #1a1a1a; font-family: Maven Pro; font-size: 25px;">
            <img class="rounded-circle w-50  h-70" src="images/director-3.jpg" alt="">
            <h3>Director Name</h3>
            <p class="lead text-dark">Brief description of director role</p>
        </div>
    </div>
</div>


@endsection