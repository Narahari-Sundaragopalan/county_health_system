@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to County Health Bed Tracking System</div>
                <div style="text-align: center;"><img src="/images/Logo_Final.png"></div>

                <div class="panel-body">
                    <a href="{{ url('/emergencies') }}"style="font-size: 20px; color: red" ><i class="fa fa-btn fa-fw fa-ambulance" style="font-size: 30px"></i>Click here for Emergencies</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
