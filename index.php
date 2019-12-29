<?php include('php/sys.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Search For CEP</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script src="https://kit.fontawesome.com/353c2a62b7.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<main>
			<section class="info">
				<header>
					<h1>Pesquise um CEP</h1>
				</header>
				<form method="POST">
					<label>CEP:</label>
					<div class="search">
						<input type="text" name="cep" placeholder="Digite o cep" required>
						<button type="submit" name="ask"><i class="fas fa-search"></i></button>
					</div>
				</form>	
				<?php get_CEP(); ?>
			</section>
			<small align="center" style="margin-top: 15px;">Guilherme campos - Comsumo de API rest com php</small>
		</main>
	</body>
</html>