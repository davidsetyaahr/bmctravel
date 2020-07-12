@foreach($loopNotif as $notif)
<a href="{{url('/admin/transaction/payment/detail/'.$notif->id_payment)}}" class="link border-top">
    <div class="d-flex no-block align-items-center p-10">
        <span class="btn btn-<?php echo $notif->status==11 ? 'primary' :"success" ?> btn-circle"><i class="ti-calendar"></i></span>
        <div class="m-l-10">
            <h5 class="m-b-0">Unggah <?php echo $notif->status==11 ? "50%" : "100%" ?> Pembayaran</h5>
            <span class="mail-desc">{{$notif->firstname}} {{$notif->lastname}}</span>
        </div>
    </div>
</a>
@endforeach
<a href="javascript:void(0)" class="link border-top">
    <div class="d-flex no-block align-items-center p-10">
        <div class="m-l-10 text-center">
            <span class="mail-desc">Cek Semua Pemberitahuan</span>
        </div>
    </div>
</a>
<?php 
        DB::table('notif_admin')->update(['view'=>'1']);
?>