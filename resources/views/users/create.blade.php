@extends('layouts.main')
@section('content')
  <div>
    <form action="{{ route('users.store') }}" method='post'>
      @csrf
      <div class="mb-3">
        <label for="titleArea" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="titleArea"
          placeholder="Your name">
      </div>
      <div class="mb-3">
        <label for="contentArea" class="form-label">Last-name</label>
        <input type="text" name="last_name" class="form-control" id="contentArea"
          placeholder="Your last-name" />
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Email</label>
        <input type="email" class="form-control" id="imgArea" name="email"
          placeholder="email">
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Password</label>
        <input type="password" class="form-control" id="imgArea" name="password"
          placeholder="password">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <div class="back">
      <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
  </div>
@endsection
