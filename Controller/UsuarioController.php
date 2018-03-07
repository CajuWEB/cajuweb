<?php

class UsuarioController{

    public function __construct() {
        require_once('Model/usuario.php');
        require_once('Model/usuarioDAO.php');
        require_once('View/UsuarioView.php');
    }

    public function lista(){
        $fDAO = new usuarioDAO();
        $lista = $fDAO->retornatudo();
        $_REQUEST['lista'] = $lista;
        $fView = new UsuarioView();
        $fView->listaTudo();
    }

    public function CadastrarUser(){
        if($_SERVER['REQUEST_METHOD']==='POST'){

        $user = new usuario();
        $user->setNome($_POST['nome']);
        $user->setLogin($_POST['login']);
        $user->setSenha($_POST['senha']);



        $uDAO = new usuarioDAO();
        $uDAO->inserir($user);
        echo "<script>alert('Usuario CADASTRADO')</script>";
        echo"<script> history.go(-1)</script>";

        }
    }
    public function novo(){
        $uView = new UsuarioView();
        $uView->inserirUsuario();


    }

    function atualizar(){
             $uDAO = new usuarioDAO();
             $lista = $uDAO->retornatudo();
             $_REQUEST['lista']=$lista;
             //$lista = $pDAO->retornatudo();
             //$_REQUEST['lista'] = $lista;

              $user= new usuario();
              if($_SERVER['REQUEST_METHOD']=='POST'){
                $user->setNome($_POST['nome']);
                $user->setLogin($_POST['login']);
                $user->setSenha($_POST['senha']);
                $user->setId_usuarios($_POST['id_usuarios']);

                $uDAO = new usuarioDAO();
                $uDAO->atualizarUser($user);

                echo "<script>alert('Usuario ATUALIZADO')</script>";
                echo"<script> history.go(-1)</script>";

            }
        }
         function update(){
            $uVIEW = new UsuarioView();
            $uVIEW->atualizarUser();
          }

          function delete(){
            $uVIEW = new UsuarioView();
            $uVIEW->deletarUser();
          }

          function deletar(){
            $user= new usuario();
              if($_SERVER['REQUEST_METHOD']=='POST'){

                $user->setId_usuarios($_POST['id_usuarios']);

                $uDAO = new usuarioDAO();
                $uDAO->excluir($user);
                echo "<script>alert('Usuario DELETADO')</script>";
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
