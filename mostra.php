<!DOCTYPE html>
<html>
   <head>
    <title>Siscomf</title>
                     <meta charset='UTF-8'>
                     <link rel='stylesheet' type='text/css' href='../View/Css/produto.css'>
						<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


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
     <?php
     require_once 'config/conexaobd.php';
     $conexao = new conexaobd("localhost", "root", "", "siscomf");
     $PDO = $conexao->conecta();
     $nome = $_POST['nome'];

     $dados_produtos = $PDO->query("SELECT * FROM produtos WHERE nomeProd='$nome'");

        foreach ($dados_produtos as $dadosP) {
           $nomeProd = $dadosP['nomeProd'];
           $qtdProd = $dadosP['qtdProd'];
           $codBarras = $dadosP['codBarras'];
           $fabricante = $dadosP['fabricante'];
           $precoProd = $dadosP['precoProd'];
           $dataCompra = $dadosP['dataCompra'];
           $dataValidade = $dadosP['dataValidade'];
           $categoria = $dadosP['categoria'];
           $id = $dadosP['idProd'];
       }


     ?>
<div class='container'>

		<div class='panel-body'></div>
		<div class='form-group col'>
		<h2>Produto Localizado</h2>
		</div>


		<div class='table-responsive'>
		<table class='table'>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Código de Barras</th>
    		<th>Fabricante</th>
    		<th>Preço</th>
    		<th>Data de Compra</th>
    		<th>Data de Validade</th>
    		<th>Categoria</th>
    		<th>Id</th>
      </tr>
    </thead>

                <tbody>

				<tr>
				<td><?php if(empty($nomeProd)){
                     echo "Não cadastrado";
                   }else {
                      echo $nomeProd;
                   }
             ?>
        </td>
				<td><?php if(empty($qtdProd)){
                     echo "Não cadastrado";
                   }else {
                      echo $qtdProd;
                   }
             ?>
        </td>
				<td><?php if(empty($codBarras)){
                     echo "Não cadastrado";
                   }else {
                      echo $codBarras;
                   }
             ?>
        </td>
				<td><?php if(empty($fabricante)){
                     echo "Não cadastrado";
                   }else {
                      echo $fabricante;
                   }
             ?>
        </td>
				<td><?php if(empty($precoProd)){
                     echo "Não cadastrado";
                   }else {
                      echo $precoProd;
                   }
             ?>
        </td>
				<td><?php if(empty($dataCompra)){
                     echo "Não cadastrado";
                   }else {
                      echo $dataCompra;
                   }
             ?>
        </td>
				<td><?php if(empty($dataValidade)){
                     echo "Não cadastrado";
                   }else {
                      echo $dataValidade;
                   }
             ?>
        </td>
				<td><?php if(empty($categoria)){
                     echo "Não cadastrado";
                   }else {
                      echo $categoria;
                   }
             ?>
        </td>
				<td><?php if(empty($id)){
                     echo "Não cadastrado";
                   }else {
                      echo $id;
                   }
             ?>
        </td>
				</tr>

				</tbody>


					</table></div></div>


	  <div class='panel-footer navbar-fixed-bottom' align='center'>
	<h6>@Copyright 2018 - CajuWEB</h6>
	</div>

   </body>
</html>
