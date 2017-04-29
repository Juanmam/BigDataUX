<!DOCTYPE html>

@extends ('layouts.layout',
['title'  => "Search"],
['header' => array(array("/","About"))])

@section ('content')
<div class="content-list">
  <p> Word: {!! $word !!} </p>
  <div class="list">
    <ul>
      @foreach ($results as $word)
      <li>
	{!! $word !!}
      </li>
      <br>
      @endforeach
    </ul>
  </div>
</div>
@endsection
