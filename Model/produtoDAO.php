<?php
 require_once 'config/conexaobd.php';
 require_once 'Model/produto.php';
class produtoDAO {


    public function retornatudo(){
        $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
        $PDO = $conexao->conecta();
        $stmt = $PDO->query("SELECT * FROM produtos");
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

    public function inserir ($prod){

        $nomeProd = $prod->getNomeProd();
        $codBarras = $prod->getCodBarras();
        $fabricante = $prod->getFabricante();
        $precoProd = $prod->getPreçoProd();
        $qtdProd = $prod->getQtdProd();
        $dataCompra = $prod->getDataCompra();
        $dataValidade = $prod->getDataValidade();
        $categoria = $prod->getCategoria();

        $q = "INSERT INTO produtos(nomeProd, qtdProd, codBarras, fabricante, precoProd, dataCompra, dataValidade, categoria)
              VALUES('$nomeProd', $qtdProd, '$codBarras', '$fabricante', $precoProd, '$dataCompra', '$dataValidade', '$categoria')";
        $conex = new conexaobd("localhost:3306", "root", "", "siscomf");
        $pdo = $conex->conecta();
        $stmt = $pdo->query($q);

    }

    public function excluir ($prod){

        $idProd = $prod->getIdProd();

        $q = "delete from produtos where idProd = $idProd";
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

     function atualizarProd($prod){
            $nomeProd=$prod->getNomeProd();
            $codBarras=$prod->getCodBarras();
            $fabricante=$prod->getFabricante();
            $precoProd=$prod->getPreçoProd();
            $qtdProd=$prod->getQtdProd();
            $dataCompra=$prod->getDataCompra();
            $dataValidade=$prod->getDataValidade();
            $categoria=$prod->getCategoria();
            $idProd=$prod->getIdProd();

            $q = "UPDATE produtos SET nomeProd='$nomeProd', qtdProd=$qtdProd, codBarras='$codBarras',
            fabricante='$fabricante', precoProd=$precoProd, dataCompra='$dataCompra',
            dataValidade='$dataValidade', categoria='$categoria'
            WHERE idProd=$idProd";

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
