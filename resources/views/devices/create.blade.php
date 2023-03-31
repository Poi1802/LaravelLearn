@extends('layouts.main')
@section('content')
  <div>
    <form action="{{ route('devices.store') }}" method='post'>
      @csrf
      <div class="mb-3">
        <label for="titleArea" class="form-label">Device name</label>
        <input type="text" class="form-control" name="name" id="titleArea"
          placeholder="Device name">
      </div>
      <div class="mb-3">
        <label for="contentArea" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="contentArea"
          placeholder="Price">
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Description</label>
        <input type="text" class="form-control" id="imgArea" name="description"
          placeholder="Description">
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Brand</label>
        <input type="text" class="form-control" id="imgArea" name="brand"
          placeholder="Brand">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <div class="back">
      <a href="{{ route('devices.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
  </div>
@endsection
