@extends('layout.app')

@section('title')
Login
@endsection

@section('head')
@endsection

@section('content')
    <div class="background">
        <div class="container">
            <div class="login-container">
                @if (isset($error))
                <div class="alert alert-danger hide-message">
                    <ul>
                        <li>{{ $error }}</li>
                    </ul>
                </div>
                @endif
                <form action="/login-users" method="post">
                    @csrf
                    <input type="text" class="login-input" name="username" placeholder="username"/>
                    <input type="password" class="login-input" name="password" placeholder="password"/>
                    <span id="toggle-password" class="toggle-pwd">&#128065;</span>
                    <input type="submit" value="Login"/>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection