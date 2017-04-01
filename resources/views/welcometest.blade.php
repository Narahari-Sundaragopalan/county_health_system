@extends('layouts.app')

<style>
    .image {
        position: fixed;
        width: 1500px;
        height: 500px;
    }

    h2 {
        position: absolute;
        top: 250px;
        left: 0;
        width: 100%;
    }

    h2 span {
        color: white;
        font: bold 45px/56px Helvetica, Sans-Serif;
        letter-spacing: -1px;
        background: rgb(0, 0, 0); /* fallback color */
        background: rgba(0, 0, 0, 0.7);
        padding: 1px;
    }

    h2 span.spacer {
        padding:0 10px;
    }

</style>

@section('content')
    <div class="image">
        <img src='images/Speeding-ambulance-011.jpeg' alt="" />
        <h2><span class='spacer'>Prompt, high quality, emergency<span class='spacer'></span><br/><span class='spacer'></span>medical care</span></h2>
    </div>
@endsection
