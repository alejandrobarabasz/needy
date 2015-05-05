@extends('app')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Nuevo Centro de Atencion</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" action="{{ URL::route('support-center.store') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" />
						</div>
					</div>
					<div class="form-group">
						<label for="active" class="col-sm-2 control-label">Habilitado</label>
						<div class="col-sm-10">
							<div class="checkbox">
								<input type="checkbox" id="active" name="active" value="1" data-toggle="toggle" data-on="Si" data-off="No" />
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="picture" class="col-sm-2 control-label">Foto</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="picture" name="picture" placeholder="Foto" />
						</div>
					</div>
					<div class="form-group">
						<label for="location" class="col-sm-2 control-label">Ubicacion</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="location" name="location" placeholder="Ubicacion" />
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2 control-label">Domicilio</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="address" name="address" placeholder="Domicilio" />
						</div>
					</div>
					<div class="form-group">
						<label for="bussiness_hours" class="col-sm-2 control-label">Horario de Atencion</label>
						<div class="col-sm-10">
							<div class="bussiness-hours"></div>
							<input type="hidden" class="form-control" id="bussiness_hours" name="bussiness_hours" placeholder="Horario de Atencion" />
						</div>
					</div>
					<div class="form-group">
						<label for="contacts" class="col-sm-2 control-label">Responsable</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="contacts" name="contacts" placeholder="Responsable" />
						</div>
					</div>
					<div class="form-group">
						<label for="phones" class="col-sm-2 control-label">Telefono</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="phones" name="phones" placeholder="Telefono" />
						</div>
					</div>
					<div class="form-group">
						<label for="emails" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="emails" name="emails" placeholder="E-mail" />
						</div>
					</div>
					<div class="form-group">
						<label for="website" class="col-sm-2 control-label">Sitio Web</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="website" name="website" placeholder="Sitio Web" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-default">Cancelar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
