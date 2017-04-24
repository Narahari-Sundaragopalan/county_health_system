@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')

<head>
    <style>
        body {
            background-color: lightgray;
            background-image: url("/images/Speeding-ambulance-011.jpeg");
        }
        #mySidenav a {
            position: absolute;
            left: -80px;
            transition: 0.3s;
            padding: 15px;
            width: 100px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            border-radius: 0 5px 5px 0;
        }

        #mySidenav a:hover {
            left: 0;
        }

        #about {
            top: 100px;
            background-color: #f44336;
        }

        #contact {
            top: 180px;
            background-color: #f44336;
        }
    </style>
</head>

<style>

    .mid h3 {
        font-family: sans-serif;
        font-style: italic;
        font-weight: 600;
        color: white;
        margin: 0;
        white-space: nowrap;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 4.2vw;
        transform: translate(-50%, -50%);
    }


</style>
@section('content')
    <div class="module"></div>
    <div class="mid">
        <h3>Prompt, high quality, emergency <br/> medical care<hr style="height: auto"><a href="{{ url('/emergencies') }}"style="color: white; font-size: 2.5vw;" ><i class="fa fa-btn fa-fw fa-ambulance" style="font-size: 2.5vw"></i>Check for Emergencies</a></h3>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="{{ url('/about') }}" id="about">About</a>
        <a href="{{ url('/contact') }}" id="contact">Contact</a>
    </div>
@endsection
