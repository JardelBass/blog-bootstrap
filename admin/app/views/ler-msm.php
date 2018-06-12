<!-- Css para toca cor dos botão do menu -->
<style type="text/css">
	#msm-list{ border-left: 15px solid #7DA743;}
</style>
<!-- incluindo um aquivo controle da pagina -->
<?php include_once("../helpers/ler-msm.php");?>
<!-- col-sm-12 -->
<div class="col-sm-12">
	<!-- painel-jr -->
	<div class="painel-jr">
		<h1>MENSAGEM <a id="ler-deleta" href="?list-msm&deleta-msm=<?=$msmR->id?>">DELETA</a><a id="ler-volta" href="?list-msm">VOLTA</a></h1>
		<!-- colo-sm-12 -->
		<div class="colo-sm-12">
			<!-- ler-msm -->
			<div class="ler-msm">
				<h3>Enviado por: <?= $msmR->nome;?></h3>
				<p>E-mail: <?= $msmR->email;?></br>Fone: <?= $msmR->fone;?></br>Data de recebimento: <?= $msmR->data;?></p></br>
				<p id="msm-list-txt"><?= $msmR->texto;?></p>
			<!-- /ler-msm -->
			</div>
		<!-- /colo-sm-12 -->
		</div>
	<!-- /painel-jr -->
	</div>
<!-- /col-sm-12 -->
</div>