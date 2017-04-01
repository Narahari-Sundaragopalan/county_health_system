@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')
@section('content')
    <head>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    </head>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 style="text-align: center">Create Emergency</h4></div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'emergencies', 'class' => 'form-horizontal']) !!}
                        @include('common.errors')
                        @include('common.flash')

                        <div class="form-group{{ $errors->has('emergency_name') ? ' has-error' : '' }}">
                        {!! Form::label('emergency_name', 'Emergency Name:', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('emergency_name', null, ['class' => 'col-md-6 form-control']) !!}
                            @if ($errors->has('emergency_name'))
                                <span class="help-block"><strong>{{ $errors->first('emergency_name') }}</strong></span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('emergency_start_date') ? ' has-error' : '' }}">
                        {!! Form::label('emergency_start_date', 'Emergency Start Date:', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {{ Form::text('emergency_start_date', null, array('id' => 'datepicker1'), ['class' => 'col-md-6 form-control']) }}
                            @if ($errors->has('emergency_start_date'))
                                <span class="help-block"><strong>{{ $errors->first('emergency_start_date') }}</strong></span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('emergency_end_date') ? ' has-error' : '' }}">
                        {!! Form::label('emergency_end_date', 'Emergency End Date:', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {{ Form::text('emergency_end_date', null, array('id' => 'datepicker2'), ['class' => 'col-md-6 form-control']) }}
                            @if ($errors->has('emergency_end_date'))
                                <span class="help-block"><strong>{{ $errors->first('emergency_end_date') }}</strong></span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#datepicker1" ).datepicker();
            $( "#datepicker2" ).datepicker();
        });
    </script>
@endsection