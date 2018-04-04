<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$dup->id_dupli}}">
	{{Form::Open(array('action'=>array('DuplicataController@destroy',$dup->id_dupli),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Apagar Duplicata?</h4>
			</div>
			<div class="modal-body">
				<p>Foi realmente pago a duplicata?</br>Descrição: {{ $dup->descricao }}</br>Fornecedor: {{ $dup->fornecedor }}</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>