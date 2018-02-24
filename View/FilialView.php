<?php
require_once 'config/conexaobd.php';

class FilialView{

    private function cab(){
          echo"

                
                <html lang='pt-br'>
                    <head>
                        <title>Siscomf</title>
                        <meta charset='UTF-8'>
                        <link rel='stylesheet' type='text/css' href='../View/Css/produto.css'>
						<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
						<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js'></script>
						<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

                    </head>
                    <body>
					<nav class=' navbar-inverse'>
  <div class='container-fluid'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='#'>Siscomf | Filiais</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
	  <li class='active'><a href='../Home.php'>Home</a></li>
        <li class='active'><a href='lista'>Listar<span class='sr-only'>(current)</span></a></li>
        <li class='active'><a href='novo'>Cadastrar</a></li>
		<li class='active'><a href='update'>Alterar</a></li>
        <li class='active'><a href='delete'>Excluir</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
					";
    }

     private function roda(){
        echo "
		<div class='panel-footer navbar-fixed-bottom' align='center'>
	<h6>@Copyright 2018 - CajuWEB</h6>
	</div>

		</body>
            </html>";
    }
	private function roda2(){
        echo "
		<div class='panel-footer' align='center'>
	<h6>@Copyright 2018 - CajuWEB</h6>
	</div>

		</body>
            </html>";
    }

    public function listaTudo(){
        $this->cab();
        $lista = $_REQUEST['lista'];
		
       echo"<div class='container'>

		<div class='panel-body'></div>
		<div class='form-group col'>
		<h2>Lista de Filiais</h2>
		</div>


		<div class='table-responsive'>
		<table class='table'>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Rua</th>
        <th>Número</th>
		<th>Bairro</th>
		<th>Complemento</th>
		
      </tr>
    </thead>
	";

        foreach ($lista as $linha){
            $nome = $linha->getNome();
            $rua = $linha->getRua();
            $numero = $linha->getNumero();
            $bairro = $linha->getBairro();
            $complemento = $linha->getComplemento();


            echo "
                <tbody>

				<tr>
				<td>$nome</td>
				<td>$rua</td>
				<td>$numero</td>
				<td>$bairro</td>
				<td>$complemento</td>

				</tr>

				</tbody>
				";
                    } echo"

					</table></div></div>

					";
        $this->roda();
    }

