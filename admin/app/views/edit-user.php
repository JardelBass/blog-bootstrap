<!-- incluindo um aquivo controle da pagina -->
<?php include_once("../helpers/edit-user.php");?>
<!-- col-sm-12 -->
<div class="col-sm-12">
	<!-- painel-jr -->
	<div class="painel-jr">
		<h1>EDITA USUARIO</h1>
		<!-- form edita usuario -->
		<form id="edit-profile" class="user-form-jr" method="post" action="" enctype="multipart/form-data">
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- NOME -->
				<label for="email">Nome</label>
				<input type="text" id="titulo" placeholder="Digite titulo do podt" name="nome" value="<?= $userR->nome; ?>">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- USUARIO -->
				<label for="email">Usuario</label>
				<input type="text" id="titulo" placeholder="Digite titulo do podt" name="usuario" value="<?= $userR->usuario; ?>">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- E-MAIL -->
				<label for="email">E-mail</label>
				<input type="text" id="titulo" placeholder="Digite titulo do podt" name="email" value="<?= $userR->email; ?>">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- SENHA -->
				<label for="email">Senha</label>
				<input type="password" id="titulo" placeholder="Digite titulo do podt" name="senha" value="<?= $userR->senha; ?>">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- REPITA SENHA -->
				<label for="email">Senha</label>
				<input type="password" id="titulo" placeholder="Digite titulo do podt" name="senha" value="<?= $userR->senha; ?>">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div id="sample" class="col-sm-6">
				<!-- TIPO DE USUARIO -->
				<label for="pwd">Tipo</label></br>
				<select id="exibir" name="nivel">
					<option><?= $userR->nivel; ?></option>
					<!-- Fazendo uma verificação se atributo $usserR usuario ou admin para imprime coreto  -->
					<?php if($userR->nivel != "Usuario"){ ?>
						<option>Usuario</option>

					<?php }else{ ?>
						<option>Admin</option>
					<?php }?>
				</select>
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-12 -->
			<div class="butao-user-jr col-sm-12">
				<!-- BOTÃO EDITA E CANCELAR -->
				<input id="usersalvar" type="submit" name="edita-user" value="EDITA">
				<input id="botao-user-cancelar" type="reset" name="rest" value="CANCELAR">
			<!-- /col-sm-12 -->
			</div>
		<!-- /form -->
		</form>
	<!-- /painel-jr -->
	</div>
<!-- /col-sm-12 -->
</div>