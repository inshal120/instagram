@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 p-5">
            <img src="https://bestprofilepictures.com/wp-content/uploads/2021/04/Cool-Profile-Picture-768x798.jpg" height="250px" alt="" class="rounded-circle">
        </div>
        <div class="col-md-9 p-5">
            {{-- <div></div> --}}
            <div><h1>Name here</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>123</strong> Posts</div>
                <div class="pr-5"><strong>50k</strong> Follwers</div>
                <div class="pr-5"><strong>200 </strong> Following</div>
            </div>
        </div>
    </div>
</div>
@endsection
