<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Optifix Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="#">Optifix Agency</a>
    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <x-nav-link route="home" href="{{ route('home') }}">Home</x-nav-link>
        </li>
        <li class="nav-item">
            <x-nav-link route="noticias.index" href="{{ route('noticias.index') }}">Noticias</x-nav-link>
        </li>
        <li class="nav-item">
            <x-nav-link route="services" href="{{ route('services') }}">Servicios</x-nav-link>
        </li>
        <li class="nav-item">
            <x-nav-link route="about" href="{{ route('about') }}">Sobre nosotros</x-nav-link>
        </li>
        {{-- @if(Auth::check())
        <li class="nav-item">
            <form action="{{ url('/cerrar-sesion') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-link">{{ Auth::user()->email }} (Cerrar sesión)</button>
            </form>
        </li>
        @else
        <li class="nav-item">
            <x-nav-link route="auth.login" href="{{ route('auth.login') }}">Iniciar sesión</x-nav-link>
        </li>
        @endif --}}
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
 </nav>
   <div class="container-fluid">
    {{-- @if(session()->has('feedback.message'))
        <div class="alert alert-{{ session()->get('feedback.type') ?? 'success' }}">
            {!! session('feedback.message') !!}
        </div>
    @endif --}}
    {{ $slot }}
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
  </body>
</html>
