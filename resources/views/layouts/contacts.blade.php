@extends('layouts.master')

@section('content')


    <div class="card" data-aos="slide-down">
        <img src="images/interior-design7.jpg" alt="" class="card-img w-100" style="height: 600px;">
        <div class="card-img-overlay text-center text-white" style="font-family: Belleza; padding-top: 200px;">
            <h3 class="display-3 card-title">Talk to us,why not?</h3>
        </div>
    </div>

    <div class="row my-5 " data-aos="zoom-in">
        <div class="col-sm text-danger text-center">
            <h4 class=""><i class="fa fa-envelope fa-2x"> Email </i></h4>
            <p class="lead text-dark"> <strong> info@qualprosolutions.co.ke </strong>  </p>
        </div>

        <div class="col-sm text-danger text-center" data-aos="zoom-in">
            <h4 class=""><i class="fa fa-phone fa-2x"> Phone </i></h4>
            <p class="lead text-dark"> <strong> +254 725 572 984 </strong> </p>
        </div>

    </div>
    <div id="map"  class="w-100" style="height:400px;" data-aos="slide-up"></div>

    <script>
        function initMap() {
            var canopy = {lat: -1.210988, lng:36.893763};

            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: canopy,
                zoom: 10
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                position: canopy,
                map: map
            });
        }
    </script>

                </div>
    </div>


@endsection