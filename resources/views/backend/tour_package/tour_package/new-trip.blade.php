        <?php 
            $count = isset($_GET['trip']) ? $_GET['trip'] : $count;
            $thisday = isset($thisday) ? $thisday : $_GET['day'];
        ?>
            <div class="row mb-3 row-trip" data-trip="{{$count}}">
                <div class="col-md-12 mb-3">
                    <div class="alert alert-success trip"><span>Trip <span class="changeTrip"><?php echo $count ?></span></span>
                        @if($count>1)
                        <a href="" class="btn btn-danger float-right remove-trip" data-day='{{$thisday}}' data-trip='{{$count}}'>Remove trip</a>
                        @endif
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
                        @foreach($destination as $d)
                            <option value="{{$d->id_destination}}">{{$d->destination_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="">Activities</label>
                    <input type="text" class="form-control" name="activities[]">
                </div>
            </div>
