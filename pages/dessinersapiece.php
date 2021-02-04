​<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pièce sur mesure</title>
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/style_dsp.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/header.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/footer.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--________________________________________ HEADER ___________________________________________-->
	<header>
		<?php require 'header.php' ;?>
	</header>
	<!--________________________________________ /HEADER___________________________________________-->
	<!--________________________________________TITRE ___________________________________________-->
	<div class="text-center">
		<h1>Commandez votre pièce sur mesure !</h1>
	</div>
	<!--_______________________________________/TITRE ___________________________________________-->
	<!--________________________________________ PAGE ___________________________________________-->
	<div class="container my-4 col-left ctn-first">
		<div class="row">
			<div class="col-lg-12">
				<!--------------------------------------CARD------------------------------------->
				<div class="metal text-center bg-light rounded">
					<h2>Nos matériaux</h2>
				</div>
			</div>
			<div class="row no-gutters my-2">
				<div class="col-md-4 my-auto">
					<div class="card-group">
						<div class="card ">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesperf.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles perforées</h3>
						</div>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#tôlegalva">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesgalva.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles Galvanisées</h3>
						</a>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#tôleelectro">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/toleselectro.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles électro-zinguées</h3>
						</a>
					</div>
				</div>
				<div class="col-md-4 my-auto">
					<div class="card-group">
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#epDKP">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesDKP.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles en acier DKP</h3>
						</a>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#epTôleLarmée">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesacierlamée.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles en aciers larmées</h3>
						</a>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#epTôleAnod">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/aluannodisé.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Aluminium Anodisé</h3>
						</a>
					</div>
				</div>
				<div class="col-md-4 my-auto">
					<div class="card-group">
						<div class="card">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/alubrut.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Aluminium Brut</h3>
						</div>
						<div class="card">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/aludamiers.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Aluminium Damiers</h3>
						</div>
						<div class="card">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/alulaquées.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles Alu Laquées RAL</h3>
						</div>
					</div>
					<!--card group-->
				</div>
			</div>
			<!--/Col-->
		</div>
		<!--/row-->
	</div>
	<!--/Container-->
	<div class="container col-left my-4 ctn-second">
		<div class="metal text-center bg-light rounded">
			<h2>Nos options</h2>
		</div>
		<div class="row mb-2">
			<!--------------------------------------CARD------------------------------------->
			<div class="col-lg-6">
				<h3 class="text-center text-white">Finitions</h3>
				<div class="card-group">
					<div class="card ">
						<img class="card-img-top" src="../assets/images/dessiner_piece/textures/mat.png" alt="Card image cap">
						<h3 class="card-title my-auto text-center">MAT</h3>
					</div>
					<div class="card  text-decoration-none">
						<img class="card-img-top" src="../assets/images/dessiner_piece/textures/piedra.png" alt="Card image cap">
						<h3 class="card-title my-auto text-center">PIEDRA</h3>
					</div>
					<div class="card  text-decoration-none">
						<img class="card-img-top" src="../assets/images/dessiner_piece/textures/sat.png" alt="Card image cap">
						<h3 class="card-title my-auto text-center">SAT</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 text-white">
				<h3 class="text-center text-white">Epaisseur</h3>
				<div class="collapse show" id="épaisseur">
					<div class="collapse" id="epTôleAnod" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
					</div>
					<div class="collapse" id="epDKP" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
					</div>
					<div class="collapse" id="tôlegalva" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">0.8mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5 mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">4mm</span>
						</label>
					</div>
					<div class="collapse" id="tôleelectro" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5 mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
					</div>
					<div class="collapse" id="epTôleLarmée" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">4mm</span>
						</label>
					</div>
				</div>
				<!--card group-->
			</div>
			<!--col-->
			<!--<div class="col-lg-4">
				<h3 class="text-center text-white">Couleurs</h3>
				<div class="card-group">
					<div class="card">
						<img class="card-img-top" src="../assets/images/dessiner_piece/alu/alubrut.png" alt="Card image cap">
						<h3 class="card-title my-auto text-center">Aluminium Brut</h3>
					</div>
					<div class="card">
						<img class="card-img-top" src="../assets/images/dessiner_piece/alu/aludamiers.png" alt="Card image cap">
						<h3 class="card-title my-auto text-center">Aluminium Damiers</h3>
					</div>
					<div class="card">
						<img class="card-img-top" src="../assets/images/dessiner_piece/alu/alulaquées.png" alt="Card image cap">
						<h3 class="card-title my-auto text-center">Tôles Alu Laquées RAL</h3>
					</div>
				</div>
				!--card group--
			</div>-->
			<!--/Col-->
		</div>
		<!--/row-->
	</div>
	<!--/Container-->
	<!--________________________________________ /PAGE ___________________________________________-->
	<!--________________________________________ FOOTER ___________________________________________-->
	<footer>
		<?php require 'footer.php' ;?>
	</footer>
	<!--________________________________________ /FOOTER ___________________________________________-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../assets/js/script_pages.js"></script>
</body>

</html>
