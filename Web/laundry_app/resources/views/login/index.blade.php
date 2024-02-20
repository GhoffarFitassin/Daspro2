@extends('layout.login')

@section('container')
    <form autocomplete="off" action="/login" method="POST">
        
        @csrf
        <h2>Login</h2>
        
        <div class="inputBox">
            <input type="text" name="username" required="required">
            <span>Username</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" name="password" required="required">
            <span>Password</span>
            <i></i>
        </div>
        <button type="submit" style="margin-top: 3rem">Login</button>
    </form>
@endsection
