<?php


session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

include "db_conn.php";

$sqlServices = "SELECT idServiciu, denumireServiciu FROM tblServicii";
$resultServices = mysqli_query($conn, $sqlServices);
$services = mysqli_fetch_all($resultServices, MYSQLI_ASSOC);

$sqlMedici = "SELECT idMedic, numeMedic FROM tblMedici";
$resultMedici = mysqli_query($conn, $sqlMedici);
$medici = mysqli_fetch_all($resultMedici, MYSQLI_ASSOC);

if (isset($_POST["submit"])) {
   $dataProgramare = $_POST['dataProgramare'];
   $oraProgramare = $_POST['oraProgramare'];
   $tipServiciu = $_POST['tipServiciu'];
   $medicAles = $_POST['medicAles'];
   $codPacient = $_POST['codPacient'];

   $checkAvailabilityQuery = "SELECT * FROM `tblProgramari` WHERE `dataProgramare` = '$dataProgramare' AND `oraProgramare` = '$oraProgramare' AND `medicAles` = '$medicAles'";
   $checkAvailabilityResult = mysqli_query($conn, $checkAvailabilityQuery);

   if (mysqli_num_rows($checkAvailabilityResult) > 0) {
      $errorMsg = "Intervalul de timp nu este disponibil, vă rugăm să alegeți altul.";
   } else {
      $sql = "INSERT INTO `tblProgramari`(`idProgramare`, `dataProgramare`, `oraProgramare`, `tipServiciu`, `medicAles`, `codPacient`) VALUES (NULL,'$dataProgramare','$oraProgramare','$tipServiciu','$medicAles','$codPacient')";

      $result = mysqli_query($conn, $sql);

      if ($result) {
         header("Location: appointment.php");
         exit();
      } else {
         echo "Failed: " . mysqli_error($conn);
      }
   }

}




?>




<!DOCTYPE html>
<html class="no-js" lang="zxx" lang="en">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Programare nouă </title>
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
								<li> <a class="nav-link" href="logout_admin.php">Logout</a></li>
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
											<li> <a href="#">Home <i class="icofont-rounded-down"></i></a>
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
											<li><a href="#">Prețuri <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="preturi.php">Servicii dentare</a></li>
													<li><a href="abonamente.php">Abonamente</a></li>
												</ul>
											  
											
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
    <body>
	
		
	
		

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Programare nouă</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
       

         <?php if (isset($_SESSION["user_id"])) : ?>
            <!-- Show logout button if logged in -->
            <div class="navbar-collapse justify-content-end" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                 
               </ul>
            </div>
         <?php endif; ?>
      </div>
   </nav>
    
<section class="why-choose section" >
   <div class="container">
      <div class="text-center mb-4">
         <h3>Adaugă o programare</h3>
         <p class="text-muted">Completează formularul de mai jos</p>
      </div>

      <?php
      // Display error message if it exists
      if (!empty($errorMsg)) {
         echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $errorMsg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
      }
      ?>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Data:</label>
                  <input type="date" class="form-control" name="dataProgramare">
               </div>

               <div class="col">
                  <label class="form-label">Ora:</label>
                  <input type="time" class="form-control" name="oraProgramare">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Tip serviciu:</label>
               <select class="form-select arrow" name="tipServiciu">
                  <?php
                  foreach ($services as $service) {
                     echo '<option value="' . $service['idServiciu'] . '">' . $service['denumireServiciu'] . '</option>';
                  }
                  ?>
               </select>
            </div>

            <div class="mb-3">
               <label class="form-label">Medicul dorit:</label>
               <select class="form-select arrow" name="medicAles">
                  <?php
                  foreach ($medici as $medic) {
                     echo '<option value="' . $medic['idMedic'] . '">' . $medic['numeMedic'] . '</option>';
                  }
                  ?>
               </select>
            </div>

            <input type="hidden" name="codPacient" value="<?php echo $_SESSION['user_id']; ?>">

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</section>
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