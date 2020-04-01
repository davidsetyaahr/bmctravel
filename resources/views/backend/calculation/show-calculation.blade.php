<style>
body{
    font-family : "Century Gothic";
    color : #212529;
}
thead{
    font-weight : bold;
}
img{
    width : 50px;
}
p{
    font-weight : bold;
}
</style>
<br>
<center>

    <img src="{{ url('public/direngine/images/BMC-Logo.png') }}" alt="">
    <p>Baratha Travel Service</p>
</center>

<br>
<table class="table " width="90%" style="margin:auto">
    <tr>
        <td>
            <b>Paket</b>
        </td>
        <td>:</td>
        <td>{{ $book->tour_name}}</td>
        <td>
            <b>Pengguna</b>
        </td>
        <td>:</td>
        <td>{{ $book->email}}</td>
    </tr>
    <tr>
        <td>
            <b>Tanggal Pemesanan</b>
        </td>
        <td>:</td>
        <td>{{ date("l, d F Y", strtotime($book->booking_date))}}</td>
        <td>
            <b>Pax</b>
        </td>
        <td>:</td>
        <td>{{$book->pax}}</td>
    </tr>
    <tr>
    <td>
            <b>Mulai Travel</b>
        </td>
        <td>:</td>
        <td>{{ date("l, d F Y",strtotime($book->travel_date))}}</td>
        <td>
        <b>Travel Berakhir</b>
        </td>
        <td>:</td>
        <?php 
            $plus = $book->day-1;
        ?>
        <td>{{ date("l, d F Y",strtotime($book->travel_date." +$plus day"))}}</td>
    </tr>
    <tr>
    <td>
            <b>Durasi</b>
        </td>
        <td>:</td>
        <td>{{ $book->day}} Hari {{$book->night}} Malam</td>
    <td>
            <b>Total</b>
        </td>
        <td>:</td>
        <td>{{ number_format($book->price,0,',','.')}}</td>
    </tr>
</table>
<br>
<table width="90%" border="1" style="margin:auto">
    <thead>
        <tr bgcolor="#ddd">
            <td>#</td>
            <td>Label</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Subtotal</td>
        </tr>
    </thead>
    <tbody>

        <?php 
            $no = 0;
            $total = 0;
            foreach ($post['nominal'] as $key => $value) {
                $total = $total + $post['subtotal'][$key];
                $no++;
        ?>
            <tr>
                <td>{{$no}}</td>                
                <td>{{$post['label'][$key]}}</td>                
                <td>{{number_format($post['nominal'][$key],0,',','.')}}</td>                
                <td>{{$post['amount'][$key]}}</td>                
                <td>{{number_format($post['subtotal'][$key],0,',','.')}}</td>                
            </tr>
        <?php
            }
            $profit = $book->price-$total;
            $percent = $profit/$book->price*100;
        ?>
        <tr>
            <td colspan="4">Total Kalkulasi</td>
            <td>{{number_format($total,0,',','.')}}</td>
        </tr>
        <tr>
            <td colspan="4">Keuntungan {{(int)$percent}}%</td>
            <td>{{number_format($profit,0,',','.')}}</td>
        </tr>
    </tbody>
</table>

<script>
    window.print()
</script>