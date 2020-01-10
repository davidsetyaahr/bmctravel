<div class="body-data">
<?php 
    $session = session()->all();
?>    
    <p class="bold text-center">Upload your identity card</p>
    <div class="attach">
        <div class="left <?php echo isset($session['booking'][$session['user']['id_user']]['step4']) ?  "uploaded" : "" ?>">
            <div class="upload-btn-wrapper">
                <form action="{{url('tour-package/booking/attach')}}" method="post" enctype="multipart/form-data" id="formUpload">
                @csrf
                    <button class="btn">
                        <div>
                            <img src="{{ url('public/images/common/image.png') }}" alt="">
                            <p>Choose file here</p>
                        </div>
                    </button>
                    <input type="file" name="attach" id="fileUpload">
                </form>
            </div>
        </div>
        <div class="right">
            <div id="image-holder">
                <?php 
                    if(isset($session['booking'][$session['user']['id_user']]['step4'])){
                        ?>
                        <img src="{{url('images/attach')}}/<?php echo $session['booking'][$session['user']['id_user']]['step4']['attach'] ?>" alt="">
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>