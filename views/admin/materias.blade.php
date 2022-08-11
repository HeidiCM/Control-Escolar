@extends('layouts.master')
@section('titulo','COBAY | PLANTEL TEMAX')
@section('contenido')
	
	<!-- INICIA VUE -->
	<div id="materia">

	

 <div class="row">
	
	@include('eliminarmodal')
 	<div class="col-md-8">
 		
 	</div>
 </div>

		<div class="row">
			<div class="col-md-12">
				<div class ="card text-white bg-purple mb-4"> 
					<div class="card-header">
						<h3>MATERIAS
						<span class="btn btn-primary btn btn-space" @click="mostrarModal()" data-bs-toggle='modal'>
							<i class="fas fa-user-plus btn-space"><i>Nueva Materia</i></i>
						</span>
						</h3> 

						<div class="col-sm-6 input-group input-group-sm">
						<input type="text" placeholder="Escriba el nombre de la Materia" class="form-control" v-model="buscar">
						</div>
					</div>

					<div class="card_content">
						
							<!-- INICIO DE LA TABLA -->
				<table class="table table-bordered table-striped">
					<thead class="bg-blue">
						<th hidden="">ID MATERIA</th>
						<th class="text-center">ID MATERIA</th>
						<th class="text-center">NOMBRE</th>
						<th class="text-center">GRUPOS</th>
						<th class="text-center">SEMESTRE</th>
						<th class="text-center">FORMACIÓN</th>
                        <th class="text-center">DOCENTE</th>
						<th class="text-center">ACCIONES</th>

					</thead>
					<tbody>
						<tr v-for="materia in filtroMaterias">
							<td hidden="">@{{materia.id_materia}}</td>
							<td class="bg-light text-center">@{{materia.id_materia}}</td>
							<td class="bg-light text-justify">@{{materia.nombre}}</td>
							<td class="bg-light text-center">@{{materia.grupos}}</td>
							<td class="bg-light text-center">@{{materia.semestre}}</td>
							<td class="bg-light text-center">@{{materia.formacion}}</td>
							<td class="bg-light text-center">@{{materia.docente.nombres}}</td>
							<td class="bg-light">
								<button class="btn btn-sm btn-success" @click="editandoMateria(materia.id_materia)">
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
<div class="modal fade" id="modalMateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <h5 class="modal-title" id="exampleModalLabel" v-if="agregando==true">AGREGAR MATERIA</h5>
		<h5 class="modal-title" id="exampleModalLabel" v-if="agregando==false">EDITAR MATERIA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		<input type="text" class="form-group col-md-6" placeholder="Nombre" v-model="nombre">
        <select class="form-group col-md-5" v-model="grupos">
			<option selected >Grupos</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
            <option value="A,B,C">A,B,C</option>
		</select>
		<select class="form-group col-md-5" v-model="semestre">
			<option selected >Semestre</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select>
		<select class="form-group col-md-5" v-model="formacion">
			<option selected >Formación</option>
			<option value="Básica">Básica</option>
			<option value="Especialidad">Especialidad</option>
		</select>
        <select class="form-group col-md-5" v-model="id_docente">
			<option selected v-for="docente in docentes" v.bind:value="docente.id_docente">@{{docente.nombres}}</option>
		</select>
		
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-block col-sm-5 btn-space" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-block col-sm-5 btn-space" @click="guardarMateria()" v-if="agregando==true">Guardar</button>
		<button type="button" class="btn btn-success btn-block col-sm-5 btn-space" @click="actualizarMateria()" v-if="agregando==false">Guardar</button>
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
	<script type="text/javascript" src="js/apis/apiMateria.js"></script>
@endpush
<input type="hidden" name="route" value="{{url('/')}}">