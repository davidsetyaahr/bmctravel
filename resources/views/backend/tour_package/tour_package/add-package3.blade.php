<form action="{{url("admin/tour-package/stepbystep")}}" method="post">
    @csrf
    <div class="room">
        <div class="row mb-2" id="room">
                    <div class="col-md-2">
                        <label for="">Day Start</label>
                        <select name="" id="form" class="form-control noSelect">
                            <?php 
                                for($i=1;$i<=10;$i++){
                                    echo "<option>$i</option>";
                                }    
                            ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="">Day End</label>
                        <select name="" id="" class="form-control noSelect">
                            <?php 
                                for($x=1;$x<=10;$x++){
                                    echo "<option>$x</option>";
                                }    
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="">Hotel</label>
                    <select name="" class="form-control changeCombo" data-url="{{ url('admin/tour-package/getKodeHotel') }}" data-target="#roomHotel">
                            <option value="">---Option---</option>
                            @foreach ($hotel as $item)
                                <option value="{{$item->id_hotel}}">{{$item->hotel_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="">Room Hotel</label>
                        <select name="" id="roomHotel" class="form-control">
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
                                <a class="dropdown-item" href="#"><span class="mdi mdi-delete"></span> Remove</a>
                                <a class="dropdown-item add-new" href="package?="><span class="mdi mdi-plus"></span> Add New </a>
                            </div>
                        </div>
            </div>
            </div>
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