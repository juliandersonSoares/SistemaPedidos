<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="src/styles/index.css" />
		<link rel="shortcut icon" href="src/images/Hamburguer.png" type="image/x-icon">
		<link rel="stylesheet" href="src/styles/popup.css">
		<link rel="stylesheet" href="src/styles/GoogleFonts/GoogleFonts">
		<title>Pedidos</title>
	</head>
	<body>
		<div class="container">
			<div class="hero">
				<div class="bg">
					<div class="content">
					<img src="src/images/logoTCC.png" alt="" class="logo" />
						<h2>Faça seu pedido com mais <span>praticidade</span></h2>
						<p class="subStatus">Clique e aproveite</p>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
						<p class="statusLoja1"></p>
						<button class="btn_cardapio">Ver cardápio</button>
						<dialog>
							<h2 id="sub-dialog">Como deseja continuar?</h2>
							<a href="src/views/login.php"><button class="ButtonE">Entrar ou Cadastrar</button></a>
							<a href="src/views/semLogin.php"><button class="ButtonS">Continuar sem Login</button></a>
						</dialog>
					</div>
				</div>
			</div>
			
			<div class="footer"> 
				<img src="src/images/Hamburguer.png" alt="" />
				<span>© Copyright 2023 - Criar nome do TCC <br />Todos os direitos reservados</span>
			</div>
		</div>
		

		    <script src="src/js/dialog.js"></script>
			<script src="src/js/status.js"></script>

	</body>
</html>
