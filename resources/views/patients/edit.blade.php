@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">
                    <div class="pull-left">
                        <a href="{{ URL::route('patients.index') }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
                    </div>
                    <div class="pull-right">
                        <form action="{{ url('patients/'.$patient->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
                        <button type="submit" id="delete-user-{{ $patient->id }}" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
                        </form>
                    </div>
                    <h4 style="text-align: center">Update Patient</h4></div>
                    <div class="panel-body">
                        {!! Form::model($patient,['class' => 'form-horizontal', 'method' => 'PATCH','route'=>['patients.update',$patient->id]]) !!}

                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('patient_first_name', 'First Name:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_first_name',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('patient_last_name', 'Last Name:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_last_name',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('admit_date', 'Admit Date:') !!}</div>
                            <div class="col-md-6">{!! Form::text('admit_date',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('admit_time', 'Admit Time:') !!}</div>
                            <div class="col-md-6">{!! Form::text('admit_time',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('patient_condition', 'Patient Condition:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_condition',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('age', 'Age:') !!}</div>
                            <div class="col-md-6">{!! Form::text('age',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('select', 'Gender:', ['class' => 'control-label']) !!}</div>
                            <div class="col-md-6">{!! Form::select('gender',array('Male' => 'Male', 'Female' => 'Female'), null, ['placeholder' => $patient->gender,'class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('date_of_birth', 'Date of Birth:') !!}</div>
                            <div class="col-md-6">{!! Form::text('date_of_birth',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('department', 'Department:') !!}</div>
                            <div class="col-md-6">{!! Form::select('department', array('Critical Care' => 'Critical Care', 'Burn Ward' => 'Burn Ward', 'Pediatric Unit' => 'Pediatric Unit', 'General Care' => 'General Care'), null,['placeholder' => $patient->department,'class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('next_of_kin', 'Next of Kin:') !!}</div>
                            <div class="col-md-6">{!! Form::text('next_of_kin',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('next_of_kin_contact', 'Emergency Contact:') !!}</div>
                            <div class="col-md-6">{!! Form::text('next_of_kin_contact',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('next_of_kin_relation', 'Next of Kin Relation:') !!}</div>
                            <div class="col-md-6">{!! Form::text('next_of_kin_relation',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('patient_deposition_condition', 'Patient Condition:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_deposition_condition',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('room_no', 'Room No:') !!}</div>
                            <div class="col-md-6">{!! Form::text('room_no',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">{!! Form::label('patient_injury', 'Patient Injury:') !!}</div>
                            <div class="col-md-6">{!! Form::text('patient_injury',null,['class'=>'form-control']) !!}</div>
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
@stop