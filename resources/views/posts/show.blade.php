@extends('layouts.main')
@section('content')
  <div>
    <div class="post mb-3">
      <div>{{ $post->id . '. ' . $post->title }}</div>
      <div>{{ $post->content }}</div>
      <div>category: {{ $category->name }}</div>
      <div class="tags">
        @foreach ($post->tags as $tag)
          <div class="tag">{{ $tag->name }}</div>
        @endforeach
      </div>
    </div>
    <div class="change">
      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success mb-3">Change</a>
    </div>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="delete">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <div class="back">
      <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
@endsection
