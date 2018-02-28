<?php
 require_once 'config/conexaobd.php';
 require_once 'Model/usuario.php';
class usuarioDAO {


    public function retornatudo(){
        $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
        $PDO = $conexao->conecta();
        $stmt = $PDO->query("SELECT * FROM usuarios");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        for($i = 0; $i < $stmt->rowCount(); $i++){
            $usuario[$i] = new usuario();
            $usuario[$i]->setNome($result[$i]['nome']);
            $usuario[$i]->setLogin($result[$i]['login']);
            $usuario[$i]->setSenha($result[$i]['senha']);
            $usuario[$i]->setId_usuarios($result[$i]['id_usuarios']);

        }
        return $usuario;
    }


    public function inserir ($user){

        $nome = $user->getNome();
        $login = $user->getLogin();
        $senha = $user->getSenha();

        $q = "INSERT INTO usuarios(nome, login, senha)
              VALUES('$nome', '$login', '$senha')";
        $conex = new conexaobd("localhost:3306", "root", "", "siscomf");
        $pdo = $conex->conecta();
        $stmt = $pdo->query($q);

    }

    public function excluir ($user){

        $id = $user->getId_usuarios();

        $q = "delete from usuarios where id_usuarios = $id";
        $conex = new conexaobd("localhost:3306", "root", "", "siscomf");
        $pdo = $conex->conecta();
        $stmt = $pdo->query($q);
    }

    public function buscar ($prod){
        $nomeProd = $prod->getNomeProd();
        $q = "select * from produtos where nomeProd = '$nomeProd'";
        $conex = new conexaobd("localhost:3306", "root", "", "siscomf");
        $pdo = $conex->conecta();
        $stmt = $pdo->query($q);

    }

     function atualizarUser($user){
            $nome=$user->getNome();
            $login=$user->getLogin();
            $senha=$user->getSenha();
            $id=$user->getId_usuarios();

            $q = "UPDATE usuarios SET nome='$nome', login='$login', senha='$senha'
            WHERE id_usuarios=$id";

            $conex = new conexaobd("localhost:3306", "root", "", "siscomf");
            $pdo = $conex->conecta();
            $stmt = $pdo->query($q);
        }

       //retorna produto
       function retornaProd($prod){
            $nomeProd = $prod->getNomeProd();
            $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
            $PDO = $conexao->conecta();
            $stmt = $PDO->query("SELECT * FROM produtos WHERE nomeProd='$nomeProd'");
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            for($i = 0; $i < $stmt->rowCount(); $i++){
                $produto[$i] = new produto();
                $produto[$i]->setNomeProd($result[$i]['nomeProd']);
                $produto[$i]->setCodBarras($result[$i]['codBarras']);
                $produto[$i]->setFabricante($result[$i]['fabricante']);
                $produto[$i]->setPrecoProd($result[$i]['precoProd']);
                $produto[$i]->setQtdProd($result[$i]['qtdProd']);
                $produto[$i]->setDataCompra($result[$i]['dataCompra']);
                $produto[$i]->setDataValidade($result[$i]['dataValidade']);
                $produto[$i]->setCategoria($result[$i]['categoria']);

            }

            return $produto;
        }



}
