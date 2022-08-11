<!-- Alerta modal -->
<!-- Modal -->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-red">
        <h5 class="modal-title text-center" id="exampleModalLabel">¡¡ADVERTENCIA!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  		<p class="text-center">¿Está seguro de querer eliminar al docente?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-block col-sm-4 btn-space" data-dismiss="modal">Cancelar</button>
		<button type="button" class="btn btn-danger btn-block col-sm-4 btn-space" @click="confirmar(docente.rfc)">Eliminar</button>
      </div>
    </div>
  </div>
</div>