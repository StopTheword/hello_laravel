<!DOCTYPE>
<html>
<title>@yield('title','Sample')-Laravel入门</title>
<link rel="stylesheet" href="/css/app.css">
<body>
 @include('layouts._header')
  <div class="container">
    @yield('content')
  </div>
  @include('layouts._footer')
</body>
</html>
