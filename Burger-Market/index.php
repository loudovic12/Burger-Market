<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Burger Market</title>
	<meta charset="UTF-8">
    
	<!-- Style Début -->
    <?php include "app/styles.php"?>
    <!-- Style Fin -->

	<!-- Perso Style -->
	<link rel="stylesheet" href="css/style1.css"/>
</head>
    
    
	<!-- Menu Début -->
    <?php include "app/header.php"?>
    <!-- Menu Fin -->
<body>   
	<!-- Image En-tête -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-slide-item set-bg" data-setbg="img/bugerslide1.jpg">
				<div class="hs-text">
				    <h2 class="hs-title-1"><span>Burger Market</span></h2>
					<h2 class="hs-title-2"><span>Burger Market</span></h2>
					<h2 class="hs-title-3"><span>Burger Market</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="img/bugerslide2.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Burger Market</span></h2>
					<h2 class="hs-title-2"><span>Burger Market</span></h2>
					<h2 class="hs-title-3"><span>Burger Market</span></h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Image En-tête Fin -->  

    	<!-- A propos -->
	<section id="apropos" class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 about-text">
                    <br /> 
					<h1 style="text-decoration:underline;">A propos</h1>
					<p>Entrez dans l'unique restaurant Burger Market spécialisé dans la fabrication de burgers. Vous craquerez pour le steak haché du boucher proposé dans chaque burger ainsi que le pain fabriqué par un boulanger. Ici, les frites sont préparées avec amour et parfaitement dorées. La carte est composée de 4 menus au choix !</p>
				</div>
				<div class="col-lg-6 about-img">
					<img src="img/bugerabout.jpg" alt="buger">
				</div>
			</div>
		</div>
	</section>
	<!-- A propos Fin -->
    
    <!-- Contact & Map Début -->
    <section class="row" id="contplan">
        <div class="container mt-5" >
            <!-- Google Map -->
                <div class="row" style="height:550px;">
                  <div class="col-md-6 maps" id="plan">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.0437835783273!2d2.3510174156743293!3d48.857375479287356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1d9e2d0f3d%3A0x765315790f85a478!2s58+Rue+de+Rivoli%2C+75004+Paris!5e0!3m2!1sfr!2sfr!4v1544003813669" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
              <!-- Fin Google Map -->
              <!-- Formulaire de contact -->
                  <div class="col-md-6" id="contact">
                    <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTACT</h2>
                    <form action="">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" class="form-control mt-2" placeholder="Nom" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" class="form-control mt-2" placeholder="Prénom" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="email" class="form-control mt-2" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="number" class="form-control mt-2" placeholder="Téléphone" required>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3" required></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-light" type="submit">Envoyez</button>
                        </div>
                      </div>
                    </form>
                    <div class="text-white">
                    <h2 class="text-uppercase mt-4 font-weight-bold">Buger Market</h2>

                    <i class="fa fa-phone mt-3"></i> <a>01.56.95.86.32</a><br>
                    <i class="fa fa-phone mt-3"></i> <a>06.95.31.48.96</a><br>
                    <i class="fa fa-envelope mt-3"></i> <a>Burger.market75@gmail.com</a><br>
                    <i class="fa fa-globe mt-3"></i> 58 Rue de Rivoli, 75004 Paris<br>
                    </div>
                  </div>
             <!-- Fin de formulaire de contact --> 
                </div>
            </div>
        </section>
    <!-- Contact & Map Fin -->
    
    			<!-- Footer Début -->	
    	<?php include "app/footer.php"?>
			<!-- Footer Fin -->
    
    
    

<!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>    
<!--====== Javascripts & Jquery ======-->

</body>
</html>