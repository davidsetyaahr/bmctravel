<form action="{{url("admin/tour-package/stepbystep")}}" method="post" >
@csrf
<?php 
    $session = session()->all();
    $step3 = !empty($session['stepbystep']['step3']) ? $session['stepbystep']['step3'] : "";
?>
<input type="hidden" name="step" value="3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#include">Package Include</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#exclude">Package Exclude</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#others">What Should I Pack?</a>
        </li>
    </ul>
    <div class="tab-content mt-3">
        <div class="tab-pane active bg-light p-10" id="include">
        @foreach($include as $in)
            <div class="bg-white p-10 mb-2">
                <div class="form-check custom-control custom-checkbox block">
                    <input type="checkbox" name="include[]" class="form-check-input custom-control-input" id="in{{$in->id_informations}}" value="{{$in->id_informations}}" <?php echo $step3!="" && in_array($in->id_informations,$step3['include']) ? "checked" : "" ?>>
                    <label class="custom-control-label" for="in{{$in->id_informations}}">
                        <span class="ls-1">{{$in->text}}</span>
                    </label>
                </div>
            </div>
            @endforeach
        </div>
        <div class="tab-pane bg-light p-10" id="exclude">
        @foreach($exclude as $ex)
            <div class="bg-white p-10 mb-2">
                <div class="form-check custom-control custom-checkbox block">
                    <input type="checkbox" name="exclude[]" class="form-check-input custom-control-input" id="{{$ex->id_informations}}" value="{{$ex->id_informations}}" <?php echo $step3!="" && in_array($ex->id_informations,$step3['exclude']) ? "checked" : "" ?>>
                    <label class="custom-control-label" for="{{$ex->id_informations}}">
                        <span class="ls-1">{{$ex->text}}</span>
                    </label>
                </div>
            </div>
            @endforeach
        </div>
        <div class="tab-pane bg-light p-10" id="others">
        @foreach($pack as $pck)
            <div class="bg-white p-10 mb-2">
                <div class="form-check custom-control custom-checkbox block">
                    <input type="checkbox" name="pack[]" class="form-check-input custom-control-input" id="{{$pck->id_informations}}" value="{{$pck->id_informations}}" <?php echo $step3!="" && in_array($pck->id_informations,$step3['pack']) ? "checked" : "" ?>>
                    <label class="custom-control-label" for="{{$pck->id_informations}}">
                        <span class="ls-1">{{$pck->text}}</span>
                    </label>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="float-right">
    <button class="btn btn-default" type="reset"><span class="mdi mdi-menu-left"></span> Prev</button>
    <button class="btn btn-primary" type="submit">Next <span class="mdi mdi-menu-right"></span></button>
  </div>
</form>