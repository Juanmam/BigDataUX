<!DOCTYPE html>

@extends ('layouts.layout',
['title'  => "Search"],
['header' => array(array("/","About"))])

@section ('content')
<div class="content" id="center-ish">
  <div class="title">
    {{ $word }}
  </div>
</div>
@endsection
