<?php
require_once 'config/conexaobd.php';

class ProdutoView{

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
  <script src='../Java Script/validator.min.js'></script>

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
      <a class='navbar-brand' id='produtos' href='#'>Siscomf | Produtos</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
	  <li class='active'><a href='../Home.php'>Home</a></li>
        <li class='active'><a href='lista'>Listar</a></li>
		<li class='active'><a href='../buscarProd.php'>Buscar</a></li>
        <li class='active'><a href='novo'>Cadastrar </a></li>
		<li class='active'><a href='update'>Alterar </a></li>
        <li class='active'><a href='delete'>Excluir </a></li>
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
		<h2>Lista de Produtos</h2>
		</div>


		<div class='table-responsive'>
		<table class='table'>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Código de Barras</th>
        <th>Fabricante</th>
		<th>Preço</th>
		<th>Quantidade</th>
		<th>Data de Validade</th>
		<th>Data de Compra</th>
		<th>Categoria</th>
      </tr>
    </thead>
	";

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
                <tbody>

				<tr>
				<td>$nomeProd</td>
				<td>$codBarras</td>
				<td>$fabricante</td>
				<td>R$ $precoProd</td>
				<td>$qtdProd</td>
				<td>$dataValidade</td>
				<td>$dataCompra</td>
				<td>$categoria</td>

				</tr>

