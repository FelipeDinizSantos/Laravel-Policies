@extends('layouts.main_layout')

@section('content')
    <div class="d-flex justify-content-center gap-5 mt-5">
        <a href="{{ route('user.login', ['user_id' => 1]) }}" class="btn btn-lg btn-outline-primary px-5">
            Login admin
        </a>

        <a href="{{ route('user.login', ['user_id' => 2]) }}" class="btn btn-lg btn-outline-primary px-5">
            Login User
        </a>

        <a href="{{ route('user.login', ['user_id' => 3]) }}" class="btn btn-lg btn-outline-primary px-5">
            Login Visitor
        </a>
    </div>
@endsection
