<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>Document</title>
</head>
@php
  $uri = isset($_SERVER['PATH_INFO']) ? explode('/', $_SERVER['PATH_INFO']) : '/ ';
  // dump($uri);
@endphp

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link  {{ $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' }}"
                aria-current="page" href="{{ route('main') }}">Main</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link {{ $uri[1] === 'posts' ? 'active' : '' }}"
                href="{{ route('posts.index') }}">Posts</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link {{ $uri[1] === 'users' ? 'active' : '' }}"
                href="{{ route('users.index') }}">Users</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link {{ $uri[1] === 'devices' ? 'active' : '' }}"
                href="{{ route('devices.index') }}">Devices</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
  </div>
</body>

</html>
