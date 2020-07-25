
<!doctype html>
<html lang="en">
  <head>
    @include('layouts.partials.head')
  </head>
  <body>
    <header>
      @include('layouts.partials.top-nav')
    </header>
    <main role="main">
        @yield('content')
        <footer class="container">
            @include('layouts.partials.footer')
        </footer>
    </main>
    <script src="/js/app.js"></script>
  </body>
</html>
