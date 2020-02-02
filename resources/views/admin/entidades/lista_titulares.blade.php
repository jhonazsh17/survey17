@extends('admin/base-admin')

@section('contenedor')
<div class="row-fluid">
	<div class="row-fluid">
		<div class="col-md-12 subtitle text-center">
			<b>Lista de Titular</b>
		</div>
	</div>
	<div class="col-md-12">
		<table class="table table-condensed table-preguntas" id="lista-entidades">
			<thead>
				<tr>
					<th class="text-center">
						Nº
					</th>
					<th class="text-center">
						Nombre de Titular
					</th>
					
					<th class="text-center">
						Opciones
					</th>
					
				</tr>
			</thead>
			<tbody>
				<?php $i=0; ?>
				
					@foreach($titulares as $titular)
                    <tr>
                        <td class="text-center">
                            {{$i=$i+1}}
                        </td>    
                        <td>
                        {{ $titular['nombre_titular'] }}
                        </td>
                        
                        <td class="text-center">
							<div class="btn-group btn-group-xs" role="group" aria-label="...">
							  <!-- <button type="button" class="btn btn-default">Left</button> -->
							  <button type="button" class="btn btn-default">
							  	<span class="glyphicon glyphicon-edit"></span>
							  </button>
							  <button type="button" class="btn btn-default">
							  	<span class="glyphicon glyphicon-trash"></span>
							  </button>
							</div>
						</td>
					</tr>
					@endforeach
				
			</tbody>
		</table>
	</div>
</div>
@endsection

@section('scripts')
	<script>
		$('#lista-entidades').DataTable({
			"language": {
	            "info": "Mostrando _START_ de _END_ de un Total de _TOTAL_ Entidades",
	            "lengthMenu": "Mostrar _MENU_ Entidades",
	            "search": "Buscar:",
	            "paginate": {
			        "first": "Primera",
			        "last": "Ultima",
			        "next": "Siguiente",
			        "previous": "Anterior"
			    },
	        }
		});
	</script>

	<script>
		

		

		
		
	</script>
@endsection