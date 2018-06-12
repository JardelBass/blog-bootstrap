<!-- incluindo um aquivo controle da se usuario esta logado ou não -->
<?php 
	include("../helpers/conf-logar.php");
	include("../helpers/logout.php");
?>
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
	<link rel="stylesheet" href="css/home.jr.css" type="text/css" media="all"/>
</head>
<body>
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- col-sm-3 -->
			<div class="col-sm-3">
				<!-- nav-jr -->
				<div class="nav-jr">
					<h1>MENU</h1>
					<!-- menu aria admin -->
					<nav>
						<ul>
							<!-- lista de link  -->
							<li id="inicio"><a href="?inicio">Inicio</a></li>
							<li class="list-cat">Cadastar</li>
							<li id="cast-user"><a href="?cad-user">Usuario</a></li>
							<li id="cast-post"><a href="?cad-post">Postagem</a></li>
							<li class="list-cat">Lista</li>
							<li id="user-list"><a href="?list-user">Usuarios</a></li>
							<li id="post-list"><a href="?list-post">Postagem</a></li>
							<li id="msm-list"><a href="?list-msm">Mensagem</a></li>
							<li class="list-sair"><a href="?sair" onClick="return confirm('Degeiga sair do systema')">Sair</a></li>
						</ul>
					</nav>
				<!-- /nav-jr -->
				</div>
			<!-- /col-sm-3 -->
			</div>
			<div class="col-sm-9">
				<?php
				//incluido aquivo de coneção 
				include_once("../db/conecta.php");
				
				//verificando se tem método $_GET e tradando as ação de acordo com nome do $_GET
				if(isset($_GET['cad-post'])){
					//incluido pagina de cadastro de postagem se $_GET for correspondente 
					include_once("cadastra-post.php");

				}else if(isset($_GET['cad-user'])){
					//incluido pagina de cadastro de usuario se $_GET for correspondente
					include_once("cadastra-user.php");

				}else if(isset($_GET['list-user'])){
					//incluido pagina de lista usuario se $_GET for correspondente
					include_once("list-user.php");

				}else if(isset($_GET['list-post'])){
					//incluido pagina de lista postagem se $_GET for correspondente
					include_once("list-post.php");

				}else if(isset($_GET['list-msm'])){
					//incluido pagina de lista MSM se $_GET for correspondente
					include_once("list-msm.php");

				}else if(isset($_GET['edit-post'])){
					//incluido pagina de editar postagem se $_GET for correspondente
					include_once("edit-post.php");
					
				}else if(isset($_GET['edit-user'])){
					//incluido pagina de editar usuario se $_GET for correspondente
					include_once("edit-user.php");
					
				}else if(isset($_GET['ler-msm'])){
					//incluido pagina de editar MSM se $_GET for correspondente
					include_once("ler-msm.php");
				}else{
					//incluido pagina de inicial se $_GET for correspondente
					include_once("dados-admin.php");
				}
				?>
			</div>
		<!-- /row -->
		</div>
	<!-- /container -->
	</div>
</body>
</html>