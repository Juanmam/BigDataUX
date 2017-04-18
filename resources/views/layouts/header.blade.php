<!DOCTYPE html>

<header>
  <nav class="navbar">
    <div class="navbar-fluid">
      <ul class="nav navbar-nav">
	@foreach ($header as $head)
	<li>
	  {{ HTML::link($head[0],$head[1], array('id' => "headerLink")) }}
	</li>
	@endforeach
      </ul>
      <ul class="nav navbar-nav navbar-right">
	<li>  </li>
      </ul>
    </div>
  </nav>
</header>
