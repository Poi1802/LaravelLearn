@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit device</h1>
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
        <form action="{{ route('admin.devices.update', $device->id) }}" method='post'>
          @csrf
          @method('patch')
          <div class="mb-3">
            <label for="titleArea" class="form-label">Device name</label>
            <input type="text"
              class="form-control @error('name') border-danger @enderror" name="name"
              id="titleArea" placeholder="Device name"
              value="{{ !old('name') ? $device->name : old('name') }}">
            @error('name')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="contentArea" class="form-label">Price</label>
            <input type="number" name="price"
              class="form-control @error('price') border-danger @enderror" id="contentArea"
              placeholder="Price"
              value="{{ !old('price') ? $device->price : old('price') }}">
            @error('price')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 ">
            <label for="imgArea" class="form-label">Description</label>
            <input type="text"
              class="form-control @error('description') border-danger @enderror"
              id="imgArea" name="description" placeholder="Description"
              value="{{ !old('description') ? $device->description : old('description') }}">
            @error('descrtiption')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 ">
            <label for="imgArea" class="form-label">Brand</label>
            <input type="text"
              class="form-control @error('brand') border-danger @enderror" id="imgArea"
              name="brand" placeholder="Brand"
              value="{{ !old('brand') ? $device->brand : old('brand') }}">
            @error('brand')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 ">
            <label for="imgArea" class="form-label">Category</label>
            <select name="category_id" id="catArea" class="form-control">
              @foreach ($categories as $category)
                <option @selected(old('category_id') == $category->id) value="{{ $category->id }}">
                  {{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-success">Edit</button>
        </form>
        <div class="back">
          <a href="{{ route('admin.devices.show', $device->id) }}"
            class="btn btn-primary mt-3">Back</a>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
