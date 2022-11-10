<?php

namespace App\Http\Controllers\Examplr;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index($id) {

        $request->validate([
            "name"    => "required",
            "title"   => "required|max:20",
            "content" => "required",
        ]);

        $post = Post::findOrFail($id);

        return view("example.edit", compact("post"));
    }
}
