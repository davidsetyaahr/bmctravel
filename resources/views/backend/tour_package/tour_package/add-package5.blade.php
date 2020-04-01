<form action="{{url("admin/tour-package/stepbystep")}}" method="post" >
@csrf
<input type="hidden" name="step" value="5">
<div class="form-group">
    <label for="meeting">Tempat Pertemuan :</label>
    <textarea class="form-control" name="meeting[]" id="meeting"></textarea>
  </div>
  <div class="form-group">
    <label for="">Harga</label>
    <input type="number" class="form-control" name="price[]">
  </div>
  <div class="form-group">
    <label for="Sale">Penjualan</label>
    <input type="number" class="form-control" name="sale[]">
  </div>
  <div class="float-right">
  <button class="btn btn-default" type="reset"><span class="mdi mdi-menu-left"></span> Sebelumnya</button>
    <button class="btn btn-primary" type="submit">Selesai <span class="mdi mdi-menu-right"></span></button>
  </div>
  </form>
