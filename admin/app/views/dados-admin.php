<!-- Css para toca cor dos botão do menu -->
<style type="text/css">
	#inicio{ border-left: 15px solid #7DA743;}
</style>
<!-- incluindo um aquivo controle da pagina -->
<?php include_once("../helpers/dados.php");?>
<!-- col-sm-12 -->
<div class="col-sm-12">
	<!-- painel-jr -->
	<div class="painel-jr">
		<h1>PAINEL DE CONTROLE</h1>
		<!-- col-sm-4 -->
		<div class="col-sm-4">
			<!-- msm-jr -->
			<div class="msm-jr">
				<a href="?list-msm">
					<h2><?= $contarMSM ?></h2>
					<p>Nova MSM</p>
				</a>
			<!-- /msm-jr -->
			</div>
		<!-- /col-sm-4 -->
		</div>
		<!-- col-sm-4 -->
		<div class="col-sm-4">
			<!-- post-jr -->
			<div class="post-jr">
				<a href="?list-post">
					<h2><?= $contarPOST ?></h2>
					<p>Postagens</p>
				</a>
			<!-- /post-jr -->
			</div>
		<!-- /col-sm-4 -->
		</div>
		<!-- col-sm-4 -->
		<div class="col-sm-4">
			<!-- post-jr -->
			<div class="user-jr">
				<a href="?list-user">
					<h2><?= $contarUSER ?></h2>
					<p>Usuarios</p>
				</a>
			<!-- /post-jr -->
			</div>
		<!-- /col-sm-4 -->
		</div>
	<!-- /painel-jr -->
	</div>
<!-- col-sm-12 -->
</div>