				</tbody>
				";
                    } echo"

					</table></div></div>

					";
        $this->roda();
    }

    public function inserirProduto(){
        $this->cab();

        echo "

		<div class='container'>
		<div class='container'>

		<div class='panel-body'></div>

		<div class='col'>
		<div class='col-sm-3'></div>
		<div class='col-sm-6'>
		<h2> Cadastrar Produto</h2>
		</div>
		</div>
		</div>
		<div class='container'>
        <form id='myForm' method='POST' action='index.php' data-toggle='validator'>

			<div class='form-group col'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>
					<div class='form-group'>
						<input type='text' name='nomeProd' id='nomeProd' class='form-control' placeholder='Nome' data-error='Por favor, informe um Nome.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
						<input type='text' name='codBarras' id='codBarras' class='form-control' placeholder='Código de Barras' data-error='Por favor, informe um Código de Barras.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='fabricante' id='fabricante' placeholder='Fabricante' data-error='Por favor, informe um Fabricante.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='precoProd' id='precoProd' placeholder='Preço' data-error='Por favor, informe um Preço.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='qtdProd' id='qtdProd' placeholder='Quantidade' data-error='Por favor, informe uma Quantidade.' required>
						<div class='help-block with-errors'></div>
					</div>



					<div class='form-group'>
					<label for='dataCompra'>Data de Compra</label>

						<input type='date' class='form-control' name='dataCompra' id='dataCompra' placeholder='Data de Compra' data-error='Por favor, informe a Data de Compra.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
					<label for='dataValidade'>Data de Validade</label>
						<input type='date' class='form-control' name='dataValidade' id='dataValidade' placeholder='Data de Validade' data-error='Por favor, informe a Data de Validade.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>

						<input type='text' class='form-control' name='categoria' id='categoria' placeholder='Categoria' data-error='Por favor, informe uma Categoria.' required>
						<div class='help-block with-errors'></div>
					</div>


				<div class='form-group'>
						<input type='hidden' name='classe' value='Produto'>
						<input type='hidden' name='metodo' value='CadastrarProd'>
						<div class='form-group'>
						<div class='col-sm-9'>
						<button type='submit' class='btn btn-success pull-right'>Cadastrar</button>
						</div>
						<div class='col-sm-3'>
						<button type='reset' class='btn btn-danger pull-right'>Cancelar</button>
						</div>
						</div>
					</div>
					</div>
			</div>
		</form>

		<script>
$('#myForm').each (function(){
  this.reset();
});
</script>

		</div>
		<div class='panel-body'></div>
    </div>
    ";
        $this->roda2();

    }
   public function atualizarProd(){

            $this->cab();

            echo "<div class='container'>
		<div class='container'>

		<div class='panel-body'></div>

		<div class='col'>
		<div class='col-sm-3'></div>
		<div class='col-sm-6'>
		<h2> Alterar Produto</h2>
		</div>
		</div>
		</div>

		<div class='container'>
        <form id='myForm' method='POST' action='index.php' data-toggle='validator'>

			<div class='form-group col'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>



					<div class='form-group'>
						<input type='text' name='idProd' id='idProd' class='form-control' placeholder='Id' data-error='Por favor, informe um Id.' required>
						<div class='help-block with-errors'></div>
					</div>

					<div class='form-group'>
						<input type='text' name='nomeProd' id='nomeProd' class='form-control' placeholder='Nome' data-error='Por favor, informe um Nome.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
						<input type='text' name='codBarras' id='codBarras' class='form-control' placeholder='Código de Barras' data-error='Por favor, informe um Código de Barras.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='fabricante' id='fabricante' placeholder='Fabricante' data-error='Por favor, informe um Fabricante.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='precoProd' id='precoProd' placeholder='Preço' data-error='Por favor, informe um Preço.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
						<input type='text' class='form-control' name='qtdProd' id='qtdProd' placeholder='Quantidade' data-error='Por favor, informe uma Quantidade.' required>
						<div class='help-block with-errors'></div>
					</div>



					<div class='form-group'>
					<label for='dataCompra'>Data de Compra</label>

						<input type='date' class='form-control' name='dataCompra' id='dataCompra' placeholder='Data de Compra' data-error='Por favor, informe a Data de Compra.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>
					<label for='dataValidade'>Data de Validade</label>
						<input type='date' class='form-control' name='dataValidade' id='dataValidade' placeholder='Data de Validade' data-error='Por favor, informe a Data de Validade.' required>
						<div class='help-block with-errors'></div>
					</div>




					<div class='form-group'>

						<input type='text' class='form-control' name='categoria' id='categoria' placeholder='Categoria' data-error='Por favor, informe uma Categoria.' required>
						<div class='help-block with-errors'></div>
					</div>


				<div class='form-group'>
						<input type='hidden' name='classe' value='produto'>
						<input type='hidden' name='metodo' value='atualizar'>
						<div class='col-sm-9'>
						<button type='submit' class='btn btn-success pull-right' onclick='myFunction()'>Atualizar</button>
						</div>
						<div class='col-sm-3'>
						<button type='reset' class='btn btn-danger pull-right'>Cancelar</button>
						</div>
					</div>
					</div>
			</div>
		</form>
				<script>
$('#myForm').each (function(){
  this.reset();
});
</script>
		</div>

    </div>";
                  $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
                  $PDO = $conexao->conecta();
                  $stmt = $PDO->query("select * from produtos");
                  echo "<div class='container'>
				  <div class='panel-body'></div>
		<div class='form-group col'>
		<h2>Lista de Produtos</h2>
		</div>
				  <div class='table-responsive'>
				  <table class='table'>
				  <thead>
							<tr>
                                <th>Nome</th>
                                <th>Fabricante</th>
                                <th>Data de Compra</th>
                                <th>Data de Validade</th>
                                <th>Quantidade</th>
                                <th>Id</th>
                            </tr>
                        </thead></div></div> ";
                  while ($result2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<tbody>
                                <tr>
                                    <td>$result2[nomeProd]</td>
                                    <td>$result2[fabricante]</td>
                                    <td>$result2[dataCompra]</td>
                                    <td>$result2[dataValidade]</td>
                                    <td>$result2[qtdProd]</td>
                                    <td>$result2[idProd]</td>
                                </tr>


                            </tbody>";
                  }	echo"</table></div></div>";

            $this->roda2();
        }

         public function deletarProd(){
            $this->cab();

            echo "<div class='container'>

			<div class='container'>

		<div class='panel-body'></div>

		<div class='row'>
		<div class='col-sm-3'></div>
		<div class='col-sm-6'>
		<h2> Exclua um Produto</h2>
		</div>
		</div>
		</div>
					<form id='myForm' action='index.php' method='POST' data-toggle='validator'>
					<div class='form-group col'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>



					<div class='form-group'>
						<input type='text' name='idProd' id='idProd' class='form-control' placeholder='Insira o Id do produto' data-error='Por favor, informe um Id.' required>
						<div class='help-block with-errors'></div>
					</div>


                 <div class='form-group'>
						<input type='hidden' name='classe' value='produto'>
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
				  		<script>
$('#myForm').each (function(){
  this.reset();
});
</script>
                  </div>";

                  $conexao = new conexaobd("localhost:3306", "root", "", "siscomf");
                  $PDO = $conexao->conecta();
                  $stmt = $PDO->query("select * from produtos");
                  echo "<div class='container'>
				  <div class='panel-body'></div>
		<div class='form-group col'>
		<h2>Lista de Produtos</h2>
		</div>
				  <div class='table-responsive'>
				  <table class='table'>
				  <thead>
							<tr>
                                <th>Nome</th>
                                <th>Fabricante</th>
                                <th>Data de Compra</th>
                                <th>Data de Validade</th>
                                <th>Quantidade</th>
                                <th>Id</th>
                            </tr>
                        </thead></div></div> ";
                  while ($result2 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<tbody>
                                <tr>
                                    <td>$result2[nomeProd]</td>
                                    <td>$result2[fabricante]</td>
                                    <td>$result2[dataCompra]</td>
                                    <td>$result2[dataValidade]</td>
                                    <td>$result2[qtdProd]</td>
                                    <td>$result2[idProd]</td>
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
