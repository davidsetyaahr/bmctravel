                    <div class="gallery hide-gallery" data-type="<?php echo $type ?>">
                        <img src="{{ asset('/public/images/common/open-gallery.png')}}" class="open-gallery">
                    <div class="gallery-body custom-scroll">
                        <a href="" class="close-gallery">
                            <span class="mdi mdi-close float-right"></span>
                        </a>
                        <div class="title">Select Image</div>
                        <hr>
                        <div class="gallery-categories custom-scroll mt-3 mb-3">
                            @foreach($categories as $c)
                                <a href="" class="category-gallery" data-url="{{ url('admin/gallery/bycategory') }}" data-id="{{ $c->id_category }}">{{ $c->category_name }}</a>
                            @endforeach
                        </div>
                        <div class="grid-container">
                            @foreach($gallery as $data)
                            <div class="grid" data-id="{{ $data->id_gallery }}">
                                <div class="blue-overlay <?php echo isset($id_gallery) && $id_gallery==$data->id_gallery ? 'active' : '' ?>">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('/images/gallery').'/'.$data->img }}">
                                    <span class="mdi mdi-check-circle-outline mdi-36px"></span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
