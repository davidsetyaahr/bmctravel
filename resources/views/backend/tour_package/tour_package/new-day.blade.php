        <?php 
            $count = isset($_GET['trip']) ? $_GET['trip'] : 1;
            $thisday = isset($day) ? $day : $_GET['day'];
        ?>
        <div class="card custom day" data-day="{{$thisday}}" data-count="<?php echo $session!="" ? count($session['timestart'][$thisday]) : 1 ?>">
            <h5 class="card-header ls-1">Day  {{$thisday}}</h5>
            <div class="p-20 bg-light">
                <label for="">Overview</label>
                <input type="text" class="form-control" name="overview[]" value="<?php echo $session!="" ? $session['overview'][$thisday-1] : "" ?>">
            </div>
            <hr class="mt-0">
            <div class="card-body">
                <div class="append-trip">
                    <?php 
                        if($session!=""){
                            $sessionTrip = $session;
                            unset($sessionTrip['overview']);
                        }
                        else{
                            $sessionTrip = "";
                        }
                    ?>
                    @include('backend.tour_package.tour_package.new-trip', ['destination' => $destination, 'thisday' => $thisday, 'count' => $count,'session' => $sessionTrip])
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12">
                        <a href="" class="btn btn-primary new-trip" data-day="{{$thisday}}">Add New Trip</a>
                    </div>
                </div>
            </div>
        </div>

            