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
                            <th>Identity</th>
                            <th>Nominal</th>
                            <th>Price</th>
                            <th>Payment date</th>
                            <th>attachment</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($payment as $p)
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{ $p->identity_card }}</td>
                                <td>{{ $p->nominal }}</td>
                                <td>{{ $p->price }}</td>
                                <td>{{ $p->payment_date }}</td>
                                <td>{{ $p->attachment }}</td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <?php   
                                                $nominal = $p->nominal;
                                                $price = $p->price;
                                                if ($nominal == $price) {
                                                    echo '<a class="dropdown-item" href="'.url("admin/calculation/".$p->id_payment).'">Calculating</a>';
                                                } 
                                                else{
                                                    echo '<a class="dropdown-item" href="edit-categories/{{ $p->id_payment }}">Edit</a>';
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
