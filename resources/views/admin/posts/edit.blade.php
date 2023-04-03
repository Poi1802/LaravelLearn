@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit post</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div>
        <form action="{{ route('admin.posts.update', $post->id) }}" method='post'>
          @csrf
          @method('patch')
          <div class="mb-3">
            <label for="titleArea" class="form-label">Title</label>
            <input type="text"
              class="form-control @error('title') border-danger @enderror" name="title"
              id="titleArea" placeholder="title"
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
            <select class="form-control" multiple size="3" name="tags[]"
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
          <a href="{{ route('admin.posts.show', $post->id) }}"
            class="btn btn-primary mt-3">Back</a>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
