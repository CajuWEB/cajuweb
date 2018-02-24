
<!DOCTYPE HTML>
<html lang='pt-br'>
<head>
    <title>Menu</title>


    <link rel='stylesheet' type='text/css'  href='Home.css' />
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
</head>
<body>
	<ul id='menu'>
		                <li><a href='Produto/lista'>Listar Produto</a></li>
                    <li><a href='Produto/novo'>Cadastrar Produto</a></li>
                    <li><a href='Produto/update'>Atualizar Produto</a></li>
                    <li><a href='Produto/delete'>Deletar Produto</a></li>
</ul>

<form method="post">
  <button name="sair" value="1">TESTE</button>
</form>



</body>
</html>
