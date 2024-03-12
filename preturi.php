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
        <title>Serviciile oferite de Dentaplus</title>
		
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
											<li class="active"><a href="#">Prețuri <i class="icofont-rounded-down"></i></a>
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
				<div class="single-slider" style="background-image:url('img/preturi.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Costuri <span>stomatolog</span> </h1>
									<p>Tratamentele sunt servicii, nu produse, iar aceste prețuri este necesar să fie individualizate într-un plan de tratament, în funcție de condițiile clinice specifice fiecărui pacient.Înainte de începerea tratamentului, fiecarui pacient îi este întocmit un plan financiar complet care detaliază toate procedurile necesare, prețul acestora, durata si medicul.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			
		</section>
		<!--/ End Slider Area -->
		<section class="why-choose section" >
			<div class="container">
				<div class="choose-left">
						<div class="row">
								<div class="col-lg-6 col-12">
									<!-- Start Choose Left -->
									<div class="choose-left">
										<p>Aproximativ 10% din populaţie suferă de anxietate severă în ceea ce priveşte vizitele la dentist, astfel că mulţi oameni amână vizitele până când suferă de dureri la dinţi sau de alte urgenţe, cum ar fi un abces dentar. Acest comportament poate genera un ciclu negativ de evenimente, pentru că pacienţii devin şi mai speriaţi deoarece tratamentul de urgenţă poate fi mai traumatizant.</p>
										<p>Un sondaj recent arată că durerea este un fenomen destul de rar în stomatologie. Sondajul a analizat 451 de adulţi care au mers la dentist în nord-vestul Angliei şi a relevat că 75% dintre pacienţi nu au simţit niciun fel de durere în timpul vizitelor la stomatolog. De aceea, nimic nu te împiedică să vii la dentist pentru tratamente.</p>
									</div>
								</div>
								
								<div class="col-lg-6 col-md-12 ">
									<div class="appointment-image">
										<img src="img/preturi2.png" alt="#">
									</div>
								</div>
								<div class="col-lg-12 ">
									<p>Un plan de tratament personalizat se poate realiza numai după o consultație complexă, prin urmare vă recomandăm să consultați specialiștii <span> DENTAPLUS.</span></p>
								</div>
					</div>
				</div>
			</div>
			<style>
				table{
				font-family : Times New Roman,sans-serif;
				border-collapse : collapse;
				margin-left: 120px;
				width: 80%;

				}

				td,th{
				border : 1px solid #dddddd;
				text-align : left;
				padding: 8px;
				}

				tr: nth-child(even){
				background-color: #dddddd;
				}
				</style>
				<!-- Tabel servicii -->
				<table>
					<tr>
					   <th> SERVICIU </th>
					   <th> PRET </th>
					</tr>
					<?php
						$query = "SELECT denumireServiciu,tarifServiciu FROM tblServicii";
						$result = mysqli_query($db, $query) or die('Error querying database.');
						while($row=mysqli_fetch_array($result))
						{
						?>
						<tr>
						   <td> <li> <?php echo $row['denumireServiciu']; ?> </li> </td>
						   <td> <?php echo $row['tarifServiciu'];  ?>  <i> RON </p> </i> </td>
						</tr>
					<?php }
					?>
				</table>
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