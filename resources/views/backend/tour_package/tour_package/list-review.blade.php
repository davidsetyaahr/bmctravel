@extends('backend.template.main')
@section('insert_caption','')
@section('view_caption','View All Review')
@section('insert_link','')
@section('view_link','')
@section('view_status','active')
@section('insert_status','')
@section('admin')
@section('pagetitle','List Review')
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
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Package</th>
                                <th>Rate</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($review as $r)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$r->firstname}} {{$r->lastname}}</td>
                                <td>{{$r->tour_name}}</td>
                                <td>{{$r->rate}} coffee</td>
                                <td>{{$r->comment}}</td>
                                <td>{{date("d m Y, H:i", strtotime($r->datetime))}}</td>
                                <td>
                                    <?php 
                                        if($r->status=="0"){
                                            ?>
                                            <a class='btn btn-default statusReview' href="{{url('admin/review/action/'.$r->id_review.'?status=1')}}">Activate</a>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <a class='btn btn-warning statusReview' href="{{url('admin/review/action/'.$r->id_review.'?status=0')}}">Deactive</a>
                                            <?php
                                        }
                                    ?>
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
