<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show_post()
    {
        $posts = Post::paginate(8);
        return view('dashboard' , ['posts' => $posts]);
    }
}
