<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Usando Vite -->
  @vite(['resources/js/app.js'])
</head>

<body class="bg-black">
  <div id="app">

    @include("partials.header")

    <main>
      <div class="container">
        <h2 class="fs-4 my-4 current_page">
          ./@yield("currentPage")
        </h2>
        <div class="row">
          @include("partials.adminSidebar")
          <div class="col-9">
            @yield('content')
          </div>
          <!-- /.col-9 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </main>
  </div>
</body>

</html>
