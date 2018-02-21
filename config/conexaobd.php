<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexaobd
 *
 * @author Alyne
 */
class conexaobd {
    private $localhost;
    private $root;
    private $password;
    private $bd_name;
    private $PDO;

    public function setLocalhost($localhost) {
        $this->localhost = $localhost;
    }

    public function setRoot($root) {
        $this->root = $root;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setBd_name($bd_name) {
        $this->bd_name = $bd_name;
    }

    public function setPDO($PDO) {
        $this->PDO = $PDO;
    }


    public function __construct($localhost, $root, $password, $bd_name){

         $this->localhost = $localhost;
         $this->root = $root;
         $this->password = $password;
         $this->bd_name = $bd_name;


    }

   public function conecta(){
	try{
            $this->PDO = new PDO("mysql:host=$this->localhost;dbname=$this->bd_name",$this->root,$this->password);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->PDO;
	}
	catch(PDOException $e){
		echo "Erro ao conectar ao MYSQL:".$e->getMessage();
	}
   }
}

?>
