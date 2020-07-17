<div class="row">
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('kategory_id') ? 'has-error' : ''}}">
            {!! Form::label('kategory_id', 'Kategory Id', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::select('kategory_id',$kat, null, ['class' => 'form-control']) !!}
                {!! $errors->first('kategory_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>'2']) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
            {!! Form::label('lat', 'Lat', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('lat', null, ['class' => 'form-control','id'=>'lat']) !!}
                {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('long') ? 'has-error' : ''}}">
            {!! Form::label('long', 'Long', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('long', null, ['class' => 'form-control','id'=>'long']) !!}
                {!! $errors->first('long', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div id="map"></div>
    </div>
</div>

<!-- <div class="form-group {{ $errors->has('upload') ? 'has-error' : ''}}">
    {!! Form::label('upload', 'Upload', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('upload', null, ['class' => 'form-control']) !!}
        {!! $errors->first('upload', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <a class="btn btn-default" href="{{url('maps')}}" role="button">Back</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>


@push('js')
<script>
    var map = new GMaps({
      el: '#map',
      zoom: {{$set_zoom}},
      lat: {{$latitude_centre}},
      lng: {{$longitude_centre}},
      click: function(e) {
        // alert('click');
        var latLng = e.latLng;
        console.log(latLng);
        var lat = $('#lat');
        var long = $('#long');

        lat.val(latLng.lat());
        long.val(latLng.lng());
        map.removeMarkers();
        map.addMarker({
            lat: latLng.lat(),
            lng: latLng.lng(),
            title: 'Create Here',
            click: function(e) {
                alert('You clicked in this marker');
            }
        });

    },
});

@isset($map)
map.addMarker({
    lat: {{$map->lat}},
    lng: {{$map->long}},
    title: 'Create Here',
    click: function(e) {
        alert('You clicked in this marker');
    }
});
@endisset
</script>
@endpush