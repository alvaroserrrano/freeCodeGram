@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fmad3-8.fna.fbcdn.net/vp/ebffb885d31220c1cec80f15acb4480b/5D79BFC8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fmad3-8.fna.fbcdn.net"
                alt="" class="rounded-circle" height="182" width="182">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <a href="/p/profile/{{$user->id}}/edit">Edit profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong>posts</div>
                <div class="pr-5"><strong>150</strong>followers</div>
                <div class="pr-5"><strong>150</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class=" pt-4 w-100" alt="">
            </a>
        </div>
        @endforeach

    </div>
    @endsection