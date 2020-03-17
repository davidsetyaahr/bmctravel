<div class="bg-compare">
    <span class="ion-ios-close close-compare"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-center color-white bg-orange bold">
                        Compare Package
                    </div>
                    <div class="row p-4">
                        @foreach($packages as $key => $p)
                            <div class="col-md-6">
                                <div class="row">
                                <?php 
                                    if($key==0){
                                        $anotherId = $packages[1]->id_tour;
                                        $anotherKey = 1;
                                        ?>
                                    <div class="col-md-8 text-right">
                                        <h5 class="bold">{{$p->tour_name}}</h5>
                                        <p class="bold color-orange ls-1">{{$p->category_name}}</p>
                                    </div>
                                    <div class="col-md-4">
    							        <img src="{{url('images/gallery/'.$p->img)}}" alt="" class="img-fluid transition rounded">
                                    </div>
                                <?php } else{ 
                                        $anotherId = $packages[0]->id_tour;
                                        $anotherKey = 0;
                                    ?>
                                    <div class="col-md-4">
    							        <img src="{{url('images/gallery/'.$p->img)}}" alt="" class="img-fluid transition rounded">
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="bold">{{$p->tour_name}}</h5>
                                        <p class="bold color-orange ls-1">{{$p->category_name}}</p>
                                    </div>

                                <?php } ?>
                                </div>
                                <hr>
                                <?php 
                                if($packages[$key]->day > $packages[$anotherKey]->day){
                                    $dayBtn = "primary";
                                }
                                else if($packages[$key]->day == $packages[$anotherKey]->day){
                                    $dayBtn = "primary";
                                }
                                else{
                                    $dayBtn = "";
                                }

                                if($packages[$key]->night > $packages[$anotherKey]->night){
                                    $nightBtn = "primary";
                                }
                                else if($packages[$key]->night == $packages[$anotherKey]->night){
                                    $nightBtn = "primary";
                                }
                                else{
                                    $nightBtn = "";
                                }
                                $dest = DB::table('itinerary as i')
                                ->join('detail_itinerary as di','i.id_itinerary','di.id_itinerary')
                                ->join('destinations as d','di.id_destination','d.id_destination')
                                ->select('di.id_destination')
                                ->where('i.id_tour', $p->id_tour)
                                ->where('di.id_destination','<>','1')
                                ->where('di.id_destination','<>','2')
                                ->where('di.id_destination','<>','3')
                                ->get()->toArray();

                                $getDest = DB::table('itinerary as i')
                                ->join('detail_itinerary as di','i.id_itinerary','di.id_itinerary')
                                ->join('destinations as d','di.id_destination','d.id_destination')
                                ->select('di.id_destination')
                                ->where('di.id_destination','<>','1')
                                ->where('di.id_destination','<>','2')
                                ->where('di.id_destination','<>','3')
                                ->where('i.id_tour', $p->id_tour)
                                ->orWhere('i.id_tour', $anotherId)
                                ->where('di.id_destination','<>','1')
                                ->where('di.id_destination','<>','2')
                                ->where('di.id_destination','<>','3')
                                ->get()->toArray();

                                $newDest = array();
                                foreach ($getDest as $i => $val) {
                                    if($i<=(count($dest))-1){
                                        $newDest['a'][] = $val->id_destination;
                                    }
                                    else{
                                        $newDest['b'][] = $val->id_destination;
                                    }
                                }

                                if($packages[$key]->night > $packages[$anotherKey]->night){
                                    $nightBtn = "primary";
                                }
                                else if($packages[$key]->night == $packages[$anotherKey]->night){
                                    $nightBtn = "primary";
                                }
                                else{
                                    $nightBtn = "";
                                }
                                

                                if(count($newDest['a']) > count($newDest['b'])){
                                    $destBtn = "primary";
                                }
                                else if(count($newDest['a']) == count($newDest['b'])){
                                    $destBtn = "primary";
                                }
                                else{
                                    $destBtn = "";
                                }

                                $average = DB::table('review')
                                ->where("status",'1')
                                ->where("id_tour",$p->id_tour)
                                ->avg('rate');

                                $average2 = DB::table('review')
                                ->where("status",'1')
                                ->where("id_tour",$anotherId)
                                ->avg('rate');

                                if($average > $average2){
                                    $rateBtn = "primary";
                                }
                                else if($average == $average2){
                                    $rateBtn = "primary";
                                }
                                else{
                                    $rateBtn = "";
                                }


                                    if($key==0){
                                        ?>
                                <div class="compare-info text-right">
                                    <div>
                                        <span>
                                            Number of day
                                        </span>
                                        <button class="btn btn-{{$dayBtn}}">{{$p->day}}</button>
                                    </div>
                                    <div>
                                        <span>
                                            Number of night
                                        </span>
                                        <button class="btn btn-{{$nightBtn}}">{{$p->night}}</button>
                                    </div>
                                    <div>
                                        <span>
                                            Number of destinations
                                        </span>
                                        <button class="btn btn-{{$destBtn}}">{{count($dest)}}</button>
                                    </div>
                                    <div>
                                        <span>
                                            Review from users
                                        </span>
                                        <button class="btn btn-{{$rateBtn}}">{{ceil($average)}}</button>
                                    </div>
                                </div>
                                <?php } else{?>
                                <div class="compare-info">
                                    <div>
                                        <button class="btn btn-{{$dayBtn}}">{{$p->day}}</button>
                                        <span>
                                            Number of day
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn btn-{{$dayBtn}}">{{$p->night}}</button>
                                        <span>
                                            Number of night
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn btn-{{$destBtn}}">{{count($dest)}}</button>
                                        <span>
                                            Number of destinations
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn btn-{{$rateBtn}}">{{ceil($average)}}</button>
                                        <span>
                                            Review from users
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>
                                <hr>
                                <h5 class="bold color-orange text-center ls-1">IDR {{number_format($p->price,0,',','.')}} / Pax</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>