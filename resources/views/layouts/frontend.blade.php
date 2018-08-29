<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$post->title}} | {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body>
  <div class="wrapper">
    <header><a id="menu" href="#"><img src="{{ asset('images/icon-menu.png') }}" alt=""></a>
      <div class="two-third"><a href="#" class="logo">TWINKLE</a><span class="current-location-time">YOUR CURRENT LOCATION BY IP: TOKYO, JAPAN<br>{{ date('m/d, Y - H:i:s') }}</span><a href="#" class="button teal header-find">Find places near you</a></div>
      <div class="one-third">
        <form action="/magical-filter" method="post" class="header-search">
          {!! csrf_field() !!}
          <input type="search" placeholder="Search anything!" name="q">
          <!-- <select name="category" id="category">
            @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select> -->
        </form>
        <div class="user-buttons">
          @guest
          <a href="{{ route('login') }}" class="button dark login">Login</a>
          <a href="{{ route('register') }}" class="button dark sign-up">Sign Up</a>
          @else
          <a class="button dark login" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          @endguest
        </div>
      </div>
    </header>
    <div class="content">
      @include('partials.sidebar')
      <main>
        @yield('content')
        @include('partials.footer')
      </main>
    </div>
  </div>
</body>
</html>