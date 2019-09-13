<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  
  @if (!\Request::is('login') && !\Request::is('register'))
      
      <!-- Navigation -->
      @include('partial.navbar')
      
      <!-- Page Header -->
      @include('partial.pageheader')

  @endif

  <!-- Main Content -->
  <div class="{{!\Request::is('login') && !\Request::is('register') ? 'container' : '' }}">

      @yield('content')        

      @if (!\Request::is('login') && !\Request::is('register'))            
        {{-- @include('partial.sidebar')               --}}
        @include('partial.footer')
      @endif

    
  </div>

  <!-- Scripts -->
  @section('scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
  @show
</body>
</html>


