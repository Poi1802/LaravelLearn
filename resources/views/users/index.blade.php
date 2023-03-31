@extends('layouts.main')
@section('content')
  <div class="create">
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Create User</a>
  </div>
  <hr>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Last-name</th>
        <th scope="col">Email</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $key => $user)
        <tr>
          <th scope="row">{{ $key + 1 }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->last_name }}</td>
          <td>{{ $user->email }}</td>
          <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Info</a>
          </td>
          <td><a href="{{ route('users.edit', $user->id) }}"
              class="btn btn-success">Edit</a></td>
          <td>
            <form action="{{ route('users.destroy', $user->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
