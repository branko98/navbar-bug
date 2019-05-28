@extends('layouts.master')

@section('title', 'Create new post')

@section('content')       

    <h2 class="blog-post-title">Create new post</h2>

    <form method="POST" action="{{ route('store-post') }} ">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
            @include('partials.error-message', ['fieldTitle' => 'title'])
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea type="text" name="body" id="body" class="form-control" rows="5"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'body'])
        </div>
        <div class="form-group">
            <label for="published">Published</label>
            <input type="checkbox" id="published" name="published" value="1">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Post</button>
        </div>
    </form>

@endsection
