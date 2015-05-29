@extends('app')

@section('content')

<div class="list">

	<div class="top radius-5">

		<div class="searcher">
			<form action="{{ action('SupportCenterController@index') }}" method="get" class="navbar-form navbar-left" role="search" data-target=".items">
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Buscar">
			  </div>
			  <button type="submit" class="btn btn-default">Buscar</button>
			</form>
		</div>

		<div class="controls navbar-form navbar-left">
			<div class="btn-group">
				<a 
					href="{{ action('SupportCenterController@create') }}" 
					class="btn btn-default" 
					aria-label="Left Align">
						<span aria-hidden="true">Agregar</span>
				</a>
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
		@include('support-center._list', $support_centers)
	</div>

</div>

@endsection