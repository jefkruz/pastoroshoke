<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index()
    {

        return view('master');
    }

    public function tributes()
    {
        $data['tributes'] = Post::latest()->get();
        return view('tributes', $data);
    }
    public function readTributes($id)
    {
        $post = Post::findOrFail($id);
        $data['post'] = $post;
        $data['previous']  = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();


         $data['next']  = Post::where('id', '>', $post->id)->orderBy('id')->first();
        return view('view_tributes', $data);
    }

    public function submitTribute(Request $request)
    {

        $messages = [
            'video.mimes' => 'The video must be a file of type: mp4.',
            'video.max' => 'The video must not be greater than 500MB.',
            'image.max' => 'The image must not be greater than 10MB.',
        ];

     $request->validate([
         'first_name' => 'required',
         'last_name' => 'required',
         'phone' => 'required',
         'city' => 'required',
         'state' => 'required',
         'country' => 'required',
         'tribute' => 'required',
         'video' => 'nullable|mimes:mp4|max:512000',  // Validate that the video is an MP4 and max 500MB
         'image' => 'nullable|image|max:10240', // Optional: Validate image with a max size of 10MB

     ],$messages);

        $videopath = null;
        $imagepath = null;
        if($request->hasFile('video')){
            $video = $request->file('video');
            $videopath = $video->store('videos', env('DEFAULT_DISK'));
        }

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagepath = $image->store('uploads', env('DEFAULT_DISK'));
        }

        $post = new Post();
        $post->first_name = $request->first_name;
        $post->last_name = $request->last_name;
        $post->phone = $request->phone;
        $post->city = $request->city;
        $post->state = $request->state;
        $post->country = $request->country;
        $post->tribute = $request->tribute;
        $post->video = $videopath ? asset($videopath) : null;
        $post->image = $imagepath ? asset($imagepath) : null;
        $post->save();
        return to_route('tributes')->with('message', 'Tribute sent successfully');
    }
}
