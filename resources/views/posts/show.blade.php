@extends('layouts.master')

@section('title', $post->title)

    
@section('content')
    <h1> {{ $post->title }} </h1>
    <p>
        {{ $post->body}}
    </p>

    @if (count($post->comments))
        <h4>Comments</h4>
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    <p>{{ $comment->author}} </p>
                    <p>{{ $comment->comment}} </p>
                </li>
            @endforeach
        </ul>
        
    @endif
    <h4>Post a comment</h4>

    <form method="POST" action="{{ route('comments-post', ['post_id' => $post->id]) }} ">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Author</label>
            <input type="text" name="author" id="author" class="form-control">
            {{-- @include('partials.error-message', ['fieldTitle' => 'title']) --}}
        </div>
        <div class="form-group">
            <label for="body">Description</label>
            <textarea type="text" name="comment" id="comment" class="form-control" rows="2"></textarea>
            {{-- @include('partials.error-message', ['fieldTitle' => 'body']) --}}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </div>
    </form>
@endsection
