<?php
	include_once("../db/conecta.php");

	if(isset($_POST['recuperar'])){
		// ISSO É UM MODELOS MAS NÃO ESTAR RODANDO POR FALTA DE HOST ONLINE, 
		$email    = utf8_decode (strip_tags(trim($_POST['email'])));
		$assunto = "";
		//Verificação de email digitado pelo usuario é valido
		$select = "SELECT * FROM login WHERE BINARY email='$email'";

		try{
			$result = $conexao->prepare($select);
			//$result->bindValue(':email',$email, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			echo $contar;

			if($contar >0){
				foreach($conexao->query($select) as $exibe);
				$nomeUsar = $exibe['nome'];
				$emailUsar = $exibe['email'];
				$senhaUsar = $exibe['senha'];
				$usuarioUsar = $exibe['usuario'];
				
				require_once('../models/PHPMailer/class.phpmailer.php');

				$Email = new PHPMailer();
				$Email->SetLanguage("br");
				// Habilita o SMTP 
				$Email->IsSMTP();
				//Ativa e-mail autenticado
				$Email->SMTPAuth = true;
				// Servidor de envio, verificar qual o host correto com a hospedagem
				$Email->Host = '';
				// Porta de envio
				$Email->Port = ''; 
				//e-mail que será autenticado
				$Email->Username = '';
				// senha do email
				$Email->Password = ''; 
				// ativa o envio de e-mails em HTML, se false, desativa.
				$Email->IsHTML(true); 
				// email do remetente da mensagem
				$Email->From = '';
				// nome do remetente do email
				$Email->FromName = utf8_decode($email);
				// Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
				$Email->AddReplyTo($email, $nome);
				$Email->AddAddress(""); // para quem será enviada a mensagem
				// informando no email, o assunto da mensagem
				$Email->Subject = utf8_decode($assunto);
				// Define o texto da mensagem (aceita HTML)
				$Email->Body .= "<br /><br />
								 <strong>Nome:</strong> $nomeUsar<br /><br />
								 <strong>E-mail:</strong> $emailUsar<br /><br />
								 <strong>Usuario:</strong> $usuarioUsar<br /><br />
								 <strong>Senha:</strong> $senhaUsar<br /><br />";
				
				// verifica se está tudo ok com oa parametros acima, se nao.
				if(!$Email->Send()){
					echo "<p>A mensagem não foi enviada. </p>";
					echo "Erro: " . $Email->ErrorInfo;
				}else{
					echo "<script>location.href='sucesso.html'</script>";
				}
				
			}else{
				echo "<div><p>E-mail digitado não e valedo.</p><div>";
			}

		}catch (PDOException $ex){
			//tratamento de erro email
			echo "ERRO".$ex;
		}
	}