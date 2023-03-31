@extends('layouts.main')
@section('content')
  <div class="device">
    <div class="name">
      Name: <span class="fst-italic">{{ $device->name }}</span>
    </div>
    <div class="price">
      Price: <span class="fst-italic">{{ $device->price }}</span>
    </div>
    <div class="description">
      Description: <span class="fst-italic">{{ $device->description }}</span>
    </div>
    <div class="brand">
      Brand: <span class="fst-italic">{{ $device->brand }}</span>
    </div>
  </div>
  <div class="edit">
    <a href="{{ route('devices.edit', $device->id) }}" class="btn btn-success mt-2">Edit</a>
  </div>
  <div class="delete">
    <form action="{{ route('devices.destroy', $device->id) }}" method="post">
      @csrf
      @method('delete')
      <button type="submit " class="btn btn-danger mt-2">Delete</button>
    </form>
  </div>
  <div class="back">
    <a href="{{ route('devices.index') }}" class="btn btn-primary mt-2">Back</a>
  </div>
@endsection
