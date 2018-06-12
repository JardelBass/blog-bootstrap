<!-- Css para toca cor dos botão do menu -->
<style type="text/css">
	#cast-user{ border-left: 15px solid #7DA743;}
</style>
<!-- incluindo um aquivo controle da pagina -->
<?php include_once("../helpers/usuario.php");?>
<!-- col-sm-12 -->
<div class="col-sm-12">
	<!-- /painel-jr -->
	<div class="painel-jr">
		<h1>CADASTRA USUARIO</h1>
		<!-- form CADASTRO DE USUARIO -->
		<form id="edit-profile" class="user-form-jr" method="post" action="" enctype="multipart/form-data">
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- NOME -->
				<label for="email">Nome</label></br>
				<input type="text" placeholder="Digite nome" name="nome">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- USUARIO -->
				<label for="email">Usuario</label></br>
				<input type="text" placeholder="Digite ussuario" name="usuario">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- E-MAIL -->
				<label for="email">E-mail</label></br>
				<input type="text" placeholder="Digite e-mail" name="email">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<label for="email">senha</label></br>
				<input type="password" placeholder="Digite senha" name="senha">
			</div>
			<!-- col-sm-6 -->
			<div class="col-sm-6">
				<!-- REPETE SENHA -->
				<label for="email">Digite novamente senha</label></br>
				<input type="password" placeholder="Digite senha" name="senha">
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-6 -->
			<div id="sample" class="col-sm-6">
				<!-- TIPO -->
				<label for="pwd">Tipo</label></br>
				<select id="exibir" name="nivel">
					<option>Usuario</option>
					<option>Admin</option>
				</select>
			<!-- /col-sm-6 -->
			</div>
			<!-- col-sm-12 -->
			<div class="butao-user-jr col-sm-12">
				<!-- BOTÃO SALVAR E CANCELAR -->
				<input id="usersalvar" type="submit" name="cadastrar-user" value="SALVAR">
				<input id="botao-user-cancelar" type="reset" name="rest" value="CANCELAR">
			<!-- /col-sm-12 -->
			</div>
		</form>
	<!-- /painel-jr -->
	</div>
<!-- /col-sm-12 -->
</div>