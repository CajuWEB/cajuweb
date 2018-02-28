<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="../img/icone.png"/>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="estilos/loginestilo.css" rel="stylesheet">

	<script src="Java Script/loginjs.js"></script>
	
	   <title>Siscomf - Login</title>
   </head>
   <body>
     <?php

     require_once 'config/conexaobd.php';
     $conexao = new conexaobd("localhost", "root", "", "siscomf");
     $PDO = $conexao->conecta();

     //assegura que os acentos sejam aceitos
     $PDO->exec("set names utf8");

    if(isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $login_escape = addslashes($login);
        $senha_escape = addslashes($senha);

        //Variavel que vai receber a query
        $result = $PDO->query("SELECT * FROM usuarios where login='$login_escape' and senha='$senha_escape'");

        $rows = $result->fetchAll();

        if($result->rowCount()==1){
          header('Location: Home.php');
        } else {
            echo "<div class='alert alert-danger fade in'><strong>Ops!</strong> parece que o <strong>Nome</strong> ou a <strong>Senha</strong> está errada.</div>";
        }
    }
?>



<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Siscomf - Login</h1>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="login" class="sr-only">luiz</label>
                            <input type="text" name="login"  class="form-control" placeholder="Exemplo123">
                        </div>
                        <div class="form-group">
                            <label for="senha" class="sr-only">senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Mostrar senha</span>
                        </div>
                        <input type="submit" id="botao" class="btn btn-custom btn-lg btn-block" value="Entrar">
                    </form>
                    
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>CajuWEB © - 2018</p>
                            </div>
        </div>
    </div>
</footer>


   </body>
</html>
