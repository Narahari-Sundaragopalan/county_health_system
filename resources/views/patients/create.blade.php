@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center"><h4> {{ 'Add New Patient' }}</h4></div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'patients', 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        <div class="col-lg-2">
                        {!! Form::select('hospital_id', $hospitals) !!}
                        </div>
                    </div>

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
                        <div class="col-md-6">{!! Form::select('gender',array('Male' => 'Male', 'Female' => 'Female'), null, ['placeholder' => 'Select Gender','class'=>'form-control']) !!}</div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">{!! Form::label('date_of_birth', 'Date of Birth:') !!}</div>
                        <div class="col-md-6">{!! Form::text('date_of_birth',null,['class'=>'form-control']) !!}</div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">{!! Form::label('department', 'Department:') !!}</div>
                        <div class="col-md-6">{!! Form::select('department',array('Critical Care' => 'Critical Care', 'Burn Ward' => 'Burn Ward', 'Pediatric Unit' => 'Pediatric Unit', 'General Care' => 'General Care'), null,['placeholder' => 'Select Department', 'class' => 'form-control']) !!}</div>
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
                            {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop