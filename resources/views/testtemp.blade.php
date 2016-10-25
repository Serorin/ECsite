<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="/js/test.js"></script>
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
    <i>bladeで書いたやつだよ！</i>
    </header>

    @yield('contents')

  </body>
</html>
