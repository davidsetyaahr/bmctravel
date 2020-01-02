            <?php 
            $session = session()->all();
            if(isset($session['stepbystep']['step1'])){
                $value = $session['stepbystep']['step1'];
            }
            else{
                $value = array(
                    'tour_name' => '',
                    'id_category' => '',
                    'id_type' => '',
                    'id_duration' => '',
                    'overview' => '',
                    'id_gallery' => '',
                );
            }
            ?>
            @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single', 'id_gallery' => $value['id_gallery']])
        <form action="{{url("admin/tour-package/stepbystep")}}" method="post">
                @csrf
                    <input type="hidden" name="step" value="1">
                    <label for="">Package Name</label>
                    <input type="text" class="form-control" name="tour_name" value="{{$value['tour_name']}}">
                    <br>
                    <label for="">Category</label>
                    <select name="id_category" id="" class="form-control">
                        <option value="">---Option---</option>
                        @foreach($tour_categories as $tc)
                            <option value="{{ $tc->id_category }}" <?php echo $tc->id_category==$value['id_category'] ? 'selected' : '' ?>>{{ $tc->category_name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="">Type</label>
                    <select name="id_type" id="" class="form-control">
                        <option value="">---Option---</option>
                        @foreach($type as $type)
                            <option value="{{ $type->id_type }}" <?php echo $type->id_type==$value['id_type'] ? 'selected' : '' ?>>{{ $type->type_name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="">Durations</label>
                    <select name="id_duration" id="" class="form-control">
                        <option value="">---Option---</option>
                        @foreach($durations as $d)
                            <option value="{{ $d->id_duration }}" <?php echo $d->id_duration==$value['id_duration'] ? 'selected' : '' ?>>{{ $d->day }} Days {{ $d->night }} Nights</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="">Overview</label>
                    <textarea name="overview" class="form-control">{{$value['overview']}}</textarea>
                    <br>
                    <label for="">Banner/Gallery</label>
                    @include('backend.gallery.gallery-template.gallery-hidden', ['id_gallery' => $value['id_gallery']])
                    <br>
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">Next <span class="mdi mdi-menu-right"></span></button>
                    </div>
                </form>
@include('backend.gallery.gallery-template.modal-gallery')
