@extends('backend.template.main')
@section('insert_caption','Insert New Booking')
@section('view_caption','View All Booking')
@section('insert_link','add-booking')
@section('view_link','list-booking')
@section('view_status','active')
@section('insert_status','')
@section('admin')
@section('pagetitle','Booking')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Pengguna</th>
                            <th>Nama Wisata</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Mulai Travel</th>
                            <th>Travel Berakhir</th>
                            <th>Pax</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                        @foreach($bookings as $b)
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{ $b->firstname }} {{ $b->lastname }}</td>
                                <td>{{ $b->tour_name }}</td>
                                <td>{{ date("d-m-Y H:i", strtotime($b->booking_date)) }}</td>
                                <td>{{ date("l, d F Y", strtotime($b->travel_date)) }}</td>
                                <td>{{ date("l, d F Y", strtotime($b->travel_date)) }}</td>
                                <td>{{ $b->pax }}</td>
                                <td><?php
                                    switch ($b->status) {
                                        case '0':
                                        echo "<span class='badge badge-info'>Sudah dipesan</span>";
                                        break;
                                        case '11':
                                        echo "<span class='badge badge-warning'>Menunggu Persetujuan (50% Pembayaran)</span>";
                                        break;
                                        case '1':
                                        echo "<span class='badge badge-primary'>50% Pembayaran</span>";
                                        break;
                                        case '22':
                                        echo "<span class='badge badge-warning'>Menunggu Persetujuan (100% Pembayaran)</span>";
                                        break;
                                        case '222':
                                        echo "<span class='badge badge-warning'>Menunggu Persetujuan (Pelunasan)</span>";
                                        break;
                                        case '2':
                                        echo "<span class='badge badge-success'>Pembayaran Berhasil</span>";
                                        break;
                                    }
                               ?></td>

                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opsi
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="edit-categories/{{ $b->id_booking }}">Detail</a>
                                            <?php 
                                                if($b->status=='2'){
                                            ?>
                                                <a class="dropdown-item" href="{{ url('admin/calculation/detail/'.$b->id_booking) }}">Kalkulasi</a>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </td>
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
