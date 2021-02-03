​
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dessiner votre pièce</title>
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
		<h1>Dessinez votre pièce sur mesure !</h1>
	</div>
	<!--_______________________________________/TITRE ___________________________________________-->
	<!--________________________________________ PAGE ___________________________________________-->
	<div class="container my-4">
		<div class="row">
			<div class="col-lg-6 col-left">
				<!--------------------------------------CARD------------------------------------->
				<div class="metal text-center bg-light rounded">
					<h2>Choisissez Votre Matériau</h2>
				</div>
				<div class="row">
					<!--.second slide-->
					<div class="card-group">
						<div class="card ">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesperf.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles perforées</h3>
						</div>
						<a class="card stretched-link" data-toggle="collapse" data-target="#tôlegalva">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesgalva.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles Galvanisées</h3>
						</a>
						<a class="card stretched-link" data-toggle="collapse" data-target="#tôleelectro">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/toleselectro.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles électro-zinguées</h3>
						</a>
					</div>
				</div>
				<!--/row-->
				<!--/.container-->
				<hr/>
				<div class="row">
					<!--.second slide-->
					<div class="card-group">
						<div class="card">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesDKP.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles en acier DKP</h3>
						</div>
						<div class="card">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesacierlamée.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles en aciers larmées</h3>
						</div>
						<div class="card">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/aluannodisé.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Aluminium Anodisé</h3>
						</div>
					</div>
					<!--card group-->
				</div>
				<!--/row-->
				<!--/.container-->
				<hr/>
				<div class="row">
					<!--.second slide-->
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
							<h3 class="card-title my-auto text-center">Tôles aluminium Laquées RAL</h3>
						</div>
					</div>
					<!--card group-->
				</div>
				<!--/row-->
				<!--/.container-->
				<!--/.container-->
			</div>
			<!--/Col-->
			<div class="col-lg-6 twin two my-1">
				<div class="title_container py-3 text-center bg-light">
					<h2>Je sais pas encore</h2>
				</div>
				<!--TEXTURE-->
				<button class="btn btn-primary" data-toggle="collapse" data-target="#texture" aria-expanded="true" aria-controls="texture">TEXTURE</button>
				<p>Veuillez choisir une texture :</p>
				<ul class="collapse" id="texture">
					<li>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="myCheckbox1">
							<label class="form-check-label" for="myCheckbox1">
								<img src="../assets/images/dessiner_piece/textures/sat.png" />
							</label>
						</div>
					</li>
					<li>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="myCheckbox2">
							<label class="form-check-label" for="myCheckbox2">
								<img src="../assets/images/dessiner_piece/textures/mat.png" />
							</label>
						</div>
					</li>
					<li>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="myCheckbox3">
							<label class="form-check-label" for="myCheckbox3">
								<img src="../assets/images/dessiner_piece/textures/piedra.png" />
							</label>
						</div>
					</li>
				</ul>
				<hr/>
				<!--EPAISSEUR-->
				<button class="btn btn-primary show" aria-expanded="false" aria-controls="épaisseur">EPAISSEUR</button>
				<div class="collapse show" id="épaisseur">
					<div class="collapse" id="tôlegalva">
					<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
						</span> <span class="radio__label">0.8mm</span>
					</label>
					<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
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
					<div class="collapse" id="tôleelectro">
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
				</div>
				<hr/>
				<!--FORMAT-->
				<button class="btn btn-primary
 collapsed" data-toggle="collapse" data-target="#format" aria-expanded="false" aria-controls="format">FORMAT</button>
				<div class="radio2 collapse" id="format">
					<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio1">
						    <span class="radio__control"></span>
						</span> <span class="radio__label">format</span>
					</label>
					<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio1">
						    <span class="radio__control"></span>
						</span> <span class="radio__label">format</span>
					</label>
					<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio1">
						    <span class="radio__control"></span>
						</span> <span class="radio__label">format</span>
					</label>
					<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio1">
						    <span class="radio__control"></span>
						</span> <span class="radio__label">format</span>
					</label>
					<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
						</span> <span class="radio__label">format</span>
					</label>
				</div>
			</div>
			<!--container-->
		</div>
		<!--/Col-->
	</div>
	<!--/Row-->
	</div>
	<!--/Container-Fluid-->
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