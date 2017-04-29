<!DOCTYPE html>

@extends ('layouts.layout',
         ['title'  => "Search"],
         ['header' => array(array("/","About"))])

@section ('content')
<div class="content" id="center-ish">
  <div class="title">
    Boople
  </div>
  {{ Form::open(array('url' => '/searching', 'method' => 'POST')) }}
  {{ Form::text('word','Example: Food') }}
  <br><br>
  {{ Form::submit('Search') }}
  {{ Form::close() }}
</div>
@endsection
