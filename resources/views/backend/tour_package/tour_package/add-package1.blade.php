            @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single'])
                <form action="">
                    <label for="">Package Name</label>
                    <input type="text" class="form-control">
                    <br>
                    <label for="">Category</label>
                    <select name="" id="" class="form-control">
                        <option value="">---Option---</option>
                        @foreach($tour_categories as $tc)
                            <option value="{{ $tc->id_category }}">{{ $tc->category_name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="">Type</label>
                    <select name="" id="" class="form-control">
                        <option value="">---Option---</option>
                        @foreach($type as $type)
                            <option value="{{ $type->id_type }}">{{ $type->type_name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="">Durations</label>
                    <select name="" id="" class="form-control">
                        <option value="">---Option---</option>
                        @foreach($durations as $d)
                            <option value="{{ $d->id_duration }}">{{ $d->day }} Days {{ $d->night }} Nights</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="">Overview</label>
                    <textarea name="" class="form-control"></textarea>
                    <br>
                    <label for="">Banner/Gallery</label>
                    @include('backend.gallery.gallery-template.gallery-hidden')
                    <br>
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">Next <span class="mdi mdi-menu-right"></span></button>
                    </div>
                </form>
@include('backend.gallery.gallery-template.modal-gallery')
