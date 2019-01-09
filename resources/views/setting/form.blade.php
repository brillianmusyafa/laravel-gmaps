<div class="form-group {{ $errors->has('setting_name') ? 'has-error' : ''}}">
    {!! Form::label('setting_name', 'Setting Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('setting_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('setting_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('setting_value') ? 'has-error' : ''}}">
    {!! Form::label('setting_value', 'Setting Value', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('setting_value', null, ['class' => 'form-control']) !!}
        {!! $errors->first('setting_value', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>