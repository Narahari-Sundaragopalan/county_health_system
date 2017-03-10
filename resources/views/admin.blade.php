@extends('layouts.userlayout')
@section('content')
    <style>

        .carousel
        {
            width: 750px;
            height: 540px;
            background-color: silver;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        .carousel img {
            display: inline-block;
            vertical-align: middle;
        }
        .carousel:after {
            display: inline-block;
            vertical-align: middle;
            content: "";
            height: inherit;
        }
    </style>

    <div id="myCarousel" class="carousel"  data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="text-align: center;">
            <div class="item active" style="text-align: center;">
                <a href="http://www.unomaha.edu/college-of-information-science-and-technology" target="_blank">
                    <img style="text-align: center" src="/images/emergency2.jpeg" class="img-responsive">
                </a>
            </div>
        `<div class="item" style="text-align: center;">
                {{--<a href="http://www.nacada.ksu.edu" target="_blank">--}}
                <a href="http://www.unomaha.edu/college-of-information-science-and-technology/academics/advising.php" target="_blank">
                    <img src="/images/emergencybanner1.jpeg" class="img-responsive">
                </a>
            </div>
            <div class="item" style="text-align: center;">
                <a href="http://www.unomaha.edu" target="_blank">
                    <img src="/images/emergency.png" class="img-responsive">
                </a>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="icon-prev"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="icon-next"></span></a>
    </div>
@endsection
