<!DOCTYPE html>

@extends ('layouts.layout',
['title'  => "Search"],
['header' => array(array("/about","About"))])

@section ('content')
<div class="content-list">
  <div class="list">
    <ul>
      <li>
	{!! $word !!}
	<br>
	<!-- Can add a foreach files if passed as array -->
	{!! $files !!}
      </li>
      <br><br>
    </ul>
  </div>
</div>
@endsection
