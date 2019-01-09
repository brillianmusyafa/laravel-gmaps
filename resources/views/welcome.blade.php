@extends('layouts.front')

@section('content')
<style type="text/css">
	.no-padding {
		padding: 0px; 
	}
	.container, .container-fluid {
		padding-left: 0px;
		padding-right: 0px;
	}
	.filter-gmaps{
		position: absolute;
		z-index: 999;
		margin: 69px;
		/*width: 100px;*/
	}
	.summary-gmaps{
		position: absolute;
		z-index: 999;
		margin-top: 121px;
		margin-left: 10px;
		width: 199px;
	}
	.form-inline{
		display: flex;
	}
	.panel {
		margin-bottom: 22px;
		background-color: #ffffff3d;
		border: 1px solid transparent;
		border-radius: 4px;
		box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}
</style>
<div class="filter-gmaps">
	<form action="" method="GET" role="form" class="form-inline">
		{!! Form::select('kategori_id',$kat,null,['class'=>'form-control','placeholder'=>'Choose Category']) !!}
		<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	</form>
</div>
<div class="summary-gmaps">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Data</h3>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Data</th>
					<th>Jum</th>
				</tr>
			</thead>
			<tbody>
				<?php $jml=0; ?>
				@foreach($kategoryCount as $cc)

				<tr>
					<td>{{$cc->name}}</td>
					<td>{{$cc->jml}}</td>
				</tr>
				<?php $jml+=$cc->jml; ?>
				@endforeach
				<tr>
					<td><strong>Total</strong></td>
					<td><strong>{{$jml}}</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div id="map"></div>
@endsection

@push('js')

@endpush