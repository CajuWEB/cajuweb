<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="../img/icone.png"/>
	   <title>LOGIN</title>
   </head>
   <body>
     <?php

    include 'conexao.php';

    //assegura que os acentos sejam aceitos
    $pdo->exec("set names utf8");

    if(isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $login_escape = addslashes($login);
        $senha_escape = addslashes($senha);

        //Variavel que vai receber a query
        $result = $pdo->query("SELECT * FROM usuarios where login='$login_escape' and senha='$senha_escape'");

        $rows = $result->fetchAll();

        if($result->rowCount()==1){
          header('Location: inicial.php');
        } else {
            echo "<script type'text/javascript'>
                    alert('senha ou usuario incorreto')
                  </script>";
        }
    }
?>


<form action="login.php" method="post">
  <div id="caixalgn">
<div id="caixa">
    <div id="login"><span id="txtinput">login: </span><input class="input" name="login" type="text"><br/>
      <span id="txtinput2">Senha: </span><input class="input" name="senha" type="password"> <br/>
    <input id="botao" type="submit" value="Enviar"><br/>

</div></div>

</form>


   </body>
</html>
