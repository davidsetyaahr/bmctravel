<?php 
    $thisDay = isset($_GET['day']) ? $_GET['day'] : $day;
    $thisTrip = isset($_GET['trip']) ? $_GET['trip'] : $trip;
    
    if(isset($room)){
        $dataRoom = DB::table('room_hotels')->select('id_hotel')->where('id_room_hotel',$room)->get();
        $roomHotel = DB::table('room_hotels')->where('id_hotel', $dataRoom[0]->id_hotel)->get();
    }
    else{
        $dataRoom = "";
    }
?>
                <div class="row changeRoom ">
                    <div class="col-md-6">
                        <label for="">Hotel</label>
                        <select name="" class="form-control changeHotel" data-target="#roomHotel{{$thisDay}}{{$thisTrip}}">
                            <option value="">---Option---</option>
                            @foreach ($hotel as $item)
                                <option value="{{$item->id_hotel}}" <?= $dataRoom!="" && $dataRoom[0]->id_hotel==$item->id_hotel ? "selected" : "" ?>>{{$item->hotel_name}}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <label for="">Room Hotel</label>
                        <select name="room_hotel[{{$thisDay}}][{{$thisTrip}}]" id="roomHotel{{$thisDay}}{{$thisTrip}}" class="form-control">
                            <option value="">---Option---</option>
                            <?php 
                                if($dataRoom!="")
                                {
                            ?>
                                @foreach($roomHotel as $r)
                                <option value="{{$r->id_room_hotel}}" <?= $room==$r->id_room_hotel ? "selected" : "" ?>>{{$r->room_name}}</option>
                                @endforeach
                            <?php
                                }
                            ?>
                        </select>
                        <br>
                    </div>
                </div>
