@extends('layouts.main')
@section('content')
  <div class="back">
    <a href="{{ route('users.index') }}" class="btn btn-primary mb-2">Back</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Last-name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Admin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->last_name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->admin }}</td>
      </tr>
    </tbody>
  </table>
@endsection
