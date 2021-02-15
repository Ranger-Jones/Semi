<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schoolnews;
use App\User;
use Intervention\Image\Facades\Image;

class SchoolnewsController extends Controller
{
    public function index()
    {
        return view('schulnews.index');
    }

    public function create(){
        if(auth()->user() == null){
            return redirect('/login');
        }
        return view('schulnews.create');
    }

    public function show(Schoolnews $article){

        $images = $article->images;
        try {
            $images = preg_split('~;~', $images);
            
            //removes unimportant records
            $last = array_key_last($images);
            unset($images[$last]);
        } catch (Exception $e) {
            dd('FEHLERFEHLERFEHLER->Überprüfe User Attribute:subject\nFehler: ' . $e->getMessage());
        }

        if($images == []){
            $images[0] = '/default/symbol.jpg';
        }
        $firstimage = $images[0];

        $author = User::where('name', $article->author)->first();

        $lastarticles = Schoolnews::orderby('created_at', 'desc')->take(5)->get();
        
        return view('schulnews.show', compact('images', 'article', 'lastarticles', 'author', 'firstimage'));
    }

    public function store(Request $request){
        $data = request()->validate([
            'caption' => 'required', 'max:55000',
            'content' => 'required', 'max:55',
            'topic' => 'required',
            'filenames.*' => 'image','mimes:jpeg,png,jpg,gif,svg','max:16000'
        ]);

        $dataFile = [];
        $images = "";
        $firstimage = '';

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $file->store('news', 'public');
                $images = $images.$name.';';  
                if($firstimage == ''){
                    $image = Image::make(public_path("storage/{$name}"))->fit(1000, 1000);
                    $image->save();
                    $firstimage = $name;
                }
            }
        }
        

        $datadb = array(
            'title' => $data['caption'],
            'content' => $data['content'],
            'author' => auth()->user()->name,
            'topic' => $data['topic'],
            'images' => $images
        );


        Schoolnews::create($datadb);
        $article = Schoolnews::orderby('created_at', 'desc')->first();
            
        
        return redirect('/schulnews/'.$article->id);
    }
}
