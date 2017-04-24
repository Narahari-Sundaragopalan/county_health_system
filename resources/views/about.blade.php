@extends('layouts.userlayout')

<!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <a href="{{ url('/') }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
                        </div>
                        <h3 style="text-align: center">About Us</h3>
                    </div>
                    <div class="panel-body">
                        <p1 style="font-size: medium">The County Health Department is responsible for coordination of the hospital resources in the county. This centralized system is to provide a platform to coordinate between the hospitals and all the types of users (First responder, Admin, Nurse, Coordinator).</p1>
                        </br>
                        </br>
                        <p2 style="font-weight: bold; font-size: large; color: blue"><i class="fa fa-phone" aria-hidden="true"></i>Contact US : 402-999-9999</p2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection