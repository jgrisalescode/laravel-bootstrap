<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <title>Layout</title>
</head>

<body>
  <header>
    @include("layouts.navbar")
    @yield("header")
  </header>
  <main>
    @yield("main")
  </main>
  <footer>
    @yield("footer")
    Here goes the footer!
  </footer>
  <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>