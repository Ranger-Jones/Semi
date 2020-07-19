<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Post;
use Validator;


class PollController extends Controller
{
    

    public function index($code)
    {
        $post = Post::where('code', $code)->first();
        
        return view('poll.index', compact('post'));
    }

    public function insert(Request $request, $code)
    {
    
     if($request->ajax())
     {
      $rules = array(
       'text.*'  => 'required',
       'postcaption' => ''
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $text = $request->text;

      $postcaption = $request->postcaption;
      $post = Post::where('code', $code)->select('code')->get();

      $length = 30;
      for($count = 0; $count < count($text); $count++)
      {
       $data = array(
        'code' => $code,
        'text'  => $text[$count]
       );
       $insert_data[] = $data; 
      }

      Poll::insert($insert_data);
      return response()->json([
       'success'  => 'Umfrage wurde zu ihrem Post erfolgreich hinzugefügt',
       'test' => $postcaption
      ]);
     }
    }

    
}
