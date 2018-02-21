<?php

    require_once 'config/conexaobd.php';

class usuario {
    
    private $id_user;
    private $nome;
    private $sobrenome;
    private $data_nasc;
    private $email;
    private $end;
    private $login;
    private $senha;
    
    public function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function setData_nasc($data_nasc) {
        $this->data_nasc = $data_nasc;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setEnd($end) {
        $this->end = $end;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }


    public function setUsuario($id_user,  $nome, $sobrenome, $data_nasc, $email, $end, $login, $senha){
        $this->id_user = $id_user;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data_nasc = $data_nasc;
        $this->email = $email;
        $this->end = $end;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function __construct($id_user,  $nome, $sobrenome, $data_nasc, $email, $end, $login, $senha) {
        $this->id_user = $id_user;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data_nasc = $data_nasc;
        $this->email = $email;
        $this->end = $end;
        $this->login = $login;
        $this->senha = $senha;
    }
    
    
    
}

?>
