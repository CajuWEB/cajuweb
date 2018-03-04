<!DOCTYPE HTML>
<html lang='pt-br'>
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
<?php
    //saindo do sistema
      if(isset($_POST['sair'])){
      $sair = $_POST['sair'];
       if($sair==1){
           header('Location: login.php');
        }else{
           //echo "alert(nada)";
        }
      }

    ?>
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
      <a class='navbar-brand' href='#'>Siscomf | Olá</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='Produto/lista'>Gerenciar Produtos<span class='sr-only'>(current)</span></a></li>
        <li class='active'><a href='Filial/lista'>Gerenciar Filiais</a></li>
		<li class='active'><a href='Usuario/lista'>Gerenciar Usuários</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <form method="post">
	  <div class='form-group col'>
	 </li> <div class='col-sm-3'>
		<button type='submit' name="sair" value="1" class='btn btn-default btn-xs pull-right'><span class="glyphicon glyphicon-log-in"></span> Sair</button></div></li></div>
	</form>
    </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class='panel-body'></div>
<div class='col-sm-12'>
<div class='container'>

	<div class='col-sm-3'></div>
	<div class='col-sm-6'>
	<div class='form-group row'>
		<div class='form-group' align='center'>
		<h2>Bem Vindo ao Siscomf</h2>
		</div>
		
		<div class='form-group' align='center'>
		<p>O Siscomf (Sistema Comercial para Frigoríficos) foi feito pela a CajuWEB, que tem como seus integrantes, Acadêmicos
	do curso de Bacharelado de Sistemas de Informação no Instituto Federal de Ciência e Tecnologia - IFCE, Campus Cedro.</p>
		</div>

	</div>
	</div>
		
        </div>



<div class='panel-footer navbar-fixed-bottom' align='center'>
	<h6>@Copyright 2018 - CajuWEB</h6>
	</div>

</body>
</html>
