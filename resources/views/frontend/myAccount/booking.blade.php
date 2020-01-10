@extends('frontend/myAccount/my-account')
@section('menu-account')
    <h6 class="bottom-line">Booking</h6>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tour Name</th>
      <th scope="col">Booking date</th>
      <th scope="col">Travel Date</th>
      <th scope="col">Email</th>
      <th scope="col">Pax</th>
      <th scope="col">Price</th>
      <th scope="col">Identity Card</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bookings as $b)
    <tr>
     <th>{{ $loop->iteration}}</th>
      <td>{{ $b->tour_name }}</td>
      <td>{{ $b->booking_date }}</td>
      <td>{{ $b->travel_date }}</td>
      <td>{{ $b->email }}</td>
      <td>{{ $b->pax }}</td>
      <td>{{ $b->price }}</td>
      <td>{{ $b->identity_card }}</td>
      <td>{{ $b->status }}</td>
  @endforeach
  </tbody>
</table>



@endsection