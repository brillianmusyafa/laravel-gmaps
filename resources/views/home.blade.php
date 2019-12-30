@extends('layouts.adminlte')
@section('header')
@lang('home.dashboard')
@endsection
@section('header_description')
{{$document['header_description']}}
@endsection
@section('content')
<style type="text/css">
    .no-padding {
     padding: 0px; 
 }
</style>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">@lang('home.chart_marker')</h3>
            </div>
            <div class="panel-body">
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">@lang('home.summary_category')</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>@lang('home.count')</th>
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
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">@lang('home.maps')</div>

    <div class="panel-body no-padding">
       <div id="map"></div>
   </div>
</div>
@endsection

@push('js')
<script>
    var map = new GMaps({
      el: '#map',
      zoom: {{ $set_zoom }},
      lat: '{{ $latitude_centre }}',
      lng: '{{ $longitude_centre }}'
  });

    @foreach($data as $d)
    map.addMarker({
        lat: '{{$d->lat}}',
        lng: '{{$d->long}}',
        title: '{{$d->title}} #',
        icon: 'img/{{$d->Kategori->icon}}',
        infoWindow: {
            content : '<h3>{{$d->title}}</h3><p>{{$d->description}}</p><p>{{$d->no_telp}}</p>'
        }
    });
    @endforeach
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById("myChart").getContext('2d');
    @if($grafik!=null)
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!!$grafik['labels']!!},
            datasets: [{
                label: '# of Kategori',
                data: {{$grafik['data']}},
                backgroundColor: {!!$grafik['backgroundColor']!!},
                borderColor: {!!$grafik['backgroundColor']!!},
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    @endif
</script>
@endpush