<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="../img/icone.png"/>
	   <title>INICIAL</title>
   </head>
   <body>
     <?php

    include 'conexao.php';

    //assegura que os acentos sejam aceitos
    $pdo->exec("set names utf8");

        //Variavel que vai receber a query
        $dados_usuario = $pdo->query("SELECT * FROM usuarios");
        foreach ($dados_usuario as $dados_u){
          $result = $dados_u['nome'];
        }

       echo "Seja bem vindo: ",$result;

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

<form method="post">
  <button name="sair" value="1">TESTE</button>
</form>





   </body>
</html>
