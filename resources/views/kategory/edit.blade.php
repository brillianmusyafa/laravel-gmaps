@extends('layouts.adminlte')

@section('content')
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Kategory {{ $kategory->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($kategory, [
                            'method' => 'PATCH',
                            'url' => ['/kategory', $kategory->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('kategory.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>

@endsection