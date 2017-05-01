<!DOCTYPE html>

@extends ('layouts.layout',
         ['title'  => "Search"],
         ['header' => array(array("/about","About"))])

@section ('content')
<div class="content" id="center-ish">
  <div class="title">
    
    <font color="blue">B</font><font color="red">o</font><font color="yellow">o</font><font color="blue">p</font><font color="green">l</font><font color="red">e</font>
    
  </div>
  {{ Form::open(array('url' => '/searching', 'method' => 'POST')) }}
  {{ Form::text('word','Example: Food', array('size' => '55')) }}
  <br><br>
  {{ Form::submit('Boople Search', array('id' => 'search-btn')) }}
  {{ Form::close() }}
</div>
@endsection
