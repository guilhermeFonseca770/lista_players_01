<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>TELA DE CADASTRO</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css-bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheet.css">
		<meta name="viewport" content="width=device-width , initial-scale=1">
	</head>
	<body class="centro">
		<div class="container-fluid">
			<form action="listas.html" class="form-contact" method="post">
				<br>
				<h1 class="titulo2 display-4">Cadastrar Jogador</h1>
				<div class="d-flex justify-content-center m-5">
					<div id="box" class="row p-3 justify-content-center">
						<div class="col-12 form-row">
							<div class="form-group col-sm-12">				
							    <label for="exampleInputEmail1">Nome:</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your name" required="true">	
							</div>
							<div class="form-group col-sm-12">				
							    <label for="exampleInputEmail1">Email:</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your e-mail" required="true">	
							</div>
						    <div class="form-group col-sm-12">
							    <label for="exampleInputPassword1">Senha nova:</label>
							    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Type your password" required="true">
							</div>


							<!---- SEXO --->
							<div class="form col-12 padding10">
							<label class="col control-label">Sexo:</label>
							
								<label class="radio-inline">
									<input type="radio" name="sexo" id="feminino" value="FEMININO" required="true"> Feminino
								</label>

								<label class="radio-inline">
									<input type="radio" name="sexo" id="masculino" value="MASCULINO" required="true"> Masculino
								</label>
							</div>

						
								
								<div class="form-group col-12 text-center">
									<input type="submit" value="Salvar" class="btn btn-primary mr-3" type="submit">


									<a href="listas.html" class="btn btn-primary">Cancelar</a>

							</div>
						</div>
					</div>
				</div>
			</div>
			
			<script src="css-bootstrap/js-b/jquery.slim.min.js"> </script>
			<script src="css-bootstrap/js-b/popper.min.js"> </script>
			<script src="css-bootstrap/js-b/bootstrap.min.js"> </script>
			
		</form>
	</div>
</body>
</html>