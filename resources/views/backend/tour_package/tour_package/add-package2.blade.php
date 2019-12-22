<script src="{{ asset('/public/matrix-admin-bt4') }}/assets/libs/jquery/dist/jquery.min.js"></script>
<form action="{{url("admin/tour-package/stepbystep")}}" method="post" >
@csrf
    <input type="hidden" name="step" value="2">
    <div class="card custom">
        <h5 class="card-header ls-1">Day  01</h5>
        <div class="p-20 bg-light">
            <label for="">Overview</label>
            <input type="text" class="form-control" name="overview">
        </div>
        <hr class="mt-0">
        <div class="card-body" id="form">
            <div class="row mb-5">
                <div class="col-md-12 mb-3">
                    <div class="alert alert-success trip"><span>Trip 1</span>
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Option
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><span class="mdi mdi-delete"></span> Remove Trip</a>
                                <a class="dropdown-item add-new-trip" id="1" href="#"><span class="mdi mdi-plus"></span> Add New Trip</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="">Time Start</label>
                    <input type="time" name="timestart[]" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="">Time End</label>
                    <input type="time" class="form-control" name="timeend[]">
                </div>
                <div class="col-md-8">
                    <label for="">Destinations</label>
                    <select name="destinations[]" id="" class="form-control">
                        <option value="">---Option---</option>
                    </select>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="">Activities</label>
                    <input type="text" class="form-control" name="activities[]">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="">Tour Type</label>
                    <div class="bg-light p-10">
                    
                    @foreach($type as $type)
                     
                        <div class="form-check custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="form-check-input custom-control-input" id="check{{ $type->id_type }}" name="tourtype[0][]" value="{{ $type->id_type }}">{{ $type->type_name }}
                            <label class="custom-control-label" for="check{{ $type->id_type }}">
                                
                            </label>
                        </div>
                    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="float-right">
        <button class="btn btn-default" type="reset"><span class="mdi mdi-menu-left"></span> Prev</button>
        <button class="btn btn-primary" type="submit">Next <span class="mdi mdi-menu-right"></span></button>
    </div>
</form>
<script>
    $(document).ready(function (){
        num=1;
        $('.add-new-trip').click(function(e) {
            e.preventDefault()
            form()
        })

        function form(){
            if(num>0){
            num+=1;
            $('#form').append(`
            <div class="row mb-5">
                <div class="col-md-12 mb-3">
                    <div class="alert alert-success trip"><span>Trip `+num+`</span>
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                Option
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><span class="mdi mdi-delete"></span> Remove Trip</a>
                                <a class="dropdown-item add-new-trip" id="`+num+`"href="#"><span class="mdi mdi-plus"></span> Add New Trip</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="">Time Start</label>
                    <input type="time" name="timestart[]" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="">Time End</label>
                    <input type="time" name="timeend[]" class="form-control">
                </div>
                <div class="col-md-8">
                    <label for="">Destinations</label>
                    <select name="destinations[]" id="" class="form-control">
                        <option value="">---Option---</option>
                    </select>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="">Activities</label>
                    <input type="text" name="activities[]" class="form-control">
                </div>
                <div class="col-md-12 mt-3">
                    <label for="">Tour Type</label>
                    <div class="bg-light p-10">
                        <div class="form-check custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="form-check-input custom-control-input" id="check" name="tourtype[][]" value="">
                        <label class="custom-control-label" for="check">
                            
                        </label>
                    </div>
                    </div>
                </div>
            </div>
            `)
            }
        }
    });
</script>
