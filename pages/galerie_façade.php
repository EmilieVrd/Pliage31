<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Galerie Façades</title>
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/style_pages.css" rel="stylesheet" type="text/css">
<link href="../assets/css/header.css" rel="stylesheet" type="text/css">
<link href="../assets/css/footer.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--___________________________________________ HEADER ___________________________________________-->

<?php require 'header.php' ;?>
<!--__________________________________________ /HEADER ___________________________________________-->

<div class="container-fluid slider shadow-lg">
  <div class="row">
    <div class="col-lg-2 my-auto text-center">
      <div class=""> 
		  <a href="#" class="btn">Simply Market</a> 
		  <a href="#" class="btn">Simply Market</a> 
		  <a href="#" class="btn">Simply Market</a> 
		  <a href="#" class="btn">Simply Market</a> 
		  <a href="#" class="btn">Simply Market</a> </div>
    </div>
    <div class="col-lg-10 col-12" id="slider">
      <div id="myCarousel" class="carousel slide"> 
        
        <!-- main slider carousel items -->
        <div class="carousel-inner text-center pb-4">
          <div class="active carousel-item" data-slide-number="0"> <img src="../assets/images/galeries/façades/façade1.jpg" width="600" class="img-fluid"> </div>
          <div class="carousel-item" data-slide-number="1"> <img src="../assets/images/galeries/façades/façade2.jpg" width="600" class="img-fluid"> </div>
          <div class="carousel-item" data-slide-number="2"> <img src="../assets/images/galeries/façades/façade3.jpg" width="600" class="img-fluid"> </div>
          <div class="carousel-item" data-slide-number="3"> <img src="../assets/images/galeries/façades/façade4.jpg" width="600" class="img-fluid"> </div>
          <div class="carousel-item" data-slide-number="4"> <img src="../assets/images/galeries/façades/façade5.jpg" width="600" class="img-fluid"> </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        <!-- main slider carousel nav controls -->
        <ul class="carousel-indicators list-inline mx-auto px-2">
          <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel"> <img src="../assets/images/galeries/façades/façade1.jpg" class="img-fluid"> </a> </li>
          <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel"> <img src="../assets/images/galeries/façades/façade2.jpg" class="img-fluid one"> </a> </li>
          <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel"> <img src="../assets/images/galeries/façades/façade3.jpg" class="img-fluid two"> </a> </li>
          <li class="list-inline-item"> <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel"> <img src="../assets/images/galeries/façades/façade4.jpg" class="img-fluid three"> </a> </li>
          <li class="list-inline-item"> <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel"> <img src="../assets/images/galeries/façades/façade5.jpg" class="img-fluid four"> </a> </li>
          </a>
          </li>
        </ul>
      </div>
	<!-- caption slideshow -->
      <div class="main-text">
        <div class="col-md-12 d-none d-md-block text-center">
          <h1> Nos Façades</h1>
          <h3> Coucou tout le monde </h3>
        </div>
      </div>
	<!--/caption slideshow -->
    </div>
    <!--/main slider carousel--> 
  </div>
</div>

<!--________________________________________ FOOTER ___________________________________________-->

<?php require 'footer.php' ;?>
<!--________________________________________ /FOOTER ___________________________________________--> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
