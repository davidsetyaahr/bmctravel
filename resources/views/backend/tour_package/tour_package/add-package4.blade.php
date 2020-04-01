<form action="{{url("admin/tour-package/stepbystep")}}" method="post" >
@csrf
<?php
    $session = session()->all();
    $step4 = !empty($session['stepbystep']['step4']) ? $session['stepbystep']['step4'] : "";
?>
<input type="hidden" name="step" value="4">
<div class="form-group">
    <label for="meeting">Tempat Pertemuan :</label>
    <textarea class="form-control" name="meeting" id="meeting"><?php echo $step4!="" ? $step4['meeting'] : ""; ?></textarea>
  </div>
  <div class="form-group">
    <label for="">Harga per Orang</label>
    <input type="number" class="form-control" name="price" value="<?php echo $step4!="" ? $step4['price'] : "" ?>">
  </div>
  <div class="form-group">
    <label for="Sale">Penjualan</label>
    <div class="input-group mb-3">
        <input type="number" class="form-control" name="sale" value="<?php echo $step4!="" ? $step4['sale'] : "" ?>">
        <div class="input-group-append">
        <span class="input-group-text">%</span>
        </div>
    </div>
  </div>
  <div class="float-right">
  <button class="btn btn-default" type="reset"><span class="mdi mdi-menu-left"></span> Sebelumnya</button>
    <button class="btn btn-primary" type="submit">Selesai <span class="mdi mdi-menu-right"></span></button>
  </div>
  </form>
