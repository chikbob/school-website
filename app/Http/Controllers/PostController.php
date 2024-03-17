<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return Inertia::render('news', [
            'post' => Post::all()
        ]);
    }
}
