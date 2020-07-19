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
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(25);
        $postcode = [];
        foreach ($posts as $post) {
            $postcode[$post['id']] = $post['code'];
        }
        $polls = Poll::whereIn('code', $postcode)->get();
        $try = [];
        $id = 0;
        foreach ($polls as $poll) {
            
            $try[$id] = [
                "text" => $poll['text'],
                'description' => $poll['description'],
                'code' => $poll['code']
            ]; 
            $id++;
        }
        
        //dd($try);

        return view('posts.index', compact('posts', 'polls'));
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
            'poll' => [''],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:16000']
        ]);

        if(!array_key_exists('poll', $data)){
            $data['poll'] = 'unavailable';
        }

        $length = 30;
        $data['code'] = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(storage_path("app/public/" . $imagePath))->fit(1200, 1200);
        $image->save();

        

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'description' => $data['description'],
            'topic' => $data['topic'],
            'addressees' => $data['addresses'],
            'poll' => $data['poll'],
            'code' => $data['code'],
            'image' => $imagePath
        ]);

        if($data['poll'] == 'availabe'){
            return redirect('/poll/' . $data['code']);
        }
        else{
            return redirect('/profile/' . auth()->user()->id);

        }

    }

    public function show(\App\Post $post)
    {
        $postcode = $post['code'];
        $polls = Poll::where('code', $postcode)->get();
        return view('posts.show', compact('post', 'polls'));
    }

    


}
