<?php

namespace App\Http\Controllers;

//import Model"Admin"
use App\Models\Post;

//return type view
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

//return type redirectRespon
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        // Mengambil data admin dengan paginate
        $posts = Post::latest()->paginate(5);

        // Merender view dengan data admins
        return view('posts.user.index', compact('posts'));
    }
}