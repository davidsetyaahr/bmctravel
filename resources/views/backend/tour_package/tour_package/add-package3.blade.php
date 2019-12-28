@extends('backend.template.main')
@section('insert_caption','Insert New Tour Package')
@section('view_caption','View All Tour Package')
@section('insert_link','add-tour-package')
@section('view_link','tour-package')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<script src="{{ asset('/public/matrix-admin-bt4') }}/assets/libs/jquery/dist/jquery.min.js"></script>
<form action="{{url("admin/tour-package/stepbystep")}}" method="post">
    @csrf
    <div id="form">
        <div class="row mb-2">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Day Start</label>
                        <select name="" id="form" class="form-control">
                            <option value="">---Option---</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="">Day End</label>
                        <select name="" id="" class="form-control">
                            <option value="">---Option---</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 ">
                        <label for="">Hotel</label>
                        <select name="" id="hotel" class="form-control hotel">
                            <option value="">---Option---</option>
                            @foreach ($hotel as $item)
                                <option value="{{$item->id_hotel}}">{{$item->hotel_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 ">
                        <label for="">Room Hotel</label>
                        <select name="" id="roomHotel" class="form-control">
                            <option value="">---Option---</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <label for="">Option</label>
                <div class="dropdown">
                    <button type="button" class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown">
                        Option
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><span class="mdi mdi-delete"></span> Remove Trip</a>
                        <a class="dropdown-item add-new-trip1" id='1' href="package?="><span class="mdi mdi-plus"></span> Add New Trip</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <hr class="mt-4">
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <div class="float-right">
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-menu-left"></span> Prev</button>
                <button class="btn btn-primary" type="submit">Next <span class="mdi mdi-menu-right"></span></button>
            </div>
        </div>
    </div>
</form>
<script>     
        function click(){
            $(document).ready(function (){
                $('.add-new-trip1').click(function(e) {
                    e.preventDefault()

                    var num = $(this).attr("id")

                    addTrip(num)
                })

                $("#hotel").change(function(){
                    var kode = $(".hotel").val()
                    $.ajax({
                        url     : "/bmctravel/admin/tour-package/kodehotel",
                        type    : "POST",
                        data    : {
                            "kode" : kode
                        }
                        // ,
                        // dataType: 'JSON',
                        // success : function(response){
                        //     console.log(response);
                        // }
                    })
                })
            })
         }
         click()

    function addTrip(num){
            num++;
            $('#form').append(`
            <div class="row mb-2">
                <div class="col-md-2">
                    <label for="">Day Start</label>
                    <select name="" id="" class="form-control">
                        <option value="">---Option---</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="">Day End</label>
                    <select name="" id="" class="form-control">
                        <option value="">---Option---</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Hotel</label>
                    <select name="" id="" class="form-control">
                        <option value="">---Option---</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="">Option</label>
                    <div class="dropdown">
                        <button type="button" class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown">
                            Option
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><span class="mdi mdi-delete"></span> Remove Trip</a>
                            <a class="dropdown-item add-new-trip1" id="`+num+`" href="#"><span class="mdi mdi-plus"></span> Add New Trip</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                <hr class="mt-4">
                </div>
              `)
              click()

    }
</script>

@endsection