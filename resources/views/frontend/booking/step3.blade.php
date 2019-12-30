<div class="body-data">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h6 class="bold text-center">Pax or person</h6>
            <div class="input-group mb-3 input-pax">
                <div class="input-group-prepend">
                    <button id="minus" class="btn btn-outline-primary" onclick="kurang()" type="button">-</button>
                </div>
                <input id="nilai" type="text" class="form-control" value='1'>
                <div class="input-group-prepend">
                    <button id="plus" class="btn btn-outline-primary tambah" onclick="tambah()" type="button">+</button>
                </div>
            </div>
<!--             <div class="price-pp">
                <div class="header">
                    PRICE
                </div>
                <div class="total">
                    IDR <span>5,000,000</span>
                </div>
            </div>
 -->
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <span class="color-grey ls-1">
                1 person for this package
            </span> 
        </div>
        <div class="col-md-8 text-right">
            <h5 class="bold"><span class='color-orange'>Total : </span> IDR 5,000,000</h5>
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
    }


</script>
    