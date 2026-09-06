@extends('layouts.main_layout')
@section('content')

    @can('create', App\Models\Post::class)
        <div class="container my-3">
            <div class="row">
                <div class="col">
                    <a href="{{ route('post.create') }}" class="btn btn-primary">
                        Criar post
                    </a>
                </div>
            </div>
        </div>
    @endcan

    @if (empty($posts))
        <div class="my-5 opacity-50">
            Nenhum post encontrado.
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($posts as $post)
                        @can('view', $post)
                            <x-post :post="$post" />
                        @endcan
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endsection
