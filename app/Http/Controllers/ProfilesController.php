<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Mark;
use App\Subject;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        $postsCount = Cache::remember(
            'count.posts.' . $user->id,
             now()->addSeconds(30), 
             function () use ($user) {
                return $user->posts->count();
            });
        $followersCount = Cache::remember(
            'count.followers.' . $user->id,
             now()->addSeconds(30), 
             function () use ($user) {
                return $user->profile->followers->count();
            });
        $followingsCount = Cache::remember(
            'count.followings.' . $user->id,
             now()->addSeconds(30), 
             function () use ($user) {
                return $user->following->count();
            });
        $notifications = Auth::user()->notifications()->orderBy('created_at', 'desc')->get();
        $marks = Auth::user()->marks()->latest()->take(5)->get();

        $u_subjects = Auth::user()->subject;
        
        try {
            $u_subjects = preg_split('~;~', $u_subjects);
            
            //removes unimportant records
            $last = array_key_last($u_subjects);
            unset($u_subjects[$last]);
        } catch (Exception $e) {
            dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
        }

        $subjects = Subject::select('name')
            ->whereIn('id', $u_subjects)
            ->get();

        //dd($subjects);

        return view('profiles.index', compact('marks', 'notifications', 'subjects', 'user', 'follows', 'postsCount', 'followersCount', 'followingsCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        
        $data = request()->validate([
            'title' => 'required',
            'description' => '',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => '/storage/' . $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }
}
