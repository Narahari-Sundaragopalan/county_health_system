@extends(Auth::user() ? 'layouts.userlayout' : 'layouts.guestpage')
@section('content')

    <div class="pull-left">
        <a href="{{ URL::route('patients.index') }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
    </div>
    <div class="pull-right">
        <form action="{{ url('patients/'.$patient->id) }}" method="POST" onsubmit="return ConfirmDelete();">{{ csrf_field() }}{{ method_field('DELETE') }}
            <button type="submit" id="delete-user-{{ $patient->id }}" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
        </form>
    </div>
    <h2 style="text-align: center">Update Patient</h2>
    <br>
    {!! Form::model($patient,['method' => 'PATCH','route'=>['patients.update',$patient->id]]) !!}

    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('patient_first_name', 'First Name:') !!}</div>
        <div class="col-lg-4">{!! Form::text('patient_first_name',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('patient_last_name', 'Last Name:') !!}</div>
        <div class="col-lg-4">{!! Form::text('patient_last_name',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('admit_date', 'Admit Date:') !!}</div>
        <div class="col-lg-4">{!! Form::text('admit_date',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('admit_time', 'Admit Time:') !!}</div>
        <div class="col-lg-4">{!! Form::text('admit_time',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('patient_condition', 'Patient Condition:') !!}</div>
        <div class="col-lg-4">{!! Form::text('patient_condition',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('age', 'Age:') !!}</div>
        <div class="col-lg-4">{!! Form::text('age',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('select', 'Gender:', ['class' => 'control-label']) !!}</div>
        <div class="col-lg-4">{!! Form::select('gender',array('M' => 'Male', 'F' => 'Female'), null, ['placeholder' => 'Select Gender','class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('date_of_birth', 'Date of Birth:') !!}</div>
        <div class="col-lg-4">{!! Form::text('date_of_birth',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('department', 'Department:') !!}</div>
        <div class="col-lg-4">{!! Form::text('department',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('next_of_kin', 'Next of Kin:') !!}</div>
        <div class="col-lg-4">{!! Form::text('next_of_kin',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('next_of_kin_contact', 'Emergency Contact:') !!}</div>
        <div class="col-lg-4">{!! Form::text('next_of_kin_contact',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('next_of_kin_relation', 'Next of Kin Relation:') !!}</div>
        <div class="col-lg-4">{!! Form::text('next_of_kin_relation',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('patient_deposition_condition', 'Patient Condition:') !!}</div>
        <div class="col-lg-4">{!! Form::text('patient_deposition_condition',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('room_no', 'Room No:') !!}</div>
        <div class="col-lg-4">{!! Form::text('room_no',null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-lg-2">{!! Form::label('patient_injury', 'Patient Injury:') !!}</div>
        <div class="col-lg-4">{!! Form::text('patient_injury',null,['class'=>'form-control']) !!}</div>
    </div>


    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@stop