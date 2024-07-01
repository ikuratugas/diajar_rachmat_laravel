<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ikura Apirianto</title>
</head>
<body>
  <div>
    @yield('intro')
  </div>
  @include('ikura.components.sidebar')
  <div class="konten-utama">
    @yield('content')
  </div>
</body>
</html>