@extends('layouts.main')
@section('content')
  {{-- @php
    dd(in_array('4', array_column($tags->toArray(), 'id')));
  @endphp --}}
  <div>
    <form action="{{ route('posts.update', $post->id) }}" method='post'>
      @csrf
      @method('patch')
      <div class="mb-3">
        <label for="titleArea" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') border-danger @enderror"
          name="title" id="titleArea" placeholder="title"
          value="{{ !old('title') ? $post->title : old('title') }}">
        @error('title')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="contentArea" class="form-label">Content</label>
        <textarea type="text" name="content"
          class="form-control @error('content') border-danger @enderror" id="contentArea"
          placeholder="content">{{ !old('content') ? $post->content : old('content') }}</textarea>
        @error('content')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Image</label>
        <input type="text" class="form-control" id="imgArea" name="img"
          placeholder="image "value="{{ !old('img') ? $post->img : old('img') }}">
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Category</label>
        <select name="category_id" id="catArea" class="form-control">
          @foreach ($categories as $category)
            <option @selected(!old('category_id') ? $category->id === $post->category_id : old('category_id') == $category->id) value="{{ $category->id }}">
              {{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Tags</label>
        <select class="form-select" multiple size="3" name="tags[]"
          aria-label="size 3 select example">
          @foreach ($tags as $tag)
            <option @selected(!old('tags') ? in_array($tag->id, array_column($post->tags->toArray(), 'id')) : in_array($tag->id, old('tags') ?? [])) value="{{ $tag->id }}">
              {{ $tag->name }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-success">Edit</button>
    </form>
    <div class="back">
      <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary mt-3">Back</a>
    </div>
  </div>
@endsection
