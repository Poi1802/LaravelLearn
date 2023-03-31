@extends('layouts.main')
@section('content')
  <div class="create">
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
  </div>
  @foreach ($posts as $post)
    <div>
      <a href="{{ route('posts.show', $post->id) }}" class="post">
        {{ $post->id . '. ' . $post->title }}
      </a>
    </div>
  @endforeach
@endsection
