<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Loghează-te în contul tău</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-7 col-6">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>Lujerului 0763 627 912</li>
								<li><i class="fa fa-phone"></i>Tei 0741 987 114</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:supportDentaplus@yahoo.com">supportDentaplus@yahoo.com</a></li>
								<li><i class="get-quote"></i><a href="login_by_role.php" class="btn">Programează-te</a></li>
							</ul>
						</div>
							
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-2 col-md-5 col-7">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.php"><img src="img/logonou.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-9 col-md-4 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="#">Home <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
												
													<li><a href="home.php">De ce Dentaplus</a></li>
													
												</ul>
											</li>
											<li><a href="#">Echipa Dentaplus <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="echipa.php">Echipa Dentaplus</a></li>
													<li><a href="echipament.php">Echipamente</a></li>
												</ul>
											</li>
											<li><a href="#">Tratamente și soluții<i class="icofont-rounded-down"></i></a>
												
												<ul class="dropdown">
													<li><a href="chirurgie_dentara.php">Chirurgie</a></li>
													<li><a href="estetica_dentara.php">Estetică dentară</a></li>
													<li><a href="ortodontie.php">Ortodonție</a></li>
													<li><a href="protetica.php">Protetică</a></li>
												</ul>
											</li>
											<li ><a href="#">Prețuri <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="preturi.php">Servicii dentare</a></li>
													<li><a href="abonamente.php">Abonamente</a></li>
												</ul>

											</li>
											
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
<head>  
    <title>Loghează-te în contul tău</title>   
    <link rel = "stylesheet" type = "text/css" href = "login.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Loghează-te în contul de pacient DENTAPLUS</h1>  
        <form name="f1" action = "login_auth.php" method = "POST">  
            <p> 

                <label> Nume si prenume: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> CNP Pacient: </label>  
                <input type = "text" id ="pass" name  = "pass" pattern="[0-9]{13}"/>  
            </p>
            <p>
                <label> Nr. de telefon: </label>  
                <input type = "phone" id ="nrTel" name  = "nrTel" pattern="[0-9]{10}"/>
            </p>

            <p> 
            <label> Adresa de mail: </label>  
                <input type = "email" id ="email" name  = "email" />
            </p>    
            <p>
                <a  href="sign_up_page.php">Nu ai cont? Înregistrează-te.</a>
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>     
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body> 

	<!--/ End Slider Area -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Colecția de zâmbete</h2>
								<p>Vă prezentăm albumul zâmbetelor care au finalizat cu succes tratamentele din clinica noastră.</p>
								<div class="row">
									<div class="col-lg-9 col-md-6 col-12">
										<ul>
											<li><a href="galerie.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Galeria zâmbetelor</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Utile</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="home.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Despre noi</a></li>
											<li><a href="sfaturi.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Sfaturi</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
			
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
 
</html>  