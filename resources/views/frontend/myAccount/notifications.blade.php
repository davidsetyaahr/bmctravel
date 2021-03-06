@extends('frontend/myAccount/my-account')
@section('menu-account')
<div class="notifications">
    @foreach($notif as $notif)
    <?php 
    if($notif->status=="11"){
        $status = "50% has failed, check your uploaded file";
        $class = "failed";
    }
    else if($notif->status=='1'){
        $status = "50% was successfull";
        $class = "success";
    }
    else if($notif->status=='22'){
        $status = "100% has failed, check your uploaded file";
        $class = "failed";
    }
    else if($notif->status=='222'){
        $status = "Pelunasan has failed, check your uploaded file";
        $class = "failed";
    }
    else if($notif->status=='2'){
        $status = "was successfull (Paid off)";
        $class = "success";
    }
?>
<div class="<?php echo $class ?>">
    Unggah file untuk Pembayaran {{$notif->tour_name}} {{$status}}
    <p><?php echo date("d F Y, H:i", strtotime($notif->datetime)) ?></p>
</div>
@endforeach
</div>
@endsection