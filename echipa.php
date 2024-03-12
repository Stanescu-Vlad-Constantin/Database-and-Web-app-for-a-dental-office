<?php
//Conectare la baza de date bibliotecaDB
$db = mysqli_connect('localhost','root','','CabinetStomatologicDB') or die('Error connecting to MySQL server.');
?>


<!doctype html>
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
        <title>Abonamente Dentaplus</title>
		
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
											<li class="active" ><a href="#">Echipa Dentaplus <i class="icofont-rounded-down"></i></a>
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
											<li><a href="#">Prețuri <i class="icofont-rounded-down"></i></a>
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
		
		<!-- Slider Area -->
		<section class="slider">
				<div class="single-slider" style="background-image:url('img/oameni.jpg')">
				</div>
				<!-- End Single Slider -->
			
		</section>
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Pe cine vei întâlni în cabinetele Dentaplus?</h2>
							<img src="img/section-img.png" alt="#">
								<div class="row">
									<div class="col-lg-12 col-12">
										<p>Acestia sunt oamenii care vor avea grija ca vizita la cabinetul stomatologic sa decurga fara cusur. Fiecare dintre noi, cei care facem parte din echipa medicala sau personalul suport, va vom pune la dispozitie toata priceperea si devotamentul pentru ca aceasta experienta sa fie una impecabila.</p>
									</div>
								</div>
							
					</div>
				</div>
			</div>
			
			<style>
				table{
				font-family : Times New Roman,sans-serif;
				border-collapse : collapse;
				margin-left: 180px;
				width: 60%;

				}

				td,th{
				border : 1px solid #dddddd;
				text-align : center;
				padding: 8px;
				}
				
				tr: nth-child(even){
				background-color: #dddddd;
				}
				</style>
				<!-- Tabel servicii -->
				<table>
					<tr>
					   <th> Medici </th>
					   <th> Ani experienta in echipa Dentaplus</th>
					</tr>
					<?php
						$query = "SELECT numeMedic, EXTRACT(YEAR FROM CURRENT_DATE)-EXTRACT(YEAR FROM dataAngajare) as aniExperienta FROM tblMedici";
						$result = mysqli_query($db, $query) or die('Error querying database.');
						while($row=mysqli_fetch_array($result))
						{
						?>
						<tr>
						   <td> <li> <?php echo $row['numeMedic']; ?> </li> </td>
						   <td> <?php echo $row['aniExperienta'];  ?>  <i> + </p> </i> </td>
						</tr>
					<?php }
					?>
				</table>
				
				<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							
							<div class="single-pf"> 
									    <img src="img/DR.-Crina-Flintea-400x400.jpg" alt="#">
										<p> Iordache Maria </p>
												
							</div>
							<div class="single-pf"> 		   
										<img src="img/fata8.jpg" alt="#"> 
										<p> Ionescu Roxana </p>
							</div>
							<div class="single-pf"> 			
										<img src="img/fata5.jpg" alt="#">
										<p>	Butnaru Mihaela </p>
							</div>
							<div class="single-pf"> 
									    <img src="img/b2.jpg" alt="#">
										<p> Bucsa Horia </p>		
							</div>
							<div class="single-pf"> 		   
										<img src="img/b1.jpg" alt="#"> 
										<p> Ciobanu Gheorghe </p>
							</div>
							<div class="single-pf"> 			
										<img src="img/fata6.jpg" alt="#">
										<p> Serban Gabriela </p>
							</div>		   
							<div class="single-pf"> 
									    <img src="img/fata7.jpg" alt="#">
										<p> Barbu Gloria Cristina </p>		
							</div>
							<div class="single-pf"> 		   
										<img src="img/fata4.jpg" alt="#"> 
										<p> Florea Claudia Cristina </p>
							</div>
							<div class="single-pf"> 			
										<img src="img/DR.-Cornelia-Lumei-400x400.jpg" alt="#">
										<p> Ionescu Anca Maria </p>
							</div>	
					         <div class="single-pf"> 			
										<img src="img/DR.-Diana-Gheorghescu--400x400.jpg" alt="#">
										<p> Elencu Elena </p>
							</div>
						</div>
							
					</div>
				</div>
		</section>
		
		
		
		
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
											<li><a href="home"><i class="fa fa-caret-right" aria-hidden="true"></i>Despre noi</a></li>
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