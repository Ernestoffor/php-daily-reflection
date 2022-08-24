<?php

namespace App\Http\Controllers;
// require 'vendor/autoload.php';
use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;
use Image;
use Intervention\Image\Exception\NotReadableException;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(){
        return view('posts.create');
        
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        
        //$image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);

        //$image->save();

        auth()->user()->posts()->create([
            'title' => $data['title'],
            'description' => $data['description'],
             'image' => $imagePath,
            //'image' => $image,
        ]);

        // dd(request()->all());

        return redirect("/home");
    }
}
