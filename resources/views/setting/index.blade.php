@extends('layouts.adminlte')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Konfirgurasi Aplikasi</div>
    <div class="panel-body">
        <!-- <form action="" class="form-horizontal" method="POST" role="form"> -->
            {!! Form::open(['method'=>'POST','class'=>'form-horizontal']) !!}
            @foreach($setting as $item)
            <div class="form-group {{ $errors->has('setting_value') ? 'has-error' : ''}}">
                {!! Form::label('setting_value', $item->setting_name, ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text($item->setting_name, $item->setting_value, ['class' => 'form-control']) !!}
                    {!! $errors->first('setting_value', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            @endforeach

            <button type="submit" class="btn btn-primary">Submit</button>
        {!! Form::close() !!}


        </div>
    </div>
    @endsection