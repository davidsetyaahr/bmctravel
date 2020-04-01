<div class="body-data" data-url="{{url('tour-package/booking/stepbystep?page=3')}}">
<?php 
    $session = session()->all();
?>
    <div class="for-alert"></div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h6 class="bold text-center">Pax atau orang</h6>
            <div class="input-group mb-3 input-pax">
                <div class="input-group-prepend">
                    <button id="minus" class="btn btn-outline-primary plus-minus" onclick="kurang()" type="button">-</button>
                </div>
                <input id="nilai" type="text" class="form-control" value='<?php echo isset($session['booking'][$session['user']['id_user']]['step3']) ? $session['booking'][$session['user']['id_user']]['step3']['pax'] : 1 ?>' data-price="{{$price}}">
                <div class="input-group-prepend">
                    <button id="plus" class="btn btn-outline-primary tambah plus-minus" onclick="tambah()" type="button">+</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <span class="color-grey ls-1">
                <span id="pax">1</span> ornag untuk paket ini
            </span> 
        </div>
        <div class="col-md-8 text-right">
            <h5 class="bold"><span class='color-orange'>Total : </span> IDR <span id="total"></span></h5>
        </div>
    </div>
</div>
<script>
    function tambah() {
        var value = parseInt(document.getElementById('nilai').value);
        value = isNaN(value) ? 0 : value;
        value++
        document.getElementById('nilai').value = value;
    }
    function kurang() {
        var value = parseInt(document.getElementById('nilai').value);
        value = isNaN(value) ? 0 : value;
        value--
        document.getElementById('nilai').value = value;
        document.getElementById('pax').html = value;
    }


</script>
    