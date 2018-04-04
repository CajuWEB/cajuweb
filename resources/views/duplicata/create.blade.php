@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nova Duplicata</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'duplicata','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            
            <div class="form-group">
            	<label for="descricao">Descrição</label>
            	<input type="text" name="descricao" class="form-control" placeholder="Descrição...">
            </div>
            <div class="form-group">
            	<label for="Fornecedor">Fornecedor</label>
            	<input type="text" name="fornecedor" class="form-control" placeholder="Fornecedor...">
            </div>
            <div class="form-group">
            	<label for="valor">Valor</label>
            	<input type="text" name="valor" class="form-control" placeholder="Valor...">
            </div>
            <div class="form-group">
            	<label for="data_venc">Data de Vencimento</label>
            	<input type="date" name="data_venc" class="form-control" placeholder="Nome...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop