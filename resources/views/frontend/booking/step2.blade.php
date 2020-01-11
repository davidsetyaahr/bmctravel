<div class="body-data">
    <div class="for-alert"></div>
    <?php 
        $session = session()->all();
    ?>
    <form action="{{url('tour-package/booking/stepbystep?page=2')}}" id="formStep2">
        <input type="hidden" name="id_tour" value="{{$id_tour}}" id="id_tour">
        <input type="hidden" name="start_date" id="start_date" value="<?php echo isset($session['booking'][$session['user']['id_user']]['step2']) ? $session['booking'][$session['user']['id_user']]['step2']['start_date'] : "" ?>">
    </form>
    <div class="table-responsive">
        <table class="table table-hover table-booking choose">
        <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th>Start Date</th>
                <th>Finish Date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for($i=1;$i<=20;$i++){
                    $dayStart = $i==1 ? 0 : $day*$i-$i-1;
                    $dateStart = date_create($start_date);
                    date_add($dateStart,date_interval_create_from_date_string("$dayStart days"));
                    $start = date_format($dateStart,"l, d F Y");
                    $dataStart = date_format($dateStart, "Y-m-d");

                    $dayEnd = $dayStart+$day-1;
                    $dateEnd = date_create($start_date);
                    date_add($dateEnd,date_interval_create_from_date_string("$dayEnd days"));
                    $end = date_format($dateEnd,"l, d F Y");
            ?>
            <tr data-start="{{$dataStart}}" class="<?php echo isset($session['booking'][$session['user']['id_user']]['step2']) && $session['booking'][$session['user']['id_user']]['step2']['start_date']==$dataStart ? "selected" : "" ?>">
                <td><span class="ion-ios-checkbox"></span></td>
                <td>{{$i}}</td>
                <td>{{$start}}</td>
                <td>{{$end}}</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>