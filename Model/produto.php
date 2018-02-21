<?php

    require_once 'config/conexaobd.php';

class produto {

    private $codBarras;
    private $nomeProd;
    private $fabricante;
    private $precoProd;
    private $qtdProd;
    private $dataCompra;
    private $dataValidade;
    private $categoria;
    private $idProd;

//get
    public function getCodBarras() {
        return $this->codBarras;
    }

    public function getNomeProd() {
        return $this->nomeProd;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function getPreçoProd() {
        return $this->precoProd;
    }

    public function getQtdProd() {
        return $this->qtdProd;
    }

    public function getDataCompra() {
        return $this->dataCompra;
    }

    public function getDataValidade() {
        return $this->dataValidade;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getIdProd() {
        return $this->idProd;
    }

//set
    public function setCodBarras($codBarras) {
        $this->codBarras = $codBarras;
    }

    public function setNomeProd($nomeProd) {
        $this->nomeProd = $nomeProd;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    public function setPrecoProd($precoProd) {
        $this->precoProd = $precoProd;
    }

    public function setQtdProd($qtdProd) {
        $this->qtdProd = $qtdProd;
    }

    public function setDataCompra($dataCompra) {
        $this->dataCompra = $dataCompra;
    }

    public function setDataValidade($dataValidade) {
        $this->dataValidade = $dataValidade;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setIdProd($idProd){
        $this->idProd = $idProd;
    }

    public function setProduto($codBarras, $nomeProd, $fabricante, $precoProd, $qtdProd, $dataCompra, $dataValidade, $categoria, $idProd){
        $this->codBarras = $codBarras;
        $this->nomeProd = $nomeProd;
        $this->fabricante = $fabricante;
        $this->precoProd = $precoProd;
        $this->qtdProd = $qtdProd;
        $this->dataCompra = $dataCompra;
        $this->dataValidade = $dataValidade;
        $this->categoria = $categoria;
        $this->idProd = $idProd;

    }

    public function __construct() {

        $n_args = (int) func_num_args();
        $args = @func_get_arg();

        if($n_args ==0){
          $this->codBarras = " ";
          $this->nomeProd = " ";
          $this->fabricante = " ";
          $this->precoProd = " ";
          $this->qtdProd = " ";
          $this->dataCompra = " ";
          $this->dataValidade = " ";
          $this->categoria = " ";
          $this->idProd = " ";

        }
        if($n_args == 8){
          $this->codBarras = $args[0];
          $this->nomeProd = $args[1];
          $this->fabricante = $args[2];
          $this->precoProd = $args[3];
          $this->qtdProd = $args[4];
          $this->dataCompra = $args[5];
          $this->dataValidade = $args[6];
          $this->categoria = $args[7];
          $this->idProd = $args[8];

        }
    }

    public function consultProd($nomeProd){
        $conexao = new conexaobd("localhost", "root", "", "siscomf");
        $PDO = $conexao->conecta();
        $stmt = $PDO->query("select * from produtos where nome = '$nomeProd'");
        $result = $stmt->fetchAll($PDO::FETCH_ASSOC);
        $this->setCodBarras($result['codBarras']);
        $this->setNomeProd($result['nomoProd']);
        $this->setFabricante($result['fabricante']);
        $this->setPrecoProd($result['precoProd']);
        $this->setQtdProd($result['qtdProd']);
        $this->setDataCompra($result['dataCompra']);
        $this->setDataValidade($result['dataValidade']);
        $this->setCategoria($result['categoria']);
        $this->setIdProd($result['idProd']);

    }

}

?>
