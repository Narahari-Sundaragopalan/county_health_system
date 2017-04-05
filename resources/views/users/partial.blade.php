<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'E-Mail Address:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('security_question1') ? ' has-error' : '' }}">
    {!! Form::label('security_question1', 'Security Question 1:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('security_question1', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('security_question1'))
            <span class="help-block">
                <strong>{{ $errors->first('security_question1') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('security_answer1') ? ' has-error' : '' }}">
    {!! Form::label('security_answer1', 'Security Answer 1:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('security_answer1', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('security_answer1'))
            <span class="help-block">
                <strong>{{ $errors->first('security_answer1') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('security_question2') ? ' has-error' : '' }}">
    {!! Form::label('security_question2', 'Security Question 2:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('security_question2', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('security_question2'))
            <span class="help-block">
                <strong>{{ $errors->first('security_question2') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('security_answer2') ? ' has-error' : '' }}">
    {!! Form::label('security_answer2', 'Security Answer 2:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('security_answer2', null, ['class' => 'col-md-6 form-control', 'required' => 'required']) !!}
        @if ($errors->has('security_answer2'))
            <span class="help-block">
                <strong>{{ $errors->first('security_answer2') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Roles</label>
    <div class="col-md-6">{!! Form::select('rolelist[]', $list_role, null, ['class' => 'form-control roles cds-select', 'style' => 'width: 50%; margin-top: 10px;']) !!}</div>
</div>

@if($CRUD_Action == 'Create')
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password">
            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Confirm Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation">
            @if ($errors->has('password_confirmation'))
                <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
            @endif
        </div>
    </div>
@endif

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
    </div>
</div>
