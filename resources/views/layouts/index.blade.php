@extends('layouts.master')


@section('content')

    <!-- Jumbotron -->
       <div class="row" style="padding: 0">
       <div class="col-sm-8 ">
       <div class="container">
       <h2>Our Projects</h2>

       <div id="myCarousel" class="carousel slide" data-ride="arousel">
           <!-- Indicators -->
           <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
               <li data-target="#myCarousel" data-slide-to="4"></li>
           </ol>

           <!-- Wrapper for slides -->
           <div class="carousel-inner">

               <div class="item active">
                   <img src="../images/projects-4.jpg" alt=""  style="width:100%;">
                   <div class="carousel-caption">
                      <a href="#"> <button type="button" class="btn btn-primary"><h4> Project 1 </h4></button> </a>
                       <p>Our Favourite</p>
                   </div>
               </div>

               <div class="item">
                   <img src="../images/projects-5.jpg" alt=""  style="width:100%;">
                   <div class="carousel-caption">
                       <a href="#"> <button type="button" class="btn btn-primary"><h4> Project 2 </h4></button> </a>
                       <p>Some Description</p>
                   </div>
               </div>

               <div class="item">
                   <img src="../images/projects-6.jpg" alt=""  style="width:100%;">
                   <div class="carousel-caption">
                       <a href="#"> <button type="button" class="btn btn-primary"><h4> Project 3 </h4></button> </a>
                       <p>Another Description</p>
                   </div>
               </div>

               <div class="item">
                   <img src="../images/projects-1.jpg" alt=""  style="width:100%;">
                   <div class="carousel-caption">
                       <a href="#"> <button type="button" class="btn btn-primary"><h4> Project 4 </h4></button> </a>
                       <p>Description here</p>
                   </div>
               </div>

               <div class="item">
                   <img src="../images/projects-3.jpg" alt=""  style="width:100%;">
                   <div class="carousel-caption">
                       <a href="#"> <button type="button" class="btn btn-primary"><h4> Project 5 </h4></button> </a>
                       <p>Descrition ends</p>
                   </div>
               </div>

           </div>

           <!-- Left and right controls -->
           <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
               <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>
           </a>
       </div>
       </div>


       </div>

           <div class="col-sm-3 offset-sm-1 blog-sidebar padding-0">
               <div class="sidebar-module sidebar-module-inset">
                   <h4>About</h4>
                   <p class="lead">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum.</p>
               </div>
               <div class="sidebar-module">
                   <h4>Archives</h4>
                   <ol class="list-unstyled">
                       <li><a href="#"><h5> March 2014 </h5></a></li>
                       <li><a href="#"> <h5> February 2014 </h5></a></li>
                       <li><a href="#"><h5> January 2014 </h5> </a></li>
                       <li><a href="#"><h5>December 2013 </h5></a></li>
                       <li><a href="#"> <h5> November 2013 </h5></a></li>
                       <li><a href="#"><h5> October 2013 </h5> </a></li>
                       <li><a href="#"><h5> September 2013 </h5></a></li>
                   </ol>
               </div>
               <div class="sidebar-module">
                   <h4>Elsewhere</h4>
                   <ol class="list-unstyled">
                       <li><a href="#"><h6> Linked In </h6> </a></li>
                       <li><a href="#"><h6> Twitter </h6> </a></li>
                       <li><a href="#"><h6> Facebook </h6> </a></li>
                   </ol>
               </div>
           </div><!-- /.blog-sidebar -->
       </div>


    <!-- Example row of columns -->
    <div class="row">
        <div class="col-lg-4">
        <div class="card">
            <img src="../images/site-in-progress.jpg" height="250" width="300" alt="Card image cap">
            <p class="card-text lead">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img src="../images/kitchen-manenoz.jpg" height="250" width="300" alt="Card image cap">
                <p class="card-text lead">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img src="../images/day-tractor.jpg" height="250" width="300" alt="Card image cap">
                <p class="card-text lead">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>
    </div>

    <h3>Our Directors</h3>
    <div class="row directors">

        <div class="col-lg-4 my-auto">
            <img class="rounded-circle" src="../images/director-1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Director 1 Name</h2>
            <p class="lead">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="../images/director-5.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Director 2 Name</h2>
            <p class="lead">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="../images/director-6.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Director 3 Name</h2>
            <p class="lead">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->


@endsection