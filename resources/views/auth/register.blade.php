@extends('layouts.base')
@section('content')
<div class="container d-flex align-contents-center">
    <form action="{{ route('register') }}" method="POST">
          <h1>Register</h1>
            @csrf
            <div class="mb-4">
                    <label for="">Name</label>
                    <input type="text" name="name"
                     @error('name') style="border-color:red;" @enderror
                        placeholder="Enter your name" value="{{ old('name') }}">
                    @error('name')
                        <div style="color:red;">
                                {{ $message }}
                        </div>
                    @enderror
            </div>
            
            <div class="mb-4">
                    <label for="">Username</label>
                    <input type="text" name="username" 
                    @error('username') 
                    style="border-color:red;"
                     @enderror
                    placeholder="Enter your username" value="{{ old('username') }}">
                @error('username')
                    <div style="color:red;">
                            {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                    <label for="">Email</label>
                    <input type="email" name="email" @error('email') style="border-color:red;" @enderror
                    placeholder="Enter your email" value="{{ old('email') }}">
                @error('email')
                    <div style="color:red;">
                            {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                    <label for="">Password</label>
                    <input type="password" name="password" @error('password') style="border-color:red;" @enderror
                    placeholder="Enter your password">
                @error('password')
                    <div style="color:red;">
                            {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                    <label for="">Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="Confirm your password">
            </div>

            <button type="submit" class="btn btn-secondary">Register</button>
        </form>
</div>
    
@endsection