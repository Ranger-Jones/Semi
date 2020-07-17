<?php

namespace App\Http\Controllers;

use App\Post;
use Validator;
use App\Poll;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'caption' => ['required', 'max:55'],
            'description' => ['max:55000'],
            'topic' => [''],
            'addresses' => [''],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:16000']
        ]);

        $validator = Validator::make($request->all(), [
            'pollitem.*' => 'max:100'
        ]);

        dd($validator);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(storage_path("app/public/" . $imagePath))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }

}
