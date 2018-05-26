<div aria-hidden="true" class="modal fade modal-slide-in-right" id="modal-delete-{{$m->id_mascota}}" role="dialog" tabindex="-1">
    {{Form::Open(array('action'=>array('MascotaController@destroy',$m->id_mascota),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        X
                    </span>
                </button>
                <h4 class="modal-title">
                    Eliminar
                </h4>
            </div>
            <div class="modal-body">
                <p>
                    Confirme si desea Eliminar
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">
                    Cerrar
                </button>
                <button class="btn btn-primary" type="submit">
                    Confirmar
                </button>
            </div>
        </div>
    </div>
    {{Form::Close()}}
</div>
