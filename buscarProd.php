<!DOCTYPE html>
<html>
  <head>
    <title>Siscomf</title>
                     <meta charset='UTF-8'>
                     <link rel='stylesheet' type='text/css' href='../View/Css/produto.css'>
						<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
	<script src='Java Script/validator.min.js'></script>

    <title>Siscomf</title>

</head>
   <body>
   <nav class=' navbar-inverse'>
  <div class='container-fluid'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='#'>Siscomf | Produtos</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
	  <li class='active'><a href='Home.php'>Home</a></li>
        <li class='active'><a href='Produto/lista'>Listar<span class='sr-only'>(current)</span></a></li>
        <li class='active'><a href='buscarProd.php'>Buscar</a></li>
		<li class='active'><a href='Produto/novo'>Cadastrar</a></li>
		<li class='active'><a href='Produto/update'>Alterar</a></li>
        <li class='active'><a href='Produto/delete'>Excluir</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	 <div class='container'>

			<div class='container'>

		<div class='panel-body'></div>

		<div class='row'>
		<div class='col-sm-3'></div>
		<div class='col-sm-6'>
		<h2> Procurar Produto</h2>
		</div>
		</div>
		</div>
					<form action='mostra.php' method='POST' data-toggle='validator'>
					<div class='form-group col'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>



					<div class='form-group'>
						<input type='text' autofocus name='nome' id='nome' class='form-control' placeholder='Insira o nome ou codigo do produto' data-error='Por favor, informe um Id.' required>
						<div class='help-block with-errors'></div>
					</div>


                 <div class='form-group'>
						<div class='col-sm-9'>
						<button type='submit' class='btn btn-success pull-right' >Consultar</button>
						</div>
						<div class='col-sm-3'>
						<button type='reset' class='btn btn-danger pull-left'>Cancelar</button>
						</div>
					</div>
					</div>

                  </form>
                  </div>

	 <div class='panel-footer navbar-fixed-bottom' align='center'>
	<h6>@Copyright 2018 - CajuWEB</h6>
	</div>

   </body>
</html>
