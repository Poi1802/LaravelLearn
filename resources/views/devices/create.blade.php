@extends('layouts.main')
@section('content')
  <div>
    <form action="{{ route('devices.store') }}" method='post'>
      @csrf
      <div class="mb-3">
        <label for="titleArea" class="form-label">Device name</label>
        <input type="text" class="form-control @error('name') border-danger @enderror"
          name="name" id="titleArea" placeholder="Device name" value="{{ old('name') }}">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="contentArea" class="form-label">Price</label>
        <input type="number" name="price"
          class="form-control @error('price') border-danger @enderror" id="contentArea"
          placeholder="Price" value="{{ old('price') }}">
        @error('price')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Description</label>
        <input type="text"
          class="form-control @error('description') border-danger @enderror" id="imgArea"
          name="description" placeholder="Description" value="{{ old('description') }}">
        @error('description')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Brand</label>
        <input type="text" class="form-control @error('brand') border-danger @enderror"
          id="imgArea" name="brand" placeholder="Brand" value="{{ old('brand') }}">
        @error('brand')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <div class="back">
      <a href="{{ route('devices.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
  </div>
@endsection
