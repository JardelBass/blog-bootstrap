<!-- incluindo um aquivo controle da pagina -->
<?php include_once("../helpers/edit-post.php") ?>
<!-- col-sm-12 -->
<div class="col-sm-12">
	<!-- painel-jr -->
	<div class="painel-jr">
		<h1>EDITA POSTAGEM</h1>
		<!--form edita postagem -->
		<form id="edit-profile" class="cadastro-jr" method="post" enctype="multipart/form-data">
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- TETULO -->
				<label for="email">Tetulo da post</label>
				<input type="text" id="titulo" value="<?=$postR->titulo;?>" name="titulo">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- IMAGEM -->
				<label for="pwd">imagem</label>
				<input type="file" multiple id="img" name="img[]">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-12 -->
			<div class="col-sm-12">
				<!-- CONTAUDO -->
				<label for="pwd">Conteudo</label>
				<textarea class="col-sm-12" id="conteudo" name="descricao" cols="100" rows="10"><?=$postR->descricao;?></textarea>
			<!-- /col-sm-12 -->
			</div>
			<!-- col-sm-12 -->
			<div class="col-sm-12">
				<!-- POST SIM OU NÃO -->
				<label for="pwd">Post</label>
				<select id="exibir" name="exibir">
					<option selected><?=$postR->exibir;?></optgroup>
					<!-- Fazendo uma verificação se atributo post sim ou não para imprime coreto  -->
					<?php if($postR->exibir != "Sim"){?>
						<option>Sim</option>
					<?php }else{?>
						<option>Não</option>
					<?php }?>
				</select>
			<!-- /col-sm-12 -->
			</div>
			<!-- col-sm-12 -->
			<div class="butao-cadasto-jr col-sm-12">
				<!-- BOTÃO EDITA E CANCELAR -->
				<input id="cadssalvar" type="submit" name="editar" value="EDITAR">
				<input id="botao-cads-cancelar" type="reset" name="rest" value="CANCELAR">
			<!-- /col-sm-12 -->
			</div>
		<!-- /form -->
		</form>
	<!-- /painel-jr -->
	</div>
<!-- /col-sm-12 -->
</div>