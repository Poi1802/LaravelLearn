@extends('layouts.admin');

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Posts</h1>
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
        <div class="create">
          <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Create
            Post</a>
        </div>
        @foreach ($posts as $post)
          <div class="to_show_link">
            <a href="{{ route('admin.posts.show', $post->id) }}" class="post">
              {{ $post->id . '. ' . $post->title }}
            </a>
          </div>
        @endforeach
        <div class="mt-3">
          {{ $posts->withQueryString()->links() }}
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
