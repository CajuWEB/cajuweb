<?php
require_once 'config/conexaobd.php';

class ProdutoView{

    private function cab(){
          echo"

                <html lang='pt-br'>
                    <head>
                        <title>WF Livros</title>
                        <meta charset='UTF-8'>
                        <link rel='stylesheet' type='text/css' href='../View/Css/produto.css'>

                    </head>
                    <body>";
    }

    private function roda(){
        echo "</body>
            </html>";
    }

    public function listaTudo(){
        $this->cab();
        $lista = $_REQUEST['lista'];
        foreach ($lista as $linha){
            $codBarras = $linha->getCodBarras();
            $nomeProd = $linha->getNomeProd();
            $fabricante = $linha->getFabricante();
            $precoProd = $linha->getPreçoProd();
            $qtdProd = $linha->getQtdProd();
            $dataCompra = $linha->getDataCompra();
            $dataValidade = $linha->getDataValidade();
            $categoria = $linha->getCategoria();


            echo "
                <figure class='foto-legenda' >

                    <img src = '../img/$nomeProd' width='250' height='300';>
                    <figcaption>

                        <p clas= 'desc'>$codBarras</p>
                    </figcaption>
                    <h3>$nomeProd</h3>
                    <h5 id='titulo'style='margin-top:-10px;'>R$=$precoProd</h5>
                </figure>";
                    }
        $this->roda();
    }

    public function inserirProduto(){
        $this->cab();

        echo "
    <div id='mostra'>
        <form method='POST' action='index.php'>
            <fieldset>
            <legend>Grave um novo Produto</legend>

            <label for='nomeProd'> Nome: </label>
            <input type='text' name='nomeProd' id='nomeProd' class='credo'/><br/><br/>

            <label for='codBarras'> Codigo: </label>
            <input type='text' name='codBarras' id='codBarras' class='credo'/><br/><br/>

            <label for='fabricante'> Fabricante: </label>
            <input type='text' name='fabricante' id='fabricante' class='credo'/><br/><br/>

            <label for='precoProd'>PREÇO : </label>
            <input type='text' name='precoProd' id='precoProd' class='credo'/><br/><br/>

            <label for='qtdProd'> quantidade: </label>
            <input type='text' name='qtdProd' id='qtdProd' class='credo'/><br/><br/>

            <label for='dataCompra'> dataCompra: </label>
            <input type='text' name='dataCompra' id='dataCompra' class='credo'/><br/><br/>

            <label for='dataValidade'> dataValidade: </label>
            <input type='text' name='dataValidade' id='dataValidade' class='credo'/><br/><br/>

            <label for='categoria'> categoria: </label>
            <input type='text' name='categoria' id='categoria' class='credo'/><br/><br/>

        <input type='hidden' name='classe' value='Produto'>
        <input type='hidden' name='metodo' value='CadastrarProd'>
        <button type='submit' id='but'>Inserir</button>
        <button type='reset' id='but'>Limpar</button>
        </form>
    </div>";
        $this->roda();

    }
   public function atualizarProd(){

            $this->cab();

            echo "<div class='tabelas'><div id='mostra'>
                  <form action='index.php' method='POST' class='formulario'>
                  <fieldset>
                  <legend>Atualize o Produto</legend>
                  <label for='idProd'> id: </label>
                  <input type='text' name='idProd' id='idProd' class='credo'/><br/><br/>

                  <label for='nomeProd'> Nome: </label>
                  <input type='text' name='nomeProd' id='nomeProd' class='credo'/><br/><br/>

                  <label for='codBarras'> Codigo: </label>
                  <input type='text' name='codBarras' id='codBarras' class='credo'/><br/><br/>

                  <label for='fabricante'> Fabricante: </label>
                  <input type='text' name='fabricante' id='fabricante' class='credo'/><br/><br/>

                  <label for='precoProd'>PREÇO : </label>
                  <input type='text' name='precoProd' id='precoProd' class='credo'/><br/><br/>

                  <label for='qtdProd'> quantidade: </label>
                  <input type='text' name='qtdProd' id='qtdProd' class='credo'/><br/><br/>

                  <label for='dataCompra'> dataCompra: </label>
                  <input type='text' name='dataCompra' id='dataCompra' class='credo'/><br/><br/>

                  <label for='dataValidade'> dataValidade: </label>
                  <input type='text' name='dataValidade' id='dataValidade' class='credo'/><br/><br/>

                  <label for='categoria'> categoria: </label>
                  <input type='text' name='categoria' id='categoria' class='credo'/><br/><br/>

                  <input type='hidden' name='classe' value='produto'>
                  <input type='hidden' name='metodo' value='atualizar'>
                  <input type='submit' value='ENVIAR' id='but'>
                  <input type='reset' value='APAGAR' id='but'>
                  </fieldset>
                  </form>
                  </div></div>";
                  $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
                  $PDO = $conexao->conecta();
                  $stmt = $PDO->query("select * from produtos");
                  echo "<div class='tabelas'><table  class='tabela'>
                            <tr>
                                <td class='nome1'>NOME</td>
                                <td class='des1'>FABRICANTE</td>
                                <td class='cod1'>DATA DE COMPRA</td>
                                <td class='preco1'>DATA DE VALIDADE</td>
                                <td class='qtd1'>QTD</td>
                                <td class='img1'>ID</td>
                            </tr>
                        </table></div> ";
                  while ($result2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<div class='tabelas'><table >
                                <tr>
                                    <td class='nome'>$result2[nomeProd]</td>
                                    <td class='des'>$result2[fabricante]</td>
                                    <td class='cod'>$result2[dataCompra]</td>
                                    <td class='preco'>R$: $result2[dataValidade]</td>
                                    <td class='qtd'>$result2[qtdProd]</td>
                                    <td class='img'>$result2[idProd]</td>
                                </tr>


                            </table></div>";
                  }

            $this->roda();
        }

