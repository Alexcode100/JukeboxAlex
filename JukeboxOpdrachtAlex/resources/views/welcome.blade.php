<!DOCTYPE html>
<html lang="en">
<head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @include('layouts.navbar')

  <div class="container">

    <h1> Homepagina!</h1>
    @yield('content')
  </div>

</body>
</html>