<?php

namespace App\Http\Controllers\Example;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request) {

        $request->validate([
            'name'    => 'required',
            "title"   => "required|max:20",
            "content" => "required",
        ], [
            'name.required'    => '名前は必須です！',
            "title.required"   => "タイトルは必須です！",
            "title.max"        => "タイトルは20文字で入力して下さい!",
            "content.required" => "コンテンツは必須です！",
        ]);

        $post = new Post();
        $post->name     = $request->input("name");
        $post->title    = $request->input("title");
        $post->content  = $request->input("content");
        $post->save();

        return redirect()->route("example.show", ["id" => $post->id])->with("message", "登録しました！");
    }
}
