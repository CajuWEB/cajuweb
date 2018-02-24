<?php
require_once 'config/conexaobd.php';

class FilialView{

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
            $nome = $linha->getNome();
            $login = $linha->getLogin();
            $senha = $linha->getSenha();

            echo "
                  <h1>$nome</h1>
                  <h1>$login</h1>
                  <h1>$senha</h1>
                 ";
                    }
        $this->roda();
    }

    public function inserirUsuario(){
        $this->cab();

        echo "
    <div id='mostra'>
        <form method='POST' action='index.php'>
            <fieldset>
            <legend>Grave uma nova filial Produto</legend>

            <label for='nome'> Nome: </label>
            <input type='text' name='nome' id='nome' class='credo'/><br/><br/>

            <label for='login'> login: </label>
            <input type='text' name='login' id='login' class='credo'/><br/><br/>

            <label for='senha'> senha: </label>
            <input type='text' name='senha' id='senha' class='credo'/><br/><br/>


        <input type='hidden' name='classe' value='Usuario'>
        <input type='hidden' name='metodo' value='CadastrarUsuario'>
        <button type='submit' id='but'>Inserir</button>
        <button type='reset' id='but'>Limpar</button>
        </form>
    </div>";
        $this->roda();

    }
   public function atualizarUsuario(){

            $this->cab();

            echo "<div class='tabelas'><div id='mostra'>
                  <form action='index.php' method='POST' class='formulario'>
                  <fieldset>

                  <legend>Atualize o Produto</legend>

                  <label for='id_usuarios'> id_usuarios: </label>
                  <input type='text' name='id_usuarios' id='id_usuarios' class='credo'/><br/><br/>

                  <label for='nome'> nome: </label>
                  <input type='text' name='nome' id='nome' class='credo'/><br/><br/>

                  <label for='login'> login: </label>
                  <input type='text' name='login' id='login' class='credo'/><br/><br/>

                  <label for='senha'> senha: </label>
                  <input type='text' name='senha' id='senha' class='credo'/><br/><br/>


                  <input type='hidden' name='classe' value='usuario'>
                  <input type='hidden' name='metodo' value='atualizar'>
                  <input type='submit' value='ENVIAR' id='but'>
                  <input type='reset' value='APAGAR' id='but'>
                  </fieldset>
                  </form>
                  </div></div>";
                  $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
                  $PDO = $conexao->conecta();
                  $stmt = $PDO->query("select * from usuarios");
                  echo "<div class='tabelas'><table  class='tabela'>
                            <tr>
                                <td class='nome1'>NOME</td>
                                <td class='des1'>login</td>
                                <td class='cod1'>senha</td>
                                <td class='img1'>ID</td>
                            </tr>
                        </table></div>";
                  while ($result2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<div class='tabelas'><table>
                                <tr>
                                    <td class='nome'>$result2[nome]</td>
                                    <td class='des'>$result2[login]</td>
                                    <td class='preco'>$result2[senha]</td>
                                    <td class='img'>$result2[id_usuarios]</td>
                                </tr>


                            </table></div>";
                  }

            $this->roda();
        }

         public function deletarUser(){
            $this->cab();

            echo "<div class='tabelas'><div id='mostra'>
                <form action='index.php' method='POST'>
                <fieldset>
                  <legend>Apague um Produto</legend>

                  <label for='id_usuarios'>codigo:</label>
                  <input type='text' name='id_usuarios' id='id_usuarios' class='credo'><br/>


                  <input type='hidden' name='classe' value='usuario'>
                  <input type='hidden' name='metodo' value='deletar'>
                  <input type='submit' value='Apagar' id='but'>
                  <input type='reset' value='Limpar' id='but'>
                  </fieldset>
                  </form>
                  </div></div>";

                  $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
                  $PDO = $conexao->conecta();
                  $stmt = $PDO->query("select * from usuarios");
                  echo "<div class='tabelas'><table  class='tabela'>
                            <tr>
                                <td class='nome1'>NOME</td>
                                <td class='des1'>login</td>
                                <td class='cod1'>senha</td>
                                <td class='img1'>ID</td>
                            </tr>
                        </table></div>";
                  while ($result2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<div class='tabelas'><table>
                                <tr>
                                    <td class='nome'>$result2[nome]</td>
                                    <td class='des'>$result2[login]</td>
                                    <td class='cod'>$result2[senha]</td>
                                    <td class='img'>$result2[id_usuarios]</td>
                                </tr>


                            </table></div>";
                  }


            $this->roda();
        }


        //consulta
       //  public function consultarProd(){
       //     $this->cab();
       //
       //     echo "<div class='tabelas'><div id='mostra'>
       //         <form action='index.php' method='POST'>
       //         <fieldset>
       //           <legend>Busque um produto</legend>
       //
       //           <label for='nomeProd'>nome:</label>
       //           <input type='text' name='nomeProd' id='nomeProd' class='credo' value='igor'><br/>
       //
       //
       //           <input type='hidden' name='classe' value='produto'>
       //           <input type='hidden' name='metodo' value='consulta'>
       //           <input type='submit' value='Consultar' id='but'>
       //           <input type='reset' value='Limpar' id='but'>
       //           </fieldset>
       //           </form>
       //           </div></div>";
       //
       //
       //           echo "<div class='tabelas'><table  class='tabela'>
       //                     <tr>
       //                         <td class='nome1'>NOME</td>
       //                         <td class='des1'>FABRICANTE</td>
       //                         <td class='cod1'>PREÇO</td>
       //                         <td class='preco1'>DATA V</td>
       //                         <td class='qtd1'>DATA C</td>
       //                         <td class='img1'>ID</td>
       //                     </tr>
       //                 </table></div>
       //
       //
       //
       //                     </table></div>
       //                     <h1></h1>";
       //
       //
       //
       //
       //     $this->roda();
       // }


}
