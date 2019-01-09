@extends('layouts.adminlte')
@section('header')
{{$header}}
@endsection
@section('header_description')
{{$header_description}}
@endsection
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Create New Kategory</div>
    <div class="panel-body">

        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::open(['url' => '/kategory', 'class' => 'form-horizontal', 'files' => true]) !!}

        @include ('kategory.form')

        {!! Form::close() !!}

    </div>
</div>

@endsection