<?php

class ProdutoController{

    public function __construct() {
        require_once('Model/produto.php');
        require_once('Model/produtoDAO.php');
        require_once('View/ProdutoView.php');
    }

    public function lista(){
        $pDAO = new produtoDAO();
        $lista = $pDAO->retornatudo();
        $_REQUEST['lista'] = $lista;
        $pView = new ProdutoView();
        $pView->listaTudo();
    }

    public function CadastrarProd(){
        if($_SERVER['REQUEST_METHOD']==='POST'){

        $prod = new produto();
        $prod->setNomeProd($_POST['nomeProd']);
        $prod->setCodBarras($_POST['codBarras']);
        $prod->setFabricante($_POST['fabricante']);
        $prod->setPrecoProd($_POST['precoProd']);
        $prod->setQtdProd($_POST['qtdProd']);
        $prod->setDataCompra($_POST['dataCompra']);
        $prod->setDataValidade($_POST['dataValidade']);
        $prod->setCategoria($_POST['categoria']);

        $pDAO = new produtoDAO();
        $pDAO->inserir($prod);
        echo "<script>alert('Produto CADASTRADO')</script>";
        echo"<script> history.go(-1)</script>";

        }
    }
    public function novo(){
        $pView = new ProdutoView();
        $pView->inserirProduto();


    }

    function atualizar(){
             $pDAO = new produtoDAO();
             $lista = $pDAO->retornatudo();
             $_REQUEST['lista']=$lista;
             //$lista = $pDAO->retornatudo();
             //$_REQUEST['lista'] = $lista;

              $prod= new produto();
              if($_SERVER['REQUEST_METHOD']=='POST'){
                $prod->setNomeProd($_POST['nomeProd']);
                $prod->setCodBarras($_POST['codBarras']);
                $prod->setFabricante($_POST['fabricante']);
                $prod->setPrecoProd($_POST['precoProd']);
                $prod->setQtdProd($_POST['qtdProd']);
                $prod->setDataCompra($_POST['dataCompra']);
                $prod->setDataValidade($_POST['dataValidade']);
                $prod->setCategoria($_POST['categoria']);
                $prod->setIdProd($_POST['idProd']);

                $pDAO = new produtoDAO();
                $pDAO->atualizarProd($prod);

                echo "<script>alert('Produto ATUALIZADO')</script>";
                echo"<script> history.go(-1)</script>";

            }
        }
         function update(){
            $pVIEW = new produtoView();
            $pVIEW->atualizarProd();
          }

          function delete(){
            $pVIEW = new produtoView();
            $pVIEW->deletarProd();
          }

          function deletar(){
            $prod= new produto();
              if($_SERVER['REQUEST_METHOD']=='POST'){

                $prod->setIdProd($_POST['idProd']);

                $pDAO = new produtoDAO();
                $pDAO->excluir($prod);
                echo "<script>alert('Produto DELETADO')</script>";
                echo"<script> history.go(-1)</script>";

          }
          }



          public function consulta(){
              $pDAO = new produtoDAO();
              $lista = $pDAO->retornaProd();
              $_REQUEST['lista'] = $lista;
              $pView = new ProdutoView();
              $pView->consultarProd();

          }

          function consultar(){
            $prod= new produto();
              if($_SERVER['REQUEST_METHOD']=='POST'){

                $prod->setNomeProd($_POST['nomeProd']);

                $pDAO = new produtoDAO();
                $pDAO->buscar($prod);
                echo "<script>alert('Produto Buscado')</script>";
                //echo"<script> history.go(-2)</script>";
                //$nomeProd = $stmt['nomeProd'];

            }
          }



}
