<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Post;


class HomeController extends Controller
{
    public function index(): View
    {
        $posts = Post::limit(2)->get();
        return view('home.index', compact('posts'));
    }
}
