<form action="{{url("admin/tour-package/stepbystep")}}" method="post" >
@csrf
    <input type="hidden" name="step" value="2">
    <input type="hidden" id="url" value="{{url('admin/tour-package/newtrip')}}">
    <?php 
        $step1 = session()->all()['stepbystep']['step1'];
        $getDuration = DB::table('tour_durations')->select('day')->where('id_duration',$step1['id_duration'])->get();

        for ($i=1; $i <= $getDuration[0]->day ; $i++) { 
    ?>
        @include('backend.tour_package.tour_package.new-day', ['destination' => $destination, 'day' => $i])
    <?php
        }
    ?>
    
    <a href="?page=1" class="btn btn-secondary"><span class="mdi mdi-menu-left"></span> Prev</a>
    <div class="float-right">
        <button class="btn btn-default" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
        <button class="btn btn-primary" type="submit">Next <span class="mdi mdi-menu-right"></span></button>
    </div>
</form>
