@extends('layouts.master')
@section('titulo','COBAY | PLANTEL TEMAX')
@section('contenido')
	
	<!-- INICIA VUE -->
	<div id="alumno">

	

 <div class="row">
	
	@include('eliminarmodal')
 	<div class="col-md-8">
 		
 	</div>
 </div>

		<div class="row">
			<div class="col-md-12">
				<div class ="card text-white bg-purple mb-4"> 
					<div class="card-header">
						<h3 >ALUMNOS
						<span class="btn btn-primary btn btn-space" @click="mostrarModal()" data-bs-toggle='modal'>
							<i class="fas fa-user-plus btn-space"><i>Nuevo Alumno</i></i>
						</span>
						</h3> 

						<div class="col-sm-6 input-group input-group-sm">
						<input type="text" placeholder="Escriba el nombre del alumno" class="form-control" v-model="buscar">
						
						</div>
					</div>

					<div class="card_content">
						
							<!-- INICIO DE LA TABLA -->
				<table class="table table-bordered table-striped">
					<thead class="bg-blue">
						<th hidden="">ID ALUMNO</th>
						<th class="text-center">MATRICULA</th>
						<th class="text-center">NOMBRES</th>
						<th class="text-center">APELLIDO PATERNO</th>
						<th class="text-center">APELLIDO MATERNO</th>
						<th class="text-center">SEMESTRE</th>
						<th class="text-center">GRUPO</th>
						<th class="text-center">ESTADO</th>
						<th class="text-center">ACCIONES</th>

					</thead>
					<tbody>
						<tr v-for="alumno in filtroAlumnos">
							<td hidden="">@{{alumno.id}}</td>
							<td class="bg-light text-center">@{{alumno.matricula}}</td>
							<td class="bg-light text-justify">@{{alumno.nombres}}</td>
							<td class="bg-light text-center">@{{alumno.apellido_p}}</td>
							<td class="bg-light text-center">@{{alumno.apellido_m}}</td>
							<td class="bg-light text-center">@{{alumno.semestre}}</td>
							<td class="bg-light text-center">@{{alumno.grupo}}</td>
							<td class="bg-light text-center">@{{alumno.estado}}</td>
							<td class="bg-light">
								<button class="btn btn-sm btn-success" @click="editandoAlumno(alumno.id)">
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
<div class="modal fade" id="modalAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <h5 class="modal-title" id="exampleModalLabel" v-if="agregando==true">AGREGAR ALUMNO</h5>
		<h5 class="modal-title" id="exampleModalLabel" v-if="agregando==false">EDITAR ALUMNO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		<input type="text" class="form-group col-md-11" placeholder="Escriba la Matrícula" v-model="matricula">
		<input type="text" class="form-group col-md-6" placeholder="Nombres" v-model="nombres">
		<input type="text" class="form-group col-md-5" placeholder="Apellido Paterno" v-model="apellido_p">
		<input type="text" class="form-group col-md-6" placeholder="Apellido Materno" v-model="apellido_m">
		<select class="form-group col-md-5" v-model="semestre">
			<option selected >Semestre</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select>
		<select class="form-group col-md-5" v-model="grupo">
			<option selected >Grupo</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
		</select>
		<select class="form-group col-md-5" v-model="estado">
			<option selected >Estado</option>
			<option value="Regular">Regular</option>
			<option value="Iregular">Iregular</option>
			<option value="Baja">Baja</option>
			<option value="Graduado">Graduado</option>
		</select>
		
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-block col-sm-5 btn-space" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-block col-sm-5 btn-space" @click="guardarAlumno()" v-if="agregando==true">Guardar</button>
		<button type="button" class="btn btn-success btn-block col-sm-5 btn-space" @click="actualizarAlumno()" v-if="agregando==false">Guardar</button>
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
	<script type="text/javascript" src="js/apis/apiAlumno.js"></script>
@endpush
<input type="hidden" name="route" value="{{url('/')}}">