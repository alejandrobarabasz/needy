@extends('app')

@section('content')

<!-- <pre>$support_centers = {{ print_r($support_centers, true) }}</pre> -->
<div class="list">

	<div class="top">

		<div class="searcher">
			<form class="navbar-form navbar-left" role="search">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Buscar</button>
			</form>
		</div>

		<div class="controls navbar-form navbar-left">
			<div class="form-group">
				<button type="submit" class="btn btn-default">+</button>
			</div>
		</div>

		<br class="cb" />
	</div>

	<div class='items'>
		<!-- panel 1 -->
		<div class="panel panel-default">
			<span class="radius-5 chk">
				<input type="checkbox" aria-label="">
			</span>
			<div class="panel-body">
				<img src="/img/c-a.jpg" />
				<div class="extra">
					<h2>Nombre del centro técnico 1</h2>
					<label class="left">Campo 1 corto</label>
					<label class="right">Campo 2 de longitud mediana</label>
					<label class="left">Campo c</label>
					<label class="right">Campo 4 </label>
					<label class="left">Campo 5 que se consideraría como bastante largo</label>
					<br class="cb" />
				</div>
			</div>
		</div>

		<!-- panel 2 -->
		<div class="panel panel-default">
			<span class="radius-5 chk">
				<input type="checkbox" aria-label="">
			</span>
			<div class="panel-body">
				<img src="/img/c-a.jpg" />
				<div class="extra">
					<h2>Nombre del centro técnico 2</h2>
					<label class="left">Campo 1 corto</label>
					<label class="right">Campo 2 de longitud mediana</label>
					<label class="left">Campo c</label>
					<label class="right">Campo 4 </label>
					<label class="left">Campo 5 que se consideraría como bastante largo</label>
					<label class="right">Campo 4</label>
					<label class="left">Campo 5 mas o menos</label>
					<br class="cb" />
				</div>
			</div>
		</div>

		<!-- panel 3 -->
		<div class="panel panel-default">
			<span class="radius-5 chk">
				<input type="checkbox" aria-label="">
			</span>
			<div class="panel-body">
				<img src="/img/c-a.jpg" />
				<div class="extra">
					<h2>Nombre del centro técnico 3</h2>
					<label class="left">Campo 1 corto</label>
					<label class="right">Campo 2 de longitud mediana</label>
					<label class="left">Campo c</label>
					<label class="right">Campo 4 </label>
					<label class="left">Campo 5 que se consideraría como bastante largo</label>
					<label class="right">Campo 4</label>
					<label class="left">Campo 5 mas o menos</label>
					<br class="cb" />
				</div>
			</div>
		</div>

	</div>

	<nav class="pager">
	  <ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>
</div>
@endsection
