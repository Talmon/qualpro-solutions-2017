@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
    <!-- Add Google Maps -->
    <h1>Contact Us</h1>
    <p class="lead">If you wish to contact us here are our service numbers:</p>
    <ul class="list-group">
        <li class="list-group-item-text"> +254725572984 </li>
        <li class="list-group-item-text"> +254725XXXXXX </li>
        <li class="list-group-item-text"> +254727XXXXXX </li>
        <li class="list-group-item-text"> +2547233XXXXXX </li>
    </ul>

            </div>
        </div>

            <div class="col-lg-4">

    <h1>Where Are We?</h1>

    <div id="map" style="width:600px;height:400px;background:yellow"></div>

    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: new google.maps.LatLng(-1.212611,36.895705), zoom: 10
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKUiXKJ87o-J_tmQyffbWHXbpkBQ2gLzA&callback=myMap"></script>

                </div>
    </div>
@endsection