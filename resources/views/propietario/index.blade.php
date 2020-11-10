@extends('layout.plantilla')

@section('contenido')

<div class="row">
		<div class="col-md-8 col-xs-12">
			@include('propietario.search')
		</div>
		<div class="col-md-2">
			<a href="propietario/create" class="pull-right">
				<button class="btn btn-success">Crear Propietario</button>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th>Id</th>
						<th>Documento Identidad</th>
						<th>Primer Nombre- Cambio</th>
						<th>Segundo Nombre</th>
						<th>Primer Apellido</th>
						<th>Segundo Apellido</th>
						<th>Telefono</th>
						<th width="180">Opciones</th>
					</thead>
					<tbody>
						@foreach($propietarios as $propietario)
						<tr>
							<td>{{ $propietario->id }}</td>
							<td></td>
							<td>{{ $propietario->primer_nombre }}</td>
							<td>
							{{ $propietario->segundo_nombre}}
							</td>
							<td>{{ $propietario->primer_apellido }}</td>
							<td>{{ $propietario->segundo_apellido }}</td>
							<td>{{ $propietario->telefono }}</td>
							<td>
								<a href="">
									<button class="btn btn-primary">
										Actualizar
									</button>
								</a>
								<a href="" data-target="" data-toggle="modal">
									<button class="btn btn-danger">
										Eliminar
									</button>
								</a>
							</td>
						</tr>
						
						@endforeach
					</tbody>
				</table>
			</div>
	
		</div>
	</div>

@endsection