<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Primi passi</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" charset="utf-8"></script>
  </head>
  <body>
    <div id='container'>
      <header>
        @include('header')
      </header>
      <main>
        <div class="navbar">
          @include('navbar')
        </div>
        <div class="content">
          @yield('content')
        </div>
      </main>
      <footer>
        @include('footer')
      </footer>
    </div>
  </body>
</html>
