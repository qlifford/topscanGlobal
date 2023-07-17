@extends('layouts.base')
@section('content')
<div class="container d-flex align-contents-center">
    <form action="{{ route('login') }}" method="POST">
          <h1>Login</h1>
          @if (session('status'))
        <div style="color:red; margin-bottom:3%">
          {{ session('status') }}
        </div>
          @endif
            @csrf
            <div class="mb-4">
                <label for="">Email</label>
                <input type="email" name="email" @error('email') style="border-color:red;" @enderror
                placeholder="Enter your email" value="{{ old('email') }}">
            @error('email')
                <div>
                        {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" 
                placeholder="Enter your password">
        </div>

        <div class="mb-3">
        <input type="checkbox" name="remember" id="remember" class="">
        <label for="">Remember me</label>
        </div>
        <div class="">
        <button type="submit" class="btn btn-secondary">Login</button>
        </div>

        </form>
</div>
    
@endsection