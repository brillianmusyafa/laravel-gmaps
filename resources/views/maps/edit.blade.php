@extends('layouts.adminlte')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Edit Map {{ $map->id }}</div>
    <div class="panel-body">

        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::model($map, [
            'method' => 'PATCH',
            'url' => ['/maps', $map->id],
            'class' => 'form-horizontal',
            'files' => true
            ]) !!}

            @include ('maps.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
    </div>
    @endsection