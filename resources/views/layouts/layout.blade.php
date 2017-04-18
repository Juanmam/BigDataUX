<!DOCTYPE html>

@extends ('layouts.footer')
@extends ('layouts.header', $header)
@extends('layouts.fixed_imports')

<html>
  <head>
    <title>{{ $title }}</title>
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      @yield('content')
    </div>
  </body>
</html>
