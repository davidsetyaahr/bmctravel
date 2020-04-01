        <?php 
            $count = isset($_GET['trip']) ? $_GET['trip'] : $count;
            $thisday = isset($thisday) ? $thisday : $_GET['day'];
            if(!empty($session) && $session!=""){
                $hotel = DB::table('hotels')->get();

                $count = 1;
                foreach ($session['timestart'][$thisday] as $key => $value) {
        ?>
            <div class="row mb-3 row-trip mt-10" data-trip="{{$count}}">
                <div class="col-md-12 mb-3">
                    <div class="alert alert-success trip"><span>Perjalanan <span class="changeTrip"><?php echo $count ?></span></span>
                        @if($count>1)
                        <a href="" class="btn btn-danger float-right remove-trip" data-day='{{$thisday}}' data-trip='{{$count}}'>Hapus Perjalanan</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="">Waktu Mulai</label>
                    <input type="time" name="timestart[{{$thisday}}][]" class="form-control" value="{{$session['timestart'][$thisday][$key]}}">
                </div>
                <div class="col-md-2">
                    <label for="">Waktu Selesai</label>
                    <input type="time" class="form-control" name="timeend[{{$thisday}}][]" value="{{$session['timeend'][$thisday][$key]}}">
                </div>
                <div class="col-md-8">
                    <label for="">Destinasi/Tujuan</label>
                    <select name="destinations[{{$thisday}}][]" id="" class="form-control checkHotel"  data-day="{{$thisday}}" data-trip='{{$count}}'>
                        <option value="">---Pilih---</option>
                        @foreach($destination as $d)
                            <option value="{{$d->id_destination}}" <?= $d->id_destination==$session['destinations'][$thisday][$key] ? "selected" : ""; ?>>{{$d->destination_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mt-3 append-hotel">
                    <?php 
                        if($session['destinations'][$thisday][$key]==1){
                    ?>
                    @include('backend.room_hotel.changeRoom', ['hotel' => $hotel,'day' => $thisday,'trip' => $count, 'room' => $session['room_hotel'][$thisday][$count]])
                    <?php } ?>
                </div>
                <div class="col-md-12 mt-2">
                    <label for="">Aktivitas</label>
                    <input type="text" class="form-control" name="activities[{{$thisday}}][]" value="{{$session['activities'][$thisday][$key]}}">
                </div>
            </div>
            <?php 
            $count++;
            } 
        }
        else{
        ?>
            <div class="row mb-3 row-trip mt-10" data-trip="{{$count}}">
                <div class="col-md-12 mb-3">
                    <div class="alert alert-success trip"><span>Trip <span class="changeTrip"><?php echo $count ?></span></span>
                        @if($count>1)
                        <a href="" class="btn btn-danger float-right remove-trip" data-day='{{$thisday}}' data-trip='{{$count}}'>Hapus Perjalanan</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="">Waktu Mulai</label>
                    <input type="time" name="timestart[{{$thisday}}][]" class="form-control" value="">
                </div>
                <div class="col-md-2">
                    <label for="">Waktu Selesai</label>
                    <input type="time" class="form-control" name="timeend[{{$thisday}}][]" value="">
                </div>
                <div class="col-md-8">
                    <label for="">Destinasi/Tujuan</label>
                    <select name="destinations[{{$thisday}}][]" id="" class="form-control checkHotel"  data-day="{{$thisday}}" data-trip='{{$count}}'>
                        <option value="">---Pilih---</option>
                        @foreach($destination as $d)
                            <option value="{{$d->id_destination}}">{{$d->destination_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mt-3 append-hotel">
                </div>
                <div class="col-md-12 mt-2">
                    <label for="">Aktivitas</label>
                    <input type="text" class="form-control" name="activities[{{$thisday}}][]" value="">
                </div>
            </div>
        <?php } ?>