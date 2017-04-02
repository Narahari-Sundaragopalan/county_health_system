@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')
@section('content')
    <head>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    </head>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">
                    <div class="pull-left">
                        <a href="{{ URL::route('patients.index') }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
                    </div>
                    @if(Auth::check() && (Auth::user()->hasRole('admin') || Auth::user()->hasRole('nurse')))
                    <div class="pull-right">
                        <form action="{{ url('patients/'.$patient->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                        <button type="submit" id="delete-user-{{ $patient->id }}" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
                        </form>
                    </div>
                    @endif
                    <h4 style="text-align: center">Update Patient</h4></div>
                    <div class="panel-body">
                        {!! Form::model($patient,['class' => 'form-horizontal', 'method' => 'PATCH','route'=>['patients.update',$patient->id]]) !!}
                        @include('common.errors')
                        @include('common.flash')

                        <div class="form-group{{ $errors->has('patient_first_name') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('patient_first_name', 'First Name:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_first_name',null,['class'=>'form-control', 'required']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('patient_last_name') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('patient_last_name', 'Last Name:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_last_name',null,['class'=>'form-control', 'required']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('admit_date') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('admit_date', 'Admit Date:') !!}</div>
                            <div class="col-md-6">{{ Form::text('admit_date', null, array('id' => 'datepicker1'), ['class' => 'col-md-6 form-control', 'required']) }}</div>
                        </div>
                        <div class="form-group{{ $errors->has('admit_time') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('admit_time', 'Admit Time:') !!}</div>
                            <div class="col-md-6">{!! Form::text('admit_time',null,['class'=>'form-control', 'required']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('patient_condition') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('patient_condition', 'Patient Condition:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_condition',null,['class'=>'form-control', 'required']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('age', 'Age:') !!}</div>
                            <div class="col-md-6">{!! Form::text('age',null,['class'=>'form-control']) !!}
                                @if ($errors->has('age'))
                                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('select', 'Gender:', ['class' => 'control-label']) !!}</div>
                            <div class="col-md-6">{!! Form::select('gender',array('Male' => 'Male', 'Female' => 'Female'), null, ['placeholder' => $patient->gender,'class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('date_of_birth', 'Date of Birth:') !!}</div>
                            <div class="col-md-6">{{ Form::text('date_of_birth', null, array('id' => 'datepicker2'), ['class' => 'col-md-6 form-control']) }}</div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('department', 'Department:') !!}</div>
                            <div class="col-md-6">{!! Form::select('department', array('Critical Care' => 'Critical Care', 'Burn Ward' => 'Burn Ward', 'Pediatric Unit' => 'Pediatric Unit', 'General Care' => 'General Care'), null,['placeholder' => $patient->department,'class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('next_of_kin') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('next_of_kin', 'Next of Kin:') !!}</div>
                            <div class="col-md-6">{!! Form::text('next_of_kin',null,['class'=>'form-control', 'required']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('next_of_kin_contact') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('next_of_kin_contact', 'Emergency Contact:') !!}</div>
                            <div class="col-md-6">{!! Form::text('next_of_kin_contact',null,['class'=>'form-control', 'required']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('next_of_kin_relation') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('next_of_kin_relation', 'Next of Kin Relation:') !!}</div>
                            <div class="col-md-6">{!! Form::text('next_of_kin_relation',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('patient_deposition_condition') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('patient_deposition_condition', 'Deposition Condition:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_deposition_condition',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('room_no', 'Room No:') !!}</div>
                            <div class="col-md-6">{!! Form::text('room_no',null,['class'=>'form-control', 'required']) !!}</div>
                        </div>
                        <div class="form-group{{ $errors->has('patient_injury') ? ' has-error' : '' }}">
                            <div class="col-md-4">{!! Form::label('patient_injury', 'Patient Injury:') !!}</div>
                            <div class="col-md-6">{!! Form::textarea('patient_injury',null,['class'=>'form-control', 'required']) !!}</div>
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