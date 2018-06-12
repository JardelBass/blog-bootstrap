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
	<!--estrutura de controle das paginas-->
	<?php 
	
	//incluido aquivo de coneção 
	include_once("app/db/conecta.php");
	//incluido aquivo de controle de MSM do USUARIO para ADMIN 
	include_once("app/helpers/cadastro-footer.php");
	
	////DIV container do NAV 
	echo '<div id="nav">';
		include_once("app/views/header.php");
	echo '</div>';
	
	//verificando se tem método $_GET e tradando as ação de acordo com nome do $_GET 
	if(isset($_GET['equipe'])){
		//DIV container do EQUIPE 
		echo '<div id="sobre">';
			//incluido apgina equipe
			include_once("app/views/equipe.php");
		echo '</div>';
		
	}else if(isset($_GET['lista'])){
		//DIV container do LISTA 
		echo '<div id="lista">';
			//incluido pagina com todos postagem
			include_once("app/views/lista.php");
		echo '</div>';
		
	}else{
		//DIV container do conteúdo SITE
		echo '<div id="conteudo">';
			//incluido arquivo de controle das ação da pagina aticle 
			include_once("app/helpers/post-index.php");
			//incluido pagina aticle 
			include_once("app/views/aticle.php");
		echo '</div>';
	}
	?>
</body>
</html>