@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 offset-2">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>Add New Post</h1>
        </div>
    </div>
    <form action="/p" enctype="multipart/form-data"  method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>               
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
                   @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption')}}</strong>
                        </span>
                    @enderror                
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label ">Post image</label>               
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required  autofocus>
                @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @enderror                
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2 pt-4">
                <button type="submit" class="btn btn-primary">Add New Post</button> 
        </div>
    </form>
</div>
@endsection
