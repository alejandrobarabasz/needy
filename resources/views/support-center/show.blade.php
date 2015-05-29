@extends('app')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Centro de Atencion</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" action="{{ URL::route('support-center.store') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10 form-control-static">
							{{ $support_center->name }}
				        </div>
					</div>
					<div class="form-group">
						<label for="active" class="col-sm-2 control-label">Habilitado</label>
						<div class="col-sm-10 form-control-static">
							{{ $support_center->active ? "Si" : "No" }}
				        </div>
					</div>
					<div class="form-group">
						<label for="picture" class="col-sm-2 control-label">Foto</label>
						<div class="col-sm-10 form-control-static">
							@todo
				        </div>
					</div>
					<div class="form-group">
						<label for="location" class="col-sm-2 control-label">Ubicacion</label>
						<div class="col-sm-10 form-control-static">
							@todo
				        </div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2 control-label">Domicilio</label>
						<div class="col-sm-10 form-control-static">
							{{ $support_center->address }}
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
						<div class="col-sm-10 form-control-static">
							{{ $support_center->contacts }}
				        </div>
					</div>
					<div class="form-group">
						<label for="phones" class="col-sm-2 control-label">Telefono</label>
						<div class="col-sm-10 form-control-static">
							{{ $support_center->phones }}
				        </div>
					</div>
					<div class="form-group">
						<label for="emails" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10 form-control-static">
							{{ $support_center->emails }}
				        </div>
					</div>
					<div class="form-group">
						<label for="website" class="col-sm-2 control-label">Sitio Web</label>
						<div class="col-sm-10 form-control-static">
							{{ $support_center->website }}
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
