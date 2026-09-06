<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('user')->get();

        return view('home', compact('posts'));
    }

    public function editPost(int $id)
    {
        $post = Post::find($id);

        if (!Auth::user()->can('update', $post)) {
            // return redirect()->back();
            echo 'Usuário não pode atualizar este post!';
        }

        echo 'Usuário pode atualizar este post!';
    }

    public function deletePost(int $id)
    {
        $post = Post::find($id);

        if (!Auth::user()->can('delete', $post)) {
            // return redirect()->back();
            echo 'Usuário não pode remover este post!';
        }

        echo 'Usuário pode remover este post!';
    }
}
