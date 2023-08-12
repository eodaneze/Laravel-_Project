<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
       $incoimgFields = $request->validate([
           'title' => 'required',
           'body' => 'required',
       ]);
       $incoimgFields['title'] = strip_tags($incoimgFields['title']);
       $incoimgFields['body'] = strip_tags($incoimgFields['body']);
       $incoimgFields['user_id'] = auth()->id();
       Post::create($incoimgFields);
       return redirect('/');
    }
}
