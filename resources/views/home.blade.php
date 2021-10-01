@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 p-5">
            <img src="https://bestprofilepictures.com/wp-content/uploads/2021/04/Cool-Profile-Picture-768x798.jpg" height="180px" alt="" class="rounded-circle">
        </div>
        <div class="col-md-9 p-5">
            {{-- <div></div> --}}
            <div><h1>{{ $user->username; }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>123</strong> Posts</div>
                <div class="pr-5"><strong>50k</strong> Follwers</div>
                <div class="pr-5"><strong>200 </strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title; }}</div>
            <div>{{ $user->profile->description; }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 pt-4">
            <img src="img\img1.png" alt="" class="w-100">
        </div>
        <div class="col-md-4 pt-4">
            <img src="img\img1.png" alt="" class="w-100">
        </div>
        <div class="col-md-4 pt-4">
            <img src="img\img1.png" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
