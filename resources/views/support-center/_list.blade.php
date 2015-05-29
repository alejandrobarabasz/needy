@if (!empty($q))
	<div class="alert alert-info alert-dismissible" role="info">
	  	<a 	href="{{ action('SupportCenterController@index') }}" 
	  	 	type="button" 
	  	 	class="close" 
	  	 	data-dismiss="alert" 
	  	 	aria-label="Close">
	  	 		<span aria-hidden="true">&times;</span>
		</a>

	  Buscando <strong>'{{ $q }}'</strong>
	</div>
@endif

@if ($support_centers->count() < 1)
	<h3 class='no-results'>No se encontraron registros</h3>
@else

	@foreach ($support_centers as $support_center)
		<div class='radius-5 row'>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<span class="radius-5 chk">
					<input type="checkbox" aria-label="">
				</span>
				<img class="img-responsive center-block img-thumbnail" src="/img/c-a.jpg" />
			</div>
			<div class="col-sm-10 col-md-10 col-lg-10">
				<div class='controls'>
					<a href="{{ action('SupportCenterController@edit', array('id' => $support_center->id)) }}" class='radius-5 edit'></a>
					<a href="{{ action('SupportCenterController@destroy', array('id' => $support_center->id)) }}" class='radius-5 remove'></a>
				</div>
				<a href="{{ action('SupportCenterController@show', array('id' => $support_center->id)) }}">
					<h2>{{ $support_center->name }}</h2>
				</a>
				<div class="row">
					<label class="col-sm-12 col-md-12 col-lg-12"><b>Dirección: </b>{{ $support_center->address }}</label>
					<label class="col-sm-6 col-md-6 col-lg-6"><b>Teléfono: </b>{{ $support_center->phones }}</label>
					<label class="col-sm-6 col-md-6 col-lg-6"><b>Correo electrónico: </b>{{ $support_center->emails }}</label>
				</div>
			</div>
		</div>    
	@endforeach

	<nav class="pager" data-target=".items">
		<?= $support_centers->render() ?>
	</nav>
@endif