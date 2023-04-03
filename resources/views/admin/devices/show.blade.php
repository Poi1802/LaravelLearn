@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Device</h1>
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
      <div class="device_show">
        <div class="name">
          Name: <span class="fst-italic">{{ $device->name }}</span>
        </div>
        <div class="price">
          Price: <span class="fst-italic">{{ $device->price }} &#x20bd</span>
        </div>
        <div class="description">
          Description: <span class="fst-italic">{{ $device->description }}</span>
        </div>
        <div class="brand">
          Brand: <span class="fst-italic">{{ $device->brand }}</span>
        </div>
      </div>
      <div class="edit">
        <a href="{{ route('admin.devices.edit', $device->id) }}"
          class="btn btn-success mt-2">Edit</a>
      </div>
      <div class="delete">
        <form action="{{ route('admin.devices.destroy', $device->id) }}" method="post">
          @csrf
          @method('delete')
          <button type="submit " class="btn btn-danger mt-2">Delete</button>
        </form>
      </div>
      <div class="back">
        <a href="{{ route('admin.devices.index') }}" class="btn btn-primary mt-2">Back</a>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
