<?php
    class Home{
        function menu(){
            echo"
         <!DOCTYPE HTML>
<html lang='pt-br'>
<head>
    <title>Menu</title>


    <link rel='stylesheet' type='text/css'  href='Home.css' />

</head>
<body>
	<ul id='menu'>
		                <li><a href='Produto/lista'>Listar Produto</a></li>
                    <li><a href='Produto/novo'>Cadastrar Produto</a></li>
                    <li><a href='Produto/update'>Atualizar Produto</a></li>
                    <li><a href='Produto/delete'>Deletar Produto</a></li>
</ul>




</body>
</html>";

        }
    }
