            <div class="gallery hide-gallery" data-type="<?php echo $type ?>">
                    <div class="gallery-body">
                        <img src="{{ asset('/images/common/open-gallery.png')}}" class="open-gallery">
                        <a href="" class="close-gallery">
                            <span class="mdi mdi-close float-right"></span>
                        </a>
                        <div class="title">Select Image</div>
                        <hr>
                        <div class="gallery-categories mt-3 mb-3">
                            @foreach($categories as $c)
                                <a href="" data-id="{{ $c->id_category }}">{{ $c->category_name }}</a>
                            @endforeach
                        </div>
                        <div class="grid-container">
                            @foreach($gallery as $data)
                            <div class="grid" data-id="{{ $data->id_gallery }}">
                                <div class="blue-overlay">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('/public/images/gallery').'/'.$data->img }}">
                                    <span class="mdi mdi-check-circle-outline mdi-36px"></span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
