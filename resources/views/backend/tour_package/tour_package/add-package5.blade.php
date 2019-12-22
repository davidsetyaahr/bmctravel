<form action="{{url("admin/tour-package/stepbystep")}}" method="post" >
@csrf
<input type="hidden" name="step" value="5">
<div class="form-group">
    <label for="meeting">Meeting Points:</label>
    <textarea class="form-control" name="meeting[]" id="meeting"></textarea>
  </div>
  <div class="form-group">
    <label for="">Price</label>
    <input type="number" class="form-control" name="price[]">
  </div>
  <div class="form-group">
    <label for="Sale">Sale</label>
    <input type="number" class="form-control" name="sale[]">
  </div>
  <div class="float-right">
  <button class="btn btn-default" type="reset"><span class="mdi mdi-menu-left"></span> Prev</button>
    <button class="btn btn-primary" type="submit">Finish <span class="mdi mdi-menu-right"></span></button>
  </div>
  </form>
