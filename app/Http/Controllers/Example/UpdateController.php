<?php

namespace App\Http\Controllers\Example;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(Request $request, $id) {

        $request->validate([
            "name"    => "required",
            "title"   => "required|max:20",
            "content" => "required",
        ]);

        $post = Post::where("id", $id)->firstOrFail();
        $post->name     = $request->input("name");
        $post->title    = $request->input("title");
        $post->content  = $request->input("content");
        $post->save();

        return redirect()->route("example.show", ["id" => $post->id])->with("message", "更新に成功しました！");
    } 
}
