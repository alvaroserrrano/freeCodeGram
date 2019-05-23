@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fmad3-8.fna.fbcdn.net/vp/ebffb885d31220c1cec80f15acb4480b/5D79BFC8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fmad3-8.fna.fbcdn.net"
                alt="" class="rounded-circle" height="182" width="182">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>150</strong>posts</div>
                <div class="pr-5"><strong>150</strong>followers</div>
                <div class="pr-5"><strong>150</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4"><img
                src="https://scontent-mad1-1.cdninstagram.com/vp/c2f54458575fcbb88962c5b1770fb801/5D97E4D8/t51.2885-15/e35/59940621_2476471699031065_8450367174777319180_n.jpg?_nc_ht=scontent-mad1-1.cdninstagram.com"
                class=" pt-4 w-100" alt=""></div>
        <div class="col-4"><img
                src="https://scontent-mad1-1.cdninstagram.com/vp/8d753477e884ffb6b2c74ed2d3fab138/5D9B926F/t51.2885-15/e35/59781813_2308953272503125_6520484961724886162_n.jpg?_nc_ht=scontent-mad1-1.cdninstagram.com"
                class=" pt-4 w-100" alt=""></div>

        <div class="col-4"><img
                src="https://scontent-mad1-1.cdninstagram.com/vp/ec1d4258b8e712e178c71019a7464797/5D7AA481/t51.2885-15/e35/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=scontent-mad1-1.cdninstagram.com"
                class=" pt-4 w-100" alt=""></div>
    </div>
</div>
@endsection