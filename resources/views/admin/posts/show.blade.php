@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Post</h1>
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
        <div class="post_show mb-3">
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
          <a href="{{ route('admin.posts.edit', $post->id) }}"
            class="btn btn-success mb-3">Change</a>
        </div>
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post"
          class="delete">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger mb-3">Delete</button>
        </form>
        <div class="back">
          <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Back</a>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
