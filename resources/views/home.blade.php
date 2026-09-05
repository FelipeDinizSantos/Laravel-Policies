@extends('layouts.main_layout')
@section('content')

    @if (empty($posts))
        <div class="my-5 opacity-50">
            Nenhum post encontrado.
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endsection
