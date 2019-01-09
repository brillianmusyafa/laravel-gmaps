@extends('layouts.adminlte')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Maps</div>
                <div class="panel-body">

                    <a href="{{ url('/maps/create') }}" class="btn btn-primary btn-xs" title="Add New Map"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th> Kategory Id </th><th> Title </th><th> Description </th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($maps as $item)
                                <tr>
                                    <!-- <td>{{ $item->id }}</td> -->
                                    <td>{{ $item->Kategori->name }}</td><td>{{ $item->title }}</td><td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ url('/maps/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Map"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                        {!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/maps', $item->id],
                                            'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Map" />', array(
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-xs',
                                            'title' => 'Delete Map',
                                            'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $maps->render() !!} </div>
                        </div>

                    </div>
                </div>
    @endsection