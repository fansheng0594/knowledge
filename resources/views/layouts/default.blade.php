<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="content-bg">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Weibo App</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
        <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
      </ul>
      <form class="form-inline mr-auto my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item"><a class="nav-link" href="">帮助</a></li>
        @guest()
        <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}"><button>Login</button></a></li>
        <li class="nav-item" ><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                个人中心
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </nav>

<div class="">
  @include('shared._message')
  @yield('content')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