         public function deletarProd(){
            $this->cab();

            echo "<div class='tabelas'><div id='mostra'>
                <form action='index.php' method='POST'>
                <fieldset>
                  <legend>Apague um Produto</legend>

                  <label for='idProd'>codigo:</label>
                  <input type='text' name='idProd' id='idProd' class='credo'><br/>


                  <input type='hidden' name='classe' value='produto'>
                  <input type='hidden' name='metodo' value='deletar'>
                  <input type='submit' value='Apagar' id='but'>
                  <input type='reset' value='Limpar' id='but'>
                  </fieldset>
                  </form>
                  </div></div>";

                  $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
                  $PDO = $conexao->conecta();
                  $stmt = $PDO->query("select * from produtos");
                  echo "<div class='tabelas'><table  class='tabela'>
                            <tr>
                                <td class='nome1'>NOME</td>
                                <td class='des1'>FABRICANTE</td>
                                <td class='cod1'>PREÇO</td>
                                <td class='preco1'>DATA V</td>
                                <td class='qtd1'>DATA C</td>
                                <td class='img1'>ID</td>
                            </tr>
                        </table></div>";
                  while ($result2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<div class='tabelas'><table>
                                <tr>
                                    <td class='nome'>$result2[nomeProd]</td>
                                    <td class='des'>$result2[fabricante]</td>
                                    <td class='cod'>$result2[precoProd]</td>
                                    <td class='preco'>$result2[dataValidade]</td>
                                    <td class='qtd'>$result2[dataCompra]</td>
                                    <td class='img'>$result2[idProd]</td>
                                </tr>


                            </table></div>";
                  }


            $this->roda();
        }


        //consulta
        public function consultarProd(){
           $this->cab();

           echo "<div class='tabelas'><div id='mostra'>
               <form action='index.php' method='POST'>
               <fieldset>
                 <legend>Busque um produto</legend>

                 <label for='nomeProd'>nome:</label>
                 <input type='text' name='nomeProd' id='nomeProd' class='credo' value='igor'><br/>


                 <input type='hidden' name='classe' value='produto'>
                 <input type='hidden' name='metodo' value='consulta'>
                 <input type='submit' value='Consultar' id='but'>
                 <input type='reset' value='Limpar' id='but'>
                 </fieldset>
                 </form>
                 </div></div>";


                 echo "<div class='tabelas'><table  class='tabela'>
                           <tr>
                               <td class='nome1'>NOME</td>
                               <td class='des1'>FABRICANTE</td>
                               <td class='cod1'>PREÇO</td>
                               <td class='preco1'>DATA V</td>
                               <td class='qtd1'>DATA C</td>
                               <td class='img1'>ID</td>
                           </tr>
                       </table></div>



                           </table></div>
                           <h1></h1>";




           $this->roda();
       }


}
