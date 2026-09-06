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
            echo 'Usuário não pode atualizar este post!';
            return;
        }

        echo 'Usuário pode atualizar este post!';
    }

    public function deletePost(int $id)
    {
        $post = Post::find($id);

        if (!Auth::user()->can('delete', $post)) {
            echo 'Usuário não pode remover este post!';
            return;
        }

        echo 'Usuário pode remover este post!';
    }

    public function create()
    {
        if (Auth::user()->can('create', Post::class)) {
            echo 'Usuário pode criar um post!';
            return;
        }

        echo 'Usuário pode não criar um post!';
    }
}
