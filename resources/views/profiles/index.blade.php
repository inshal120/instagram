@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 p-5">
            <img src="https://bestprofilepictures.com/wp-content/uploads/2021/04/Cool-Profile-Picture-768x798.jpg" height="180px" alt="" class="rounded-circle">
        </div>
        <div class="col-md-9 p-5">
            {{-- <div></div> --}}
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username; }}</h1>
                <a href="/p/create">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count();}}</strong> Posts</div>
                <div class="pr-5"><strong>50k</strong> Follwers</div>
                <div class="pr-5"><strong>200 </strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title; }}</div>
            <div>{{ $user->profile->description; }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>
   
        <div class="row">
            @foreach($user->posts as $post)
                <div class="col-md-4 pt-4 pb-4">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                </div>
            @endforeach
        </div>
    
</div>
@endsection
