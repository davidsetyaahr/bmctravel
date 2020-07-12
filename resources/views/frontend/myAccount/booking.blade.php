@extends('frontend/myAccount/my-account')
@section('menu-account')
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
    <table class="table table-striped table-booking">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Wisata</th>
      <th scope="col">Tanggal Pemesanan</th>
      <th scope="col">Mulai Travel</th>
      <th scope="col">Travel Berakhir</th>
      <th scope="col">Pax</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bookings as $b)
  <?php 
    $plus = $b->day-1;
  ?>
    <tr>
     <th>{{ $loop->iteration}}</th>
      <td>{{ $b->tour_name }}</td>
      <td>{{ date("l, d F Y H:i", strtotime($b->booking_date)) }}</td>
      <td>{{ date("l, d F Y", strtotime($b->travel_date)) }}</td>
      <td>{{ date("l, d F Y", strtotime($b->travel_date.' +'.$plus.' day')) }}</td>
      <td>{{ $b->pax }}</td>
      <td>{{ number_format($b->price,0,',','.') }}</td>
      <td>
        <?php 
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
        ?>
      </td>
      <td>
      <div class="dropdown">
        <button type="button" class="btn btn-default dropdown-toggle bold" data-toggle="dropdown">
          Opsi
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="booking/detail/{{$b->id_booking}}">Detail</a>
          <?php 
            if($b->status=='0' || $b->status=='1')
            {
          ?>
            <a class="dropdown-item" href="booking/payment/{{$b->id_booking}}">Pembayaran</a>
            <?php }
            if($b->status=='2'){
              $name = strtolower(str_replace(' ','-',$b->tour_name));
              ?>
            <a class="dropdown-item" href="{{url('/tour-package/detail-package/'.$b->id_tour.'/'.$name)}}">Tulis Ulasan</a>
            <?php } ?>

        </div>
      </div>
      </td>
  @endforeach
  </tbody>
</table>



@endsection