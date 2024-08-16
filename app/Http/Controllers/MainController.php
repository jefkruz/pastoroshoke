<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index()
    {
        $data['tributes'] = Post::latest()->get();
        $data['images'] = Image::all();
        $data['videos'] = Video::all();
        return view('master',$data);
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

    public function uploadImages(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('uploads', env('DEFAULT_DISK'));
                Image::create([
                    'url' => $imagePath ? asset($imagePath) : null,
                ]);
            }
        }

        // Handle the image paths as needed (e.g., save to database)

        return back()->with('message', 'Images uploaded successfully!');
    }

    public function uploadVideo(Request $request)
    {
        // Validate the video input (max 500MB and only MP4 format allowed)
        $request->validate([
            'video' => 'required|mimes:mp4|max:512000', // max file size in KB (500MB)
        ]);

        // Check if a video is uploaded
        if ($request->hasFile('video')) {
            // Store the video
            $videoPath = $request->file('video')->store('videos', env('DEFAULT_DISK'));

            // Create a new record in the videos table (assuming you have a Video model)
            Video::create([
                'url' => $videoPath ? asset($videoPath) : null,
            ]);
        }

        return redirect()->back()->with('message', 'Video uploaded successfully!');
    }


    public function submitTribute(Request $request)
    {



     $request->validate([
         'first_name' => 'required',
         'last_name' => 'required',
         'phone' => 'required',
         'city' => 'required',
         'state' => 'required',
         'country' => 'required',
         'tribute' => 'required',
     ]);



        $post = new Post();
        $post->first_name = $request->first_name;
        $post->last_name = $request->last_name;
        $post->phone = $request->phone;
        $post->city = $request->city;
        $post->state = $request->state;
        $post->country = $request->country;
        $post->tribute = $request->tribute;
        $post->save();
        return to_route('tributes')->with('message', 'Tribute sent successfully');
    }
}
