<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'Laravel 8 is Released!', 'posted_by' => 'Tania Rascia'],
            ['id' => 2, 'title' => 'The Road to Vue 3: Vite', 'posted_by' => 'Lachlan Miller'],
            ['id' => 3, 'title' => 'The Road to Vue 3: Vue Router', 'posted_by' => 'Lachlan Miller'],
            ['id' => 4, 'title' => 'The Road to Vue 3: Vue 3', 'posted_by' => 'Lachlan Miller'],
        ];

        return view('posts.index', ['posts' => $posts]);
    }
}
