@extends('layouts.main')
@section('content')
  <div class="create">
    <a href="{{ route('devices.create') }}" class="btn btn-primary mb-3">Add device</a>
  </div>
  @if (!isset($devices[0]))
    <h2>No devices</h2>
  @endif
  @foreach ($devices as $device)
    <div>

      <a href="{{ route('devices.show', $device->id) }}" class="device">
        {{ $device->id . '. ' . $device->name }}
      </a>
    </div>
  @endforeach
  <div class="mt-3">
    {{ $devices->withQueryString()->links() }}
  </div>
@endsection
