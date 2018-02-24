<?php

    require_once 'config/conexaobd.php';

class usuario {

    private $nome;
    private $login;
    private $senha;
    private $id_usuarios;

//get
    public function getNome() {
        return $this->nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getId_usuarios() {
        return $this->id_usuarios;
    }


//set
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setId_usuarios($id_usuarios) {
        $this->id_usuarios = $id_usuarios;
    }


    public function setFilial($nome, $login, $senha, $id_usuarios){
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->id_usuarios = $id_usuarios;


    }

    public function __construct() {

        $n_args = (int) func_num_args();
        $args = @func_get_arg();

        if($n_args ==0){
          $this->nome = " ";
          $this->login = " ";
          $this->senha = " ";
          $this->id_usuarios = " ";

        }
        if($n_args == 4){
          //$this->nome = $args[0];
          $this->nome = $args[0];
          $this->login = $args[1];
          $this->senha = $args[2];
          $this->id_usuarios = $args[3];

        }
    }

    // public function consultFilial($nome){
    //     $conexao = new conexaobd("localhost", "root", "", "siscomf");
    //     $PDO = $conexao->conecta();
    //     $stmt = $PDO->query("select * from filiais where nome ='$nome'");
    //     $result = $stmt->fetchAll($PDO::FETCH_ASSOC);
    //     $this->setNome($result['nome']);
    //     $this->setIdFilial($result['idFilial']);
    //     $this->setRua($result['rua']);
    //     $this->setNumero($result['numero']);
    //     $this->setBairro($result['bairro']);
    //     $this->setComplemento($result['complemento']);
    //
    // }

}

?>
