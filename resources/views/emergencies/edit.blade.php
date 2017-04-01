@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">
                                <a href="{{ URL::route('emergencies.index') }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
                        </div>
                        <div class="pull-right">
                            <form action="{{ url('emergencies/'.$emergency->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                                <button type="submit" id="delete" class="btn btn-default btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
                            </form>
                        </div>
                        <div><h4 style="text-align: center">{{ $heading }}</h4></div>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($emergency, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['EmergencyController@update', $emergency->id]]) !!}
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
                                {!! Form::text('emergency_start_date', null, ['class' => 'col-md-6 form-control']) !!}
                                @if ($errors->has('emergency_start_date'))
                                    <span class="help-block"><strong>{{ $errors->first('emergency_start_date') }}</strong></span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('emergency_end_date') ? ' has-error' : '' }}">
                            {!! Form::label('emergency_end_date', 'Emergency End Date:', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('emergency_end_date', null, ['class' => 'col-md-6 form-control']) !!}
                                @if ($errors->has('emergency_end_date'))
                                    <span class="help-block"><strong>{{ $errors->first('emergency_end_date') }}</strong></span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::button('<i class="fa fa-btn fa-edit"></i>Update', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection