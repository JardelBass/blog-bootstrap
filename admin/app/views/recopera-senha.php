<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php include_once("../helpers/eviar-email.php")?>
	<div class="account-container register">
		<div class="content clearfix">
			<form method="post" enctype="multipart/form-data">
				<h1>Recuperar senha</h1>			
				<div class="login-fields">
					<p>Digite o e-mail cadastrado no sistema:</p>
					<div class="field">
						<label for="email">Email Address:</label>
						<input type="text" id="email" name="email" value="" placeholder="Email" class="login"/>
					<!-- /field -->
					</div>
				<!-- /login-fields -->
				</div> 
				<div class="login-actions">
					<input type="submit" class="button btn btn-primary btn-large" name="recuperar" value=" Recuperar senha" />
				<!-- .actions -->
				</div> 
			</form>
			<a href="../../index.php">Longar novamente</a>
		<!-- /content -->
		</div>
	<!-- /content -->
	</div> 
</body>
</html>