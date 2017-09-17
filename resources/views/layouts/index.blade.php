@extends('layouts.master')

@section('content')

@include('layouts.slider')


<div class="container-fluid " style="">
    <hr class="my-1 bg-danger" style="width: 200px; height:5px;">
    <h1 class="display-5 text-center" style="color:#1a1a1a;font-family: Artifika;">CORE SERVICES</h1>
    <hr>
    <div class="row core-services" data-aos="zoom-in">
        <div class="col-sm mw-100" data-aos="fade-up-left">
            <div class="jumbotron bg-white  text-center" style="font-family: Belleza;">
                <i class="fa fa-building-o fa-5x bg-danger" aria-hidden="true"> </i>
                <h3 class="display-4">Building Contractors</h3>
                <p class="lead" style="font-family: Maven Pro; font-size: 25px;">We are building contractors at your service</p>
                <hr>
                <a href="/services"> <button class="btn btn-lg btn-danger" > VIEW MORE </button> </a>
            </div>
        </div>

        <div class="col-sm mw-100" data-aos="fade-up-right">
            <div class="jumbotron bg-white text-center" style="font-family: Belleza;">
                <i class="fa fa-home fa-5x bg-danger" aria-hidden="true"> </i>
                <h3 class="display-4">Interior Designers</h3>
                <p class="lead" style="font-family: Maven Pro; font-size: 25px;">We do creative interior design</p>
                <hr>
                <a href="/services" ><button class="btn btn-lg btn-danger "> VIEW MORE </button></a>
            </div>
        </div>


    </div>

</div>



    <hr>

    <div class="container-fluid">

        <div class="row mw-100">
            <div class="col-sm text-center border-right-1 marketing-content" style="color: #1a1a1a;" >
                <h1 class="display-5 text-danger">Why Choose Us?</h1>
                <p class="lead mt-5 text-center">
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
                </p>
            </div>
            <div class="col-sm text-center">
                <img class="w-50 mr-0 h-100" src="images/why-choose-us.jpg" alt="" data-aos="flip-left">
            </div>
        </div>

    </div>


    <hr>


   <div class="container-fluid">

       <div class="row mw-100">
           <div class="col-sm text-center order-2 marketing-content" style="color: #1a1a1a;" >
               <h1 class="display-5 text-danger">Our History</h1>
               <p class="lead mt-5">
                   Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                   Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
               </p>
           </div>
           <div class="col-sm text-center">
               <img class="w-50 mr-0 h-100" src="images/kitchen-manenoz.jpg" alt="" data-aos="flip-right">
           </div>
       </div>
   </div>

    <hr>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm text-center marketing-content" style="color: #1a1a1a;" data-aos="zoom-in-right">
                <h1 class="display-5 text-danger">Our Clients</h1>
                <p class="lead mt-5 text-right">
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
                </p>
            </div>
            <div class="col-sm text-center">
                <img class="w-50 mr-0 h-100" src="http://www.huasingh.com/imageRepository/e024cb6c-f77e-4cb9-9297-1139a944b1b9.JPG" alt="" data-aos="flip-left">
            </div>
        </div>
    </div>

    <hr>
    <hr class="my-1 bg-danger" style="width: 200px; height:5px;">
    <h1 class="display-5 text-center" style="color:#1a1a1a;font-family: Artifika;" data-aos="slide-right">MEET OUR TEAM</h1>
    <hr>

<div class="container-fluid">
    <div class="row" data-aos="zoom-in">
        <div class="col-sm text-center" data-aos="slide-left">
            <div class="display-6 text-danger director-info" style="color: #1a1a1a; font-family: Maven Pro; font-size: 25px;">
                <img class="rounded-circle w-50  h-70" src="images/director-4.jpg" alt="">
                <h3>Director Name</h3>
                <p class="lead text-dark">Brief description of director role</p>
            </div>
        </div>

        <div class="col-sm text-center" data-aos="slide-up">
            <div class="display-6 text-danger director-info" style="color: #1a1a1a; font-family: Maven Pro; font-size: 25px;">
                <img class="rounded-circle w-50  h-70" src="images/director-6.jpg" alt="">
                <h3>Director Name</h3>
                <p class="lead text-dark">Brief description of director role</p>
            </div>
        </div>

        <div class="col-sm text-center" >
            <div class="display-6 text-danger director-info" style="color: #1a1a1a; font-family: Maven Pro; font-size: 25px;">
                <img class="rounded-circle w-50  h-70" src="images/director-3.jpg" alt="">
                <h3>Director Name</h3>
                <p class="lead text-dark">Brief description of director role</p>
            </div>
        </div>
    </div>
</div>








@endsection