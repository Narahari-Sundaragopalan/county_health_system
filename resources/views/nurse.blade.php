@extends('layouts.userlayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;"><h3>Welcome {{$user->roles->first()->display_name}}</h3></div>

                    <div class="panel-body">
                        <!-- Carousel
                        ================================================== -->
                        <div id="myCarousel" class="carousel slide"  data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" style="text-align: center;">
                                <div class="item active" style="text-align: center;">
                                    <a href="{{ url('/emergencies') }}" target="_blank">
                                        <img src="/images/nurse-emergency.jpg" class="img-responsive">
                                    </a>
                                    <div class="mid">
                                        <h3>Check Emergency</h3>
                                    </div>
                                </div>
                                <div class="item" style="text-align: center;">
                                    {{--<a href="http://www.nacada.ksu.edu" target="_blank">--}}
                                    <a href="{{ url('/emergencies') }}"_blank">
                                    <img src="/images/hospitalbed.jpg" class="img-responsive">
                                    </a>
                                    <div class="mid">
                                        <h3>Check Bed Status</h3>
                                    </div>
                                </div>
                                <div class="item" style="text-align: center;">
                                    <a href="{{ url('/patients') }}" target="_blank">
                                        <img src="/images/patient.png" class="img-responsive">
                                    </a>
                                    <div class="mid">
                                        <h3>Patient Details</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="icon-prev"></span></a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="icon-next"></span></a>
                        </div>
                        <!-- /.carousel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <style>
        /* -----------------------------------------------
        CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel { margin-bottom: 0px; }

        /* Since positioning the image, we need to help out the caption */
        /* Declare heights because of positioning of img element */
        .carousel .item { height: 400px; /*background-color:#555;*/ }

        .carousel img { /*position: absolute;*/ /*top: 0;*/ /*left: 0;*/ min-height: 400px; }

        /* RESPONSIVE CSS
        -------------------------------------------------- */
        @media (min-width: 768px) {
            /* Bump up size of carousel content */
            .carousel-caption p { margin-bottom: 20px; font-size: 21px; line-height: 1.4; }
        }

        img.img-responsive { display: block; margin-left: auto; margin-right: auto; }
        /*span.icon-next, span.icon-prev { margin: 0px !important; position: static !important; }*/
        span.icon-prev { margin-left: -30px !important }
        span.icon-next { margin-right: -30px !important }

        .mid h3 {
            font-family: sans-serif;
            font-style: italic;
            font-weight: 600;
            color: white;
            margin: 0;
            white-space: nowrap;
            text-align: center;
            position: absolute;
            top: 40%;
            left: 50%;
            font-size: 4rem;
            transform: translate(-50%, -50%);
        }
    </style>
@endsection
