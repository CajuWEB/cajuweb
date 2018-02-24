<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="../img/icone.png"/>
	   <title>CADASTRO DE PRODUTOS</title>
   </head>

   <body>
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
         $fabricante =$dadosP['fabricante'];
         $precoProd = $dadosP['precoProd'];
         $dataCompra = $dadosP['dataCompra'];
         $dataValidade = $dadosP['dataValidade'];
         $categoria = $dadosP['categoria'];
         $id = $dadosP['idProd'];

     }

     ?>

      <h1> <?php echo $nomeProd ?></h1><br>
       <h1><?php echo $qtdProd ?></h1><br>
       <h1><?php echo $codBarras ?></h1><br>
       <h1><?php echo $fabricante ?></h1><br>
    <h1>  <?php echo $precoProd ?></h1><br>
    <h1>  <?php echo $dataCompra ?></h1><br>
    <h1>  <?php echo $dataValidade ?></h1><br>
    <h1>  <?php echo $categoria ?></h1><br>
      <h1><?php echo $id ?>



   </body>
</html>
