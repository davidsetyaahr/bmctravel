@extends('frontend/myAccount/my-account')
@section('menu-account')
<?php
    $arr = array("Poor","Average","Satisying","Very Good","Fantastic");
?>
@foreach($review as $r)
<div class="row justify-content-center">
    <div class="col-md-11 reviews-row mt-0">
        <div class="review-content">
            <div class="top">
            <div class="avatar">
                <span class="flaticon flaticon-coffee-cup"></span>
            </div>
            <div class="desc">
                <div class="name">
                    {{$r->tour_name}}
                    <?php
                        $text = $arr[$r->rate-1]."!";
                    ?>
                </div>
                <div class="datetime">
                    {{date("d M Y, H:i", strtotime($r->datetime))}}
                </div>
            </div>
            <div class="score">
                Rated <span class="score-blue"> {{$r->rate}}.0 </span>/ 5.
                {{$text}}
            </div>
            </div>
            <div class="bottom">
                {{$r->comment}}
            </div>
        </div>

    </div>
</div>
<br>
@endforeach
@endsection
