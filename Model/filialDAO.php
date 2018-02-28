<?php
 require_once 'config/conexaobd.php';
 require_once 'Model/filial.php';
class filialDAO {


    public function retornatudo(){
        $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
        $PDO = $conexao->conecta();
        $stmt = $PDO->query("SELECT * FROM filiais");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        for($i = 0; $i < $stmt->rowCount(); $i++){
            $filial[$i] = new filial();
            $filial[$i]->setNome($result[$i]['nome']);
            $filial[$i]->setIdFilial($result[$i]['idFilial']);
            $filial[$i]->setRua($result[$i]['rua']);
            $filial[$i]->setNumero($result[$i]['numero']);
            $filial[$i]->setBairro($result[$i]['bairro']);
            $filial[$i]->setComplemento($result[$i]['complemento']);

        }
        return $filial;
    }

    public function inserir ($fili){

        $nome = $fili->getNome();
        $idFilial = $fili->getIdFilial();
        $rua = $fili->getRua();
        $numero = $fili->getNumero();
        $bairro = $fili->getBairro();
        $complemento = $fili->getComplemento();

        $q = "INSERT INTO filiais(nome, rua, numero, bairro, complemento)
              VALUES('$nome',  '$rua', $numero, '$bairro', '$complemento')";
        $conex = new conexaobd("localhost:3306", "root", "", "siscomf");
        $pdo = $conex->conecta();
        $stmt = $pdo->query($q);

    }

    public function excluir ($fili){

        $idFilial = $fili->getIdFilial();

        $q = "delete from filiais where idFilial = $idFilial";
        $conex = new conexaobd("localhost:3306", "root", "", "siscomf");
        $pdo = $conex->conecta();
        $stmt = $pdo->query($q);
    }


     function atualizarFili($fili){
            $nome=$fili->getNome();
            $idFilial=$fili->getIdFilial();
            $rua=$fili->getRua();
            $numero=$fili->getNumero();
            $bairro=$fili->getBairro();
            $complemento=$fili->getComplemento();


            $q = "UPDATE filiais SET nome='$nome', rua='$rua', numero='$numero', bairro='$bairro', complemento='$complemento'
                  WHERE idFilial=$idFilial";

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
