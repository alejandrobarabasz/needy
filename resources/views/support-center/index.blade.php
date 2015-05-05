@extends('app')

@section('content')

<div class="list">

	<div class="top radius-5">

		<div class="searcher">
			<form class="navbar-form navbar-left" role="search">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Buscar</button>
			</form>
		</div>

		<div class="controls navbar-form navbar-left">
			<div class="btn-group">
				<button type="button" class="btn btn-default" aria-label="Left Align"><span aria-hidden="true">Agregar</span></button>
				<button type="button" class="btn btn-default" aria-label="Center Align"><span aria-hidden="true">Eliminar</span></button>
				<button type="button" class="btn btn-default" aria-label="Center Align"><span aria-hidden="true">Archivar</span></button>
			</div>
		</div>

		<div class="controls navbar-form navbar-right">
			<div class="btn-group">
				<button type="button" class="btn btn-default" aria-label="Left Align"><span aria-hidden="true">|&#x297C;</span></button>
				<button type="button" class="btn btn-default" aria-label="Center Align"><span aria-hidden="true">&#x2190;</span></button>
				<button type="button" class="btn btn-default" aria-label="Right Align"><span aria-hidden="true">&#x2192;</span></button>
				<button type="button" class="btn btn-default" aria-label="Justify"><span aria-hidden="true">&#x297D;|</span></button>
			</div>
			</div>

		<br class="cb" />
	</div>

	<div class='items'>

		<!-- panel 1 -->
		<div class='radius-5 row'>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<span class="radius-5 chk">
					<input type="checkbox" aria-label="">
				</span>
				<img class="img-responsive center-block img-thumbnail" src="/img/c-a.jpg" />
			</div>
			<div class="col-sm-10 col-md-10 col-lg-10">
				<div class='controls'>
					<span class='radius-5 edit'></span>
					<span class='radius-5 remove'></span>
				</div>
				<h2>Nombre del centro técnico 1</h2>
				<div class="row">
					<label class="col-sm-12 col-md-12 col-lg-12">Domicilio centro 1</label>
					<label class="col-sm-6 col-md-6 col-lg-6">Horario de atención centro 1</label>
					<label class="col-sm-6 col-md-6 col-lg-6">corre@centro1.com</label>
				</div>
			</div>
		</div>

		<!-- panel 2 -->
		<div class='radius-5 row'>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<span class="radius-5 chk">
					<input type="checkbox" aria-label="">
				</span>
				<img class="img-responsive center-block img-thumbnail" src="/img/c-a.jpg" />
			</div>
			<div class="col-sm-10 col-md-10 col-lg-10">
				<div class='controls'>
					<span class='radius-5 edit'></span>
					<span class='radius-5 remove'></span>
				</div>
				<h2>Nombre del centro técnico 2</h2>
				<div class="row">
					<label class="col-sm-12 col-md-12 col-lg-12">Domicilio centro 2</label>
					<label class="col-sm-6 col-md-6 col-lg-6">Horario de atención centro 2</label>
					<label class="col-sm-6 col-md-6 col-lg-6">corre@centro2.com</label>
				</div>
			</div>
		</div>

		<!-- panel 3 -->
		<div class='radius-5 row'>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<span class="radius-5 chk">
					<input type="checkbox" aria-label="">
				</span>
				<img class="img-responsive center-block img-thumbnail" src="/img/c-a.jpg" />
			</div>
			<div class="col-sm-10 col-md-10 col-lg-10">
				<div class='controls'>
					<span class='radius-5 edit'></span>
					<span class='radius-5 remove'></span>
				</div>
				<h2>Nombre del centro técnico 3</h2>
				<div class="row">
					<label class="col-sm-12 col-md-12 col-lg-12">Domicilio centro 3</label>
					<label class="col-sm-6 col-md-6 col-lg-6">Horario de atención centro 3	</label>
					<label class="col-sm-6 col-md-6 col-lg-6">corre@centro3.com</label>
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
