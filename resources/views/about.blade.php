<!DOCTYPE html>

@extends ('layouts.layout',
['title'  => "About"],
['header' => array(array("/","Home"))])

@section ('content')
<div class="content">
  <div class="title">
    <h1>About</h1>
  </div>
  <p> Boople is a simple webpage designed to let useres search through Gutenberg's dataset files when trying to find a specific word! </p>
</div>
@endsection
