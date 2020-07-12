                <input type="hidden" id="id_gallery" name="id_gallery" value="<?php echo isset($id_gallery) ? $id_gallery : '' ?>">
                <div class="selected-gallery">
                    <div class="row row-gallery">
                    <?php 
                        if(isset($id_gallery) && $id_gallery!=''){
                            $getImg = DB::table('gallery')->where("id_gallery",$id_gallery)->get();
                    ?>
                    <div class="col-md-2 mb-3 col-gallery" data-id="{{$id_gallery}}">
                        <div class="img blue-overlay">
                            <img src="{{url('/images/gallery/'.$getImg[0]->img)}}" class="img-fluid" alt="">
                            <div class="overlay"></div>
                            <div class="option">
                                <span class="zoom" data-src="{{url('/images/gallery/'.$getImg[0]->img)}}">Buka</span> 
                                <span class="remove" data-id="{{$id_gallery}}">X Hapus</span>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
