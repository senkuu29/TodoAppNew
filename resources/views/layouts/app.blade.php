<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- title --}}
    <title>{{ $title }} - {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('bg/7611770.png') }}">

    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/font/bootstrap-icons.min.css') }}"> 
</head>
<body>
    
    @include('partials.navbar') <!-- Navbar -->

    @include('partials.content') <!-- Content Section -->

    @yield('content') <!-- Render Content -->

    @include('partials.modal') <!-- Modal -->

    @include('partials.footer') <!-- footer -->

      <!-- Bootstrap JS -->
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>