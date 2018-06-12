<!-- incluindo um aquivo de controle LOGAN -->
<?php include("app/helpers/logar.php"); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Conpotible" content="IE-edge">
  	<title>Bootstrap Blog</title>	
	<!-- Bootstrep -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--javascript de controle de pagina-->
	<script src="app/Config/routers-cont.js" type="application/javascript"></script>
	<!-- Style app-->
	<link rel="stylesheet" href="app/views/css/style.jr.css" type="text/css" media="all"/>
</head>
<body>
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- col -->
			<div class="col-sm-12">
				<!-- loge-jr -->
				<div class="loge-jr">
					<h1>Login</h1>
					<!-- form -->
					<form method="post" enctype="multipart/form-data">
						<!-- Usuário -->
						<label for="username">Usuário</label></br>
						<input type="text" id="username" name="usuario" value="" placeholder="Usuário" /></br>
						<!-- Senha -->
						<label for="password">Senha</label></br>
						<input type="password" id="password" name="senha" value="" placeholder="Senha" />
						</br>
						<!-- Botão entrar -->
						<input  id="botao-etrar-jr" type="submit" name="logar" value="Entrar"/>
					<!-- /form -->
					</form>
					<!-- <a href="app/views/recopera-senha.php">Recupera senha</a> -->
				<!-- \loge-jr -->
				</div>
			<!-- \col -->
			</div>
		<!-- /row -->
		</div>
	<!-- /container -->
	</div>
</body>
</html>