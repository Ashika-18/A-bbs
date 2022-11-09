<?php

namespace App\Http\Controllers\Example;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request) {
        $post = new Post();
        $post->name     = $request->input("name");
        $post->title    = $request->input("title");
        $post->content  = $request->input("content");
        $post->save();

        return redirect()->route("example.show", ["id" => $post->id])->with("message", "登録しました！");
    }
}
