<?php

namespace App\Http\Controllers\Example;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index($id) {
        $post = Post::findOrFail($id);

        return view("example.edit", compact("post"));
    }
}
