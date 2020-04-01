@extends('backend.template.main')
@section('insert_caption','')
@section('view_caption','')
@section('insert_link','')
@section('view_link','')
@section('view_status','')
@section('insert_status','')
@section('admin')
<div class="row">
    <!-- Column -->
    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Paket Terbaik di {{date('F')}}
                    <br>
                    {{$best[0]->tour_name}} ({{$best[0]->ttl}}x)
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Yang akan datang di {{date('F')}}
                    <br>
                    {{number_format($income,0,',','.')}}
                </h5>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Terpesan di {{date('F')}}
                    <br>
                    {{$count[0]->ttl}}
                </h5>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-primary text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Paket Wisata
                    <br>
                    {{$package[0]->ttl}}
                </h5>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="box">
                <h5 class="color-orange">Paket Terbaik di {{date("F")}}</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Posisi</td>
                                <td>Nama Paket</td>
                                <td>Durasi</td>
                                <td>Pemesanan</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($thebest as $data)
                            <tr>
                                <td><?php echo $loop->iteration==1 ? "<span style='line-height:80%;font-size:30px' class='mdi mdi-crown color-orange'></span>" : $loop->iteration; ?></td>
                                <td>{{$data->tour_name}}</td>
                                <td>{{$data->day}} Hari {{$data->night}} Malam</td>
                                <td>{{$data->ttl}}x</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="box">
                <h5 class="color-orange">Perjalanan Terdekat</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Pengguna</td>
                                <td>Nama Paket</td>
                                <td>Durasi</td>
                                <td>Mulai Travel</td>
                                <td>Travel Berakhir</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nearest as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->firstname}} {{$data->lastname}}</td>
                                <td>{{$data->tour_name}}</td>
                                <td>{{$data->day}} Hari {{$data->night}} Hari</td>
                                <td>{{date('l, d F Y', strtotime($data->travel_date))}}</td>
                                <?php 
                                    $plus = $data->day-1;
                                ?>
                              <td>{{ date("l, d F Y", strtotime($data->travel_date.' +'.$plus.' day')) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
