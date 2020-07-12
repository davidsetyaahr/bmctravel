<br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Label</label>
                                <select name="nominal[]" class="form-control calc" data-type="select" data-id="{{$id}}" data-target="#amount{{$id}}" id="label{{$id}}">
                                    <option value="">---Pilih---</option>
                                @foreach($calculation as $cal)
                                    <option value="{{ $cal->nominal }}" data-label="{{$cal->label}}">{{ $cal->label}} - {{number_format($cal->nominal,0,',','.')}}</option>
                                @endforeach
                                </select>
                                <input type="hidden" id="hidden{{$id}}" name="label[]">
                            </div>
                            <div class="col-md-1">
                                <label for="">Jumlah</label>
                                <input type="number" data-id="{{$id}}" data-type="input" id="amount{{$id}}" class="form-control calc" name="amount[]" value="1" data-target="#label{{$id}}">
                            </div>
                            <div class="col-md-3">
                                <label for="">Subtotal</label>
                                <input type="number" name="subtotal[]" id="subtotal{{$id}}" class="form-control subtotal" value="0" readonly>
                            </div>
                            <div class="col-md-2">
                                <label for="">Pilihan</label>
                                <br>
                                <a href="" class="btn btn-danger remove-calc">Hapus</a>
                            </div>
                        </div>
