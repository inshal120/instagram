<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    
    public function create(){
        
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
                'another' => '',
                'caption' => 'required',
                'image' => 'required | image',
        ]);

        //$post = new \App\Models\Post;

        $imagepath = $request->image->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
                        'caption' => $data['caption'],
                        'image'   => $imagepath,
        ]);

        //\App\Models\Post::create($data);

       // $post->caption = $data['caption'];
       // $post->save;
        
        return redirect('/profile/'. auth()->user()->id);
    }
}
