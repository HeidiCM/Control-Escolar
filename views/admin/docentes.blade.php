@extends('layouts.master')
@section('titulo','COBAY | PLANTEL TEMAX')
@section('contenido')
	
	<!-- INICIA VUE -->
	<div id="docente">

	

 <div class="row">
	
	@include('eliminarmodal')
 	<div class="col-md-8">
 		
 	</div>
 </div>

		<div class="row">
			<div class="col-md-12">
				<div class ="card text-white bg-purple mb-4"> 
					<div class="card-header">
						<h3 >DOCENTES
						<span class="btn btn-primary btn btn-space" @click="mostrarModal()" data-bs-toggle='modal'>
							<i class="fas fa-user-plus btn-space"><i>Nuevo Docente</i></i>
						</span>
						</h3> 

						<div class="col-sm-6 input-group input-group-sm">
						<input type="text" placeholder="Escriba el nombre del docente" class="form-control" v-model="buscar">
						</div>
					</div>

					<div class="card_content">
						
							<!-- INICIO DE LA TABLA -->
				<table class="table table-bordered table-striped">
					<thead class="bg-blue">
						<th hidden="">ID DOCENTE</th>
						<th class="text-center">RFC</th>
						<th class="text-center">NOMBRES</th>
						<th class="text-center">APELLIDO PATERNO</th>
						<th class="text-center">APELLIDO MATERNO</th>
						<th class="text-center">TELEFONO</th>
						<th class="text-center">SEXO</th>
						<th class="text-center">CORREO</th>
						<th class="text-center">DIRECCION</th>
						<th class="text-center">ACCIONES</th>

					</thead>
					<tbody>
						<tr v-for="docente in filtroDocentes">
							<td hidden="">@{{docente.id_docente}}</td>
							<td class="bg-light text-center">@{{docente.rfc}}</td>
							<td class="bg-light text-justify">@{{docente.nombres}}</td>
							<td class="bg-light text-center">@{{docente.apellido_p}}</td>
							<td class="bg-light text-center">@{{docente.apellido_m}}</td>
							<td class="bg-light text-center">@{{docente.sexo}}</td>
							<td class="bg-light text-center">@{{docente.telefono}}</td>
							<td class="bg-light text-center">@{{docente.correo}}</td>
							<td class="bg-light text-justify">@{{docente.direccion}}</td>
							<td class="bg-light">
								<button class="btn btn-sm btn-success" @click="editandoDocente(docente.id_docente)">
									<i class="fas fa-pen"></i>
								</button>

								<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalEliminar">
									<i class="fas fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- FIN DE LA TABLA -->

					</div>
				
					
				</div>
			</div>  
			<!-- FIN DE COL-MD-12 -->
		</div>
	<!--Inicia Modal -->
<div class="modal fade" id="modalDocente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <h5 class="modal-title" id="exampleModalLabel" v-if="agregando==true">AGREGAR DOCENTE</h5>
		<h5 class="modal-title" id="exampleModalLabel" v-if="agregando==false">EDITAR DOCENTE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		<input type="text" class="form-group col-md-11" placeholder="Escriba el RFC" v-model="rfc">
		<input type="text" class="form-group col-md-6" placeholder="Nombres" v-model="nombres">
		<input type="text" class="form-group col-md-5" placeholder="Apellido Paterno" v-model="apellido_p">
		<input type="text" class="form-group col-md-6" placeholder="Apellido Materno" v-model="apellido_m">
		<select class="form-group col-md-5" v-model="sexo">
			<option selected >Sexo</option>
			<option value="M">M</option>
			<option value="F">F</option>
		</select>
		<input type="text" class="form-group col-md-5" placeholder="Teléfono" v-model="telefono">
		<input type="email" class="form-group col-md-6" placeholder="Correo" v-model="correo">
		<input type="text" class="form-group col-md-11" placeholder="Dirección" v-model="direccion">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-block col-sm-5 btn-space" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-block col-sm-5 btn-space" @click="guardarDocente()" v-if="agregando==true">Guardar</button>
		<button type="button" class="btn btn-success btn-block col-sm-5 btn-space" @click="actualizarDocente()" v-if="agregando==false">Guardar</button>
		</div>
    </div>
  </div>
</div>
	<!--Fin Modal-->
	</div>
	<!-- TERMINA VUE -->

	
@endsection

@push('scripts')
	<script type="text/javascript" src="js/vue-resource.js"></script>
	<script type="text/javascript" src="js/apis/apiDocente.js"></script>
@endpush
<input type="hidden" name="route" value="{{url('/')}}">