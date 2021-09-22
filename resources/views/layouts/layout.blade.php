<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>@yield('title')</title>
</head>
<body>
  @yield('main')
  @component('components.top')
  @endcomponent
  @component('components.footer')
  @endcomponent
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{ asset('js/hamburger.js') }}"></script>
</body>
</html>