    public function inserirFilial(){
        $this->cab();

        echo "
    <div class='container'>
		<div class='container'>

		<div class='panel-body'></div>

		<div class='col'>
		<div class='col-sm-3'></div>
		<div class='col-sm-6'>
		<h2> Cadastrar Filial</h2>
		</div>
		</div>
		</div>
		<div class='container'>
        <form method='POST' action='index.php'>

			<div class='form-group col'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>
					<div class='form-group'>
						<input type='text' name='nome' id='nome' class='form-control' placeholder='Nome'>
					</div>




					<div class='form-group'>
						<input type='text' name='rua' id='rua' class='form-control' placeholder='Rua'>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='numero' id='numero' placeholder='Número'>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='bairro' id='bairro' placeholder='Bairro'>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='complemento' id='complemento' placeholder='Complemento'>
					</div>



				<div class='form-group'>
						<input type='hidden' name='classe' value='Filial'>
						<input type='hidden' name='metodo' value='CadastrarFilial'>
						<div class='col-sm-9'>
						<button type='submit' class='btn btn-success pull-right'>Cadastrar</button>
						</div>
						<div class='col-sm-3'>
						<button type='reset' class='btn btn-danger pull-right'>Cancelar</button>
						</div>
					</div>
					</div>
			</div>
		</form>


		</div>
		<div class='panel-body'></div>
    </div>";
        $this->roda();

    }
   public function atualizarFili(){

            $this->cab();

            echo "<div class='container'>
		<div class='container'>

		<div class='panel-body'></div>

		<div class='col'>
		<div class='col-sm-3'></div>
		<div class='col-sm-6'>
		<h2> Alterar Filial</h2>
		</div>
		</div>
		</div>

		<div class='container'>
        <form method='POST' action='index.php'>

			<div class='form-group col'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>



					<div class='form-group'>
						<input type='text' name='idFilial' id='idFilial' class='form-control' placeholder='Id'>
					</div>

					<div class='form-group'>
						<input type='text' name='nome' id='nome' class='form-control' placeholder='Nome'>
					</div>




					<div class='form-group'>
						<input type='text' name='rua' id='rua' class='form-control' placeholder='Rua'>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='numero' id='numero' placeholder='Número'>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='bairro' id='bairro' placeholder='Bairro'>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='complemento' id='complemento' placeholder='Complemento'>
					</div>



				<div class='form-group'>
						<input type='hidden' name='classe' value='filial'>
						<input type='hidden' name='metodo' value='atualizar'>
						<div class='col-sm-9'>
						<button type='submit' class='btn btn-success pull-right' >Atualizar</button>
						</div>
						<div class='col-sm-3'>
						<button type='reset' class='btn btn-danger pull-right'>Cancelar</button>
						</div>
					</div>
					</div>
			</div>
		</form>
		</div>

    </div>";
                  $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
                  $PDO = $conexao->conecta();
                  $stmt = $PDO->query("select * from filiais");
                  echo "<div class='container'>
				  <div class='panel-body'></div>
		<div class='form-group col'>
		<h2>Lista de Filiais</h2>
		</div>
				  <div class='table-responsive'>
				  <table class='table'>
				  <thead>
							<tr>
                                <th>Nome</th>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>Complemento</th>
                                <th>Id</th>
                            </tr>
                        </thead></div></div> ";
                  while ($result2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<tbody>
                                <tr>
                                    <td>$result2[nome]</td>
                                    <td>$result2[rua]</td>
                                    <td>$result2[numero]</td>
                                    <td>$result2[bairro]</td>
                                    <td>$result2[complemento]</td>
                                    <td>$result2[idFilial]</td>
                                </tr>


                            </tbody>";
                  }	echo"</table></div></div>";
                  

            $this->roda2();
        }

         public function deletarfili(){
            $this->cab();

            echo "<div class='container'>

			<div class='container'>

		<div class='panel-body'></div>

		<div class='col'>
		<div class='col-sm-4'></div>
		<div class='col-sm-4'>
		<h2> Exclua uma Filial</h2>
		</div>
		</div>
		</div>
					<form action='index.php' method='POST'>
					<div class='form-group col'>
					<div class='col-sm-4'></div>
					<div class='col-sm-4'>



					<div class='form-group'>
						<input type='text' name='idFilial' id='idFilial' class='form-control' placeholder='Insira o Id de uma Filial'>
					</div>


                 <div class='form-group'>
						<input type='hidden' name='classe' value='filial'>
						<input type='hidden' name='metodo' value='deletar'>
						<div class='col-sm-9'>
						<button type='submit' class='btn btn-success pull-right' >Excluir</button>
						</div>
						<div class='col-sm-3'>
						<button type='reset' class='btn btn-danger pull-left'>Cancelar</button>
						</div>
					</div>
					</div>

                  </form>
                  </div>";

                  $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
                  $PDO = $conexao->conecta();
                  $stmt = $PDO->query("select * from filiais");
                  echo "<div class='container'>
				  <div class='panel-body'></div>
		<div class='form-group col'>
		<h2>Lista de Filiais</h2>
		</div>
				  <div class='table-responsive'>
				  <table class='table'>
				  <thead>
							<tr>
                                <th>Nome</th>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>Complemento</th>
                                <th>Id</th>
                            </tr>
                        </thead></div></div> ";
                  while ($result2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<tbody>
                                <tr>
                                    <td>$result2[nome]</td>
                                    <td>$result2[rua]</td>
                                    <td>$result2[numero]</td>
                                    <td>$result2[bairro]</td>
                                    <td>$result2[complemento]</td>
                                    <td>$result2[idFilial]</td>
                                </tr>


                            </tbody>";
                  }	echo"</table></div></div>";


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
