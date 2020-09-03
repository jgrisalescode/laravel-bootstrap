<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layout</title>
  <style>
    .header {
      background-color: blue;
      color: white;
    }

    .main {
      background-color: magenta;
      color: white;
    }

    .footer {
      color: red;
    }
  </style>
</head>

<body>
  <header class="header">
    @yield("header")
  </header>
  <main class="main">
    @yield("main")
  </main>
  <footer class="footer">
    @yield("footer")
    Here goes the footer!
  </footer>
</body>

</html>