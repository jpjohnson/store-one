<!doctype html>
<html lang="en">
  <head>
    <title>My Store</title>
    <link rel="stylesheet" href="/css/shared.css" />
  </head>
  <body>
    <div class="header">
      @include("include/header")
    </div>
    <div class="content">
      @yield("content")
    </div>
  </body>
</html>