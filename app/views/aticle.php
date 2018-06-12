<!-- Css para toca cor dos botão do menu -->
<style>
	#home{background-color: #7DA743;}
	#post,#equipe,#contato{background-color: #201E29;}
</style>
<!-- slide -->
<div class="slide">
	<!-- container -->
    <div class="container">
		<!-- row -->
		<div class="row">
			<!-- slide-jr-img-sm -->
			<div class="slide-jr-img-sm">
				<img class="col-sm-7 slide-jr-img" src="http://localhost/blog-bootstrap/app/views/img/img-slide.png" alt="Uma imagens" />
			<!-- /slide-jr-img-sm -->
			</div> 
			<!-- slide-jr-text -->
			<div class="slide-jr-text col-sm-5">
				<h1>WEB DESIGN</h1>
				<p>Entre no mundo do WEB DESIGN e transforme sua vida.</p>
				<a href="#CONTATOS">INSCREVA-SE JÁ</a>
			<!-- /slide-jr-text -->
			</div>
			<!--slide-jr-img-pc -->
			<div class="col-sm-6 slide-jr-img-pc">
				<img class="col-sm-7 slide-jr-img" src="http://localhost/blog-bootstrap/app/views/img/img-slide.png" alt="Uma imagens" />
			<!--/slide-jr-img-pc -->
			</div>
		<!-- /row -->
		</div>
	<!-- /container -->
    </div>
<!-- slide -->
</div>

<aticle>
	<!-- container -->
    <div class="container post-jr">
		<!-- row -->
		<div class="row">
			<!-- post-text-jr -->
			<div class="col-sm-12 post-text-jr">
				<h1>ULTIMOS POST</h1>
				<p>Estamos em uma nova era em que a tecnologia da informação (TI) está transformandoa nova metodologia do ensino, chamada Educação a distância - EaD</p>
			<!-- /post-text-jr -->	
			</div>
			<!-- post-ultimas-jr -->
			<div id="divPost" class="col-sm-12 post-ultimas-jr">
				<img class="col-sm-3" src="<?= "http://localhost/blog-bootstrap/admin/app/views/upload/".$lista->imagem ?>" alt='Smiley face' />
				<!-- post-ultimas-text-jr -->
				<div class="col-sm-9 post-ultimas-text-jr">
					<a href="?lista&id=<?= $lista->id; ?>"><h2><?= $lista->titulo ?></h2></a>
					<p><?= limitarTexto($lista->descricao,$limeta=300); ?></p>
				<!-- /post-ultimas-text-jr -->
				</div>
			<!-- /post-ultimas-jr -->
			</div>
		<!-- /row -->
		</div>
		<!-- Fazendo uma verificação do número de posta e dependendo do número de posta executando um outra ação primeira se número de posta maior que 4 estão só mostra 4 primeiros ou se for menor que 4 ele mostra todos -->
		<?php $i = 0; if($contar > 4){ while($i < 4){ $lista = $result->FETCH(PDO::FETCH_OBJ);?>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- post-list-text-jr -->
				<div class="post-list-text-jr">
					<a href="?lista&id=<?= $lista->id; ?>"><h2><?= limitarTexto($lista->titulo,$limeta=50);?></h2></a>
					<p><?= limitarTexto($lista->descricao,$limeta=135); ?></p>
				<!-- /post-list-text-jr -->
				</div>
			<!-- /col-sm-6 -->
			</div>
		
		<?php $i++;} }else{ while($lista = $result->FETCH(PDO::FETCH_OBJ)){ ?>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- post-list-text-jr -->
				<div class="post-list-text-jr">
					<a href="?lista&id=<?= $lista->id; ?>"><h2><?= limitarTexto($lista->titulo,$limeta=50);?></h2></a>
					<p><?= limitarTexto($lista->descricao,$limeta=135); ?></p>
				<!-- /post-list-text-jr -->
				</div>
			<!-- /col-sm-6 -->
			</div>
		<?php }} ?>
		<!-- post-button-jr -->
		<div class="col-sm-12 post-button-jr">
			<a href="?lista"><button>LEIA MAS</button></a>
		<!-- /post-button-jr -->
		</div>
	<!-- /container -->
    </div>
</aticle>
<!-- incluindo um aquivo de roda pé -->
<?php include_once("footer.php"); ?>
