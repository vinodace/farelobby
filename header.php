<?php 
	$phone = "+1-844-762-1214";
	$email = "help@farelobby.com";
?>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"> 
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap v5.0 -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Owl Carousel v2.3.4 -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <!-- Font Awesome Free 5.12.1 -->
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <!-- Font Awesome Free 6.7.2 -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Datepicker Jquery UI -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
<header>
	<div class="container-fluid header-topstrip">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<ul class="toplist">
						<li><a href="tel:<?php echo $phone; ?>"><i class="fas fa-phone-volume"></i> <?php echo $phone; ?> </a></li>
						<li><a href="mailto:<?php echo $email; ?>"><i class="far fa-envelope"></i> <?php echo $email; ?></a></li>
					</ul>
				</div>
				<div class="col-md-4 pl-0 pr-0 pl-md-3 pr-md-3 d-none d-md-block">
					<ul class="top-socialicon">
						<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul>
					

				</div>
			</div>
		</div>	
	</div>
	<!-- Top Strip -->
	<div class="container-fluid navigation-bg">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light navlr-pad">
			    <a  href="./">
			    	<img src="images/logo.png" alt="" class="logo">
			    </a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<?php
                        $nav1=$nav2=$nav3=$nav4=$nav5="";
                        $tt=explode("/",$_SERVER['PHP_SELF']);
                        $len=count($tt)-1;
                        $cur_page=$tt[$len];
                        switch($cur_page)
                        {
                        case "index.php":
                        $nav1='active';
                        break;
                        case "flights.php":
                        $nav2='active';
                        break;
                        case "about-us.php":
                        $nav3='active';
                        break;
                        case "packages.php":
                        $nav4='active';
                        break;
                        case "contact-us.php":
                        $nav5='active';
                        break;
                        }
                    ?>
			      <ul class="navbar-nav ms-auto">
			         <li class="nav-item">
			            <a class="nav-link <?php echo $nav1; ?>" href="./">Home</a>
			         </li>
			         <li class="nav-item">
				        <a class="nav-link <?php echo $nav2; ?>" href="flights.php">Flights</a>
				      </li>
			         <li class="nav-item">
				        <a class="nav-link <?php echo $nav3; ?>" href="about-us.php">About Us</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link <?php echo $nav4; ?>" href="packages.php">Packages</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link <?php echo $nav5; ?>" href="contact-us.php">Contact Us</a>
				      </li>
				      <li class="nav-item">
				      	<a class="nav-link" href="tel:<?php echo $phone; ?>" class="enquire-btn">Call Us : <?php echo $phone; ?> </a>
				      </li>
			      </ul>
			    </div>
			</nav>
			
		</div>	
	</div>	
</header>
<!-- Header -->