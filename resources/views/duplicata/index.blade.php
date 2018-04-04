@extends('layouts.admin')
@section('notify')

@foreach ($duplicata as $dup)

               @php($diferenca = strtotime($dup->data_venc) - strtotime(date('Y/m/d', strtotime('+0 days'))) )
                                        @php($dias = floor($diferenca / (60 * 60 * 24)) )

                                        @if($dias < 7)
                                            @php($classe = "Atenção!")
                                        @endif

				
				
				@include('duplicata.modal')
				@endforeach
				<button> {{$classe}}
				</button>

@stop
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Duplicatas <a href="duplicata/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('duplicata.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Descrição</th>
					<th>Valor</th>
					<th>Fornecedor</th>
                    <th>Status do Vencimento</th>
					<th>Data de Vencimento</th>
				</thead>
               @foreach ($duplicata as $dup)

               @php($diferenca = strtotime($dup->data_venc) - strtotime(date('Y/m/d', strtotime('+0 days'))) )
                                        @php($dias = floor($diferenca / (60 * 60 * 24)) )

                                        @if($dias >=7)
                                            @php($classe = "success")
                                            @php($dias = $dias." dias")

                                        @elseif($dias > 3 and $dias < 7)
                                            @php($classe = "warning")
                                            @php($dias = $dias." dias")

                                        @elseif($dias > 0 and $dias <= 3)
                                            @php($classe = "danger")
                                            @php($dias = $dias." dias")

                                        @elseif ($dias == 0)
                                            @php($classe = "danger")
                                            @php($dias = "Hoje")

                                        @elseif($dias < 0)
                                            @php($classe = "active")
                                            @php($dias = "Já venceu")

                                        @else
                                            @php($classe = "")
                                            @php($dias = $dias." dias")

                                        @endif

				<tr class="{{$classe}}">
					<td>{{ $dup->id_dupli}}</td>
					<td>{{ $dup->descricao}}</td>
					<td>{{ $dup->valor}}</td>
					<td>{{ $dup->fornecedor}}</td>
					<td>{{$dias}}</td>
					<td>{{ $dup->data_venc}}</td>
					<td>
						<a href="{{URL::action('DuplicataController@edit',$dup->id_dupli)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$dup->id_dupli}}" data-toggle="modal"><button class="btn btn-danger">Pagar</button></a>
					</td>
				</tr>
				
				@include('duplicata.modal')
				@endforeach
			</table>
		</div>
		{{$duplicata->render()}}
	</div>
</div>
@stop