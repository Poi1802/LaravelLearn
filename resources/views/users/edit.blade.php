@extends('layouts.main')
@section('content')
  <div>
    <form action="{{ route('users.update', $user->id) }}" method='post'>
      @csrf
      @method('patch')
      <div class="mb-3">
        <label for="titleArea" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="titleArea"
          placeholder="Your name" value="{{ $user->name }}">
      </div>
      <div class="mb-3">
        <label for="contentArea" class="form-label">Last-name</label>
        <input type="text" name="last_name" class="form-control" id="contentArea"
          placeholder="Your last-name" value="{{ $user->last_name }}" />
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Email</label>
        <input type="email" class="form-control" id="imgArea" name="email"
          placeholder="email" value="{{ $user->email }}">
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Password</label>
        <input type="text" class="form-control" id="imgArea" name="password"
          placeholder="password" value="{{ $user->password }}">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <div class="back">
      <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
  </div>
@endsection
