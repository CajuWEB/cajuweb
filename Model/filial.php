<?php

    require_once 'config/conexaobd.php';

class filial {

    private $nome;
    private $idFilial;
    private $rua;
    private $numero;
    private $bairro;
    private $complemento;

//get
    public function getNome() {
        return $this->nome;
    }

    public function getIdFilial() {
        return $this->idFilial;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getComplemento() {
        return $this->complemento;
    }
//set
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdFilial($idFilial) {
        $this->idFilial = $idFilial;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function setFilial($nome, $idFilial, $rua, $numero, $bairro, $complemento){
        $this->nome = $nome;
        $this->idFilial = $idFilial;
        $this->idCaixa = $idCaixa;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->complemento = $complemento;

    }

    public function __construct() {

        $n_args = (int) func_num_args();
        $args = @func_get_arg();

        if($n_args ==0){
          $this->nome = " ";
          $this->idFilial = " ";
          $this->rua = " ";
          $this->numero = " ";
          $this->bairro = " ";
          $this->complemento = " ";

        }
        if($n_args == 6){
          $this->nome = $args[0];
          $this->idFilial = $args[1];
          $this->rua = $args[2];
          $this->numero = $args[3];
          $this->bairro = $args[4];
          $this->complemento = $args[5];

        }
    }

    public function consultFilial($nome){
        $conexao = new conexaobd("localhost", "root", "", "siscomf");
        $PDO = $conexao->conecta();
        $stmt = $PDO->query("select * from filiais where nome ='$nome'");
        $result = $stmt->fetchAll($PDO::FETCH_ASSOC);
        $this->setNome($result['nome']);
        $this->setIdFilial($result['idFilial']);
        $this->setRua($result['rua']);
        $this->setNumero($result['numero']);
        $this->setBairro($result['bairro']);
        $this->setComplemento($result['complemento']);

    }

}

?>
