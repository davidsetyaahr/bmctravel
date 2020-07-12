@extends('backend.template.main')
@section('insert_caption','Insert New Payment')
@section('view_caption','View All Payment')
@section('insert_link','add-Payment')
@section('view_link','list-Payment')
@section('view_status','active')
@section('insert_status','')
@section('admin')
@section('pagetitle','Payment')

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
                            <th>Paket</th>
                            <th>Total Pembayaran</th>
                            <th>Total Harga</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                        @foreach($payment as $p)
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{ $p->firstname }} {{ $p->lastname }}</td>
                                <td>{{ $p->tour_name }}</td>
                                <td>{{ number_format($p->nominal,0,',','.') }}</td>
                                <td>{{ number_format($p->price,0,',','.') }}</td>
                                <td>{{ date("d-m-Y H:i", strtotime($p->payment_date)) }}</td>
                                <td>
                                        <a class="btn btn-default" href="{{url('admin/transaction/payment/detail/'.$p->id_payment)}}">Detail</a>
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
