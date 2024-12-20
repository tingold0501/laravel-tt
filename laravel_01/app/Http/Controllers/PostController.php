<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('Contractor/Pages/Home', [
            'posts' => Post::get(),
        ]);
    }
}
