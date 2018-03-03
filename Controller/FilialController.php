<?php

class FilialController{

    public function __construct() {
        require_once('Model/filial.php');
        require_once('Model/filialDAO.php');
        require_once('View/FilialView.php');
    }

    public function lista(){
        $fDAO = new filialDAO();
        $lista = $fDAO->retornatudo();
        $_REQUEST['lista'] = $lista;
        $fView = new filialView();
        $fView->listaTudo();
    }

    public function CadastrarFilial(){
        if($_SERVER['REQUEST_METHOD']==='POST'){

        $fili = new filial();
        $fili->setNome($_POST['nome']);
        $fili->setRua($_POST['rua']);
        $fili->setNumero($_POST['numero']);
        $fili->setBairro($_POST['bairro']);
        $fili->setComplemento($_POST['complemento']);



        $fDAO = new filialDAO();
        $fDAO->inserir($fili);
        echo "<script>alert('FILIAL CADASTRADO')</script>";
        echo"<script> history.go(-2)</script>";

        }
    }
    public function novo(){
        $pView = new FilialView();
        $pView->inserirFilial();


    }

    function atualizar(){
             $fDAO = new filialDAO();
             $lista = $fDAO->retornatudo();
             $_REQUEST['lista']=$lista;
             //$lista = $pDAO->retornatudo();
             //$_REQUEST['lista'] = $lista;

              $fili= new filial();
              if($_SERVER['REQUEST_METHOD']=='POST'){
                $fili->setNome($_POST['nome']);
                $fili->setIdFilial($_POST['idFilial']);
                $fili->setRua($_POST['rua']);
                $fili->setBairro($_POST['bairro']);
                $fili->setNumero($_POST['numero']);
                $fili->setComplemento($_POST['complemento']);

                $fDAO = new filialDAO();
                $fDAO->atualizarFili($fili);

                echo "<script>alert('filial ATUALIZADO')</script>";
                echo"<script> history.go(-2)</script>";

            }
        }
         function update(){
            $fVIEW = new filialView();
            $fVIEW->atualizarFili();
          }

          function delete(){
            $pVIEW = new filialView();
            $pVIEW->deletarfili();
          }

          function deletar(){
            $fili= new filial();
              if($_SERVER['REQUEST_METHOD']=='POST'){

                $fili->setIdFilial($_POST['idFilial']);

                $fDAO = new filialDAO();
                $fDAO->excluir($fili);
                echo "<script>alert('Produto DELETADO')</script>";
                echo"<script> history.go(-2)</script>";

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
