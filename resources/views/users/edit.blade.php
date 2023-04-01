@extends('layouts.main')
@section('content')
  <div>
    <form action="{{ route('users.update', $user->id) }}" method='post'>
      @csrf
      @method('patch')
      <div class="mb-3">
        <label for="titleArea" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') border-danger @enderror"
          name="name" id="titleArea" placeholder="Your name"
          value="{{ !old('name') ? $user->name : old('name') }}">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="contentArea" class="form-label">Last-name</label>
        <input type="text" name="last_name"
          class="form-control @error('last_name') border-danger @enderror" id="contentArea"
          placeholder="Your last-name"
          value="{{ !old('last_name') ? $user->last_name : old('last_name') }}" />
        @error('last_name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') border-danger @enderror"
          id="imgArea" name="email" placeholder="email"
          value="{{ !old('email') ? $user->email : old('email') }}">
        @error('email')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3 ">
        <label for="imgArea" class="form-label">Password</label>
        <input type="text"
          class="form-control @error('password') border-danger @enderror" id="imgArea"
          name="password" placeholder="password"
          value="{{ !old('password') ? $user->password : old('password') }}">
        @error('password')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <div class="back">
      <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
  </div>
@endsection
