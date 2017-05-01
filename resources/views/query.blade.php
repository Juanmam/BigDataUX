<!DOCTYPE html>

@extends ('layouts.layout',
['title'  => "Search"],
['header' => array(array("/","Home"),
                   array("/about","About"))])

@section ('content')
<div class="content-list">
  <div class="results">
    <ul>
      <li id="results-font">
	<div id="results-font-word">{!! $word !!}</div>
	<br>
	<!-- Can add a foreach files if passed as array -->
	{!! $files !!}
      </li>
      <br><br>
    </ul>
  </div>
</div>
@endsection
