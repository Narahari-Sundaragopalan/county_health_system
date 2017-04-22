@extends('layouts.app')

<head>
    <style>
        body {
            background-color: lightgray;
            background-image: url("/images/Speeding-ambulance-011.jpeg");
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

    #URL {
        font-size: 2.1vw;
    }

</style>
@section('content')
    <div class="module"></div>
    <div class="mid">
        <h3>Prompt, high quality, emergency <br/> medical care<hr style="height: auto"><a id="URL" href="{{ url('/emergencies') }}"style="color: white;" ><i class="fa fa-btn fa-fw fa-ambulance" style="font-size: 30px"></i>Check for Emergencies</a></h3>
    </div>
@endsection
