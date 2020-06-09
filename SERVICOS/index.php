

<!DOCTYPE html>
<html>
<head>
	<title>S.O.S TEC</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
<body onload="mostraPatio()">
<div class="container">
	
	<div class="header clearfix text-center">
		<h2>S.O.S TEC <small></small></h2>
	</div>
	
	<div class="jumbotron">
		<form id="formulario">
		<div id="aviso"></div>
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" class="form-control" name="" id="modeloVeiculo" placeholder="Digite o nome do cliente...">
			</div>
			<div class="form-group">
				<label>Contato Cliente:</label>
				<input type="text" class="form-control" name="" id="ContatoCliente" placeholder="Digite numero de contato do cliente...">
			</div>
			<div class="form-group">
				<label>Detalhes:</label>
				<input type="text" class="form-control" name="" id="placaVeiculo" placeholder="Digite o modelo e data do conserto...">
			</div>
			<div class="form-group">
				<label>Valido até:</label>
				<input type="text" class="form-control" name="" id="Validoate" placeholder="Digite o prazo de validade do serviço...">
			</div>
			<div class="form-group">
				<label>Laudo Técnico:</label>
				<input type="text" class="form-control" name="" id="LaudoTecnico" placeholder="Digite o que foi alterado no aparelho...">
			</div>
			<button type="submit" class="btn btn-primary">Adicionar</button>
		</form>
	</div>

	<div class="row marketing">
		<div class="col-lg-12">
		 <table class="table table-hover" >
		    <thead>
		      <tr>
		        <th>Nome</th>
		        <th>Contato Cliente</th>
		        <th>Detalhes</th>
		        <th>Valido</th>
		        <th>Laudo Ténico</th>
		        <th>Entrada</th>
		        <th>Finalizar</th>
		      </tr>
		    </thead>
		    <tbody id="resultados">
		    </tbody>
		 </table>
		</div>
	</div>
</div>
 	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>