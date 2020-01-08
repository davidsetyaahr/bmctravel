@extends('backend.template.main')
@section('insert_caption','Insert New Tour Package')
@section('view_caption','View All Tour Package')
@section('insert_link','add-tour-package?page=1')
@section('view_link','tour-package')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="input-step">
                    <?php 
                        $arrStep = ['Overview','Itinerary','Information','Pricing'];
                        foreach($arrStep as $i => $step) { 
                            $i++;
                            $active = $i<=$_GET['page'] ? "active" : "disable";
                            $link = $i-1<=$_GET['page'] ? "?page=".$i : "#";
                    ?>
                            <a href="{{$link}}" class="{{$active}}">Step {{$i}} : {{$step}}</a>
                    <?php
                        }                    
                    ?>
                </div>
            <div class="card-body">
            @if(empty($_GET['page']) || $_GET['page']==1)
                @include('backend.tour_package.tour_package.add-package1')
            @else
                @if($_GET['page']==2)
                    @include('backend.tour_package.tour_package.add-package2')
                @elseif($_GET['page']==3)
                    @include('backend.tour_package.tour_package.add-package3')
                @elseif($_GET['page']==4)
                    @include('backend.tour_package.tour_package.add-package4')
                @elseif($_GET['page']==5)
                    @include('backend.tour_package.tour_package.add-package5')
                @endif
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
