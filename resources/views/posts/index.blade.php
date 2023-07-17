@extends('layouts.base')
@section('content')
<div class="container flex">
    <div class="text-center">
        <h1>Posts</h1>      
    <form action="{{ route('post') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" aria-placeholder="Write something"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="post" rows="4" @error('post') style="border-color:red;" name="post" @enderror placeholder="Write something"></textarea> 
            @error('post')
            <div class="d-flex mt-2" style="color:red; length:2%">
                    {{ $message }}
            </div>
            @enderror
        </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-secondary">Post</button>
            </div>
    </form>

</div>

<div class="container flex">
    <div class="mt-5">
        <form action="{{ route('post') }}" method="post">
            @csrf
            @if ($post->count())
                @foreach ($post as $posts)
                    <div class="mt-5">
                        <a href="" style="font-weight: bold;">{{ $posts->user->name }}</a> <span style="color: gray;">{{ $posts->created_at->diffForHumans() }}</span>
                        <p class="mb-2">{{ $posts->post }}</p>
                    </div>
                <div class="d-flex">

                    <form action="{{ route('posts.likes', $posts->id) }}" method="post">
                        @csrf
                        <button href="" style="color: blue; margin-right: 6px;" type="submit">Like</button>
                    </form>

                    <form action="" method="post">
                        @csrf
                        <a style="color:blue;" type="submit">Unlike</a>
                    </form>
                    <span style="margin-left: 3px;">{{ $posts->likes->count() }} {{ Str::plural('like', $posts->likes->count()) }}</span>
                </div>
                @endforeach
                    {{ $post->links() }}
                
                @else
                <h1 class="text-center" style="color:red;">No posts created yet !</h1>
                @endif
        </form>
    </div>
</div>

@endsection