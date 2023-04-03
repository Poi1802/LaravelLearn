@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Devices</h1>
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
      <div class="create">
        <a href="{{ route('admin.devices.create') }}" class="btn btn-primary mb-3">Add
          device</a>
      </div>
      @if (!isset($devices[0]))
        <h2>No devices</h2>
      @endif
      @foreach ($devices as $device)
        <div>

          <a href="{{ route('admin.devices.show', $device->id) }}" class="device">
            {{ $device->id . '. ' . $device->name }}
          </a>
        </div>
      @endforeach
      <div class="mt-3">
        {{ $devices->withQueryString()->links() }}
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
