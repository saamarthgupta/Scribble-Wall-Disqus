<?php
    include 'map/sec.php';                  //Include File
    $sec_id = $_GET['id'];                   //Get Course Name
    if($sec_id=='a' || $sec_id == 'b')
        $true = 1;
    else{
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The Section that you have requested could not be found.";
        exit();
    }
    $sec_name = $sec_map[$sec_id];     //Student Name
    $stu_names = $stu_map[$sec_id];
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>DTU-IT Yearbook 2020 - <?= $sec_name ?>    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<!-- styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="assets/css/prettyPhoto.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Roboto+Condensed:400,300,700" rel="stylesheet" />

	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/color/default.css" rel="stylesheet" />

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="assets/ico/favicon.ico" />
	
</head>

<body>
	<header>
    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
      <div class="navbar-inner">
        <div class="container">
          <div class="logo">
            <a href="index.php"><!-- <img src="assets/img/logo.png" alt="" /> --></a>
          </div>
          <div class="navigation">
            <nav>
              <ul class="nav pull-right">
                <li ><a href="index.php">Home</a></li>
                <li><a href="index.php#section-table">Sections</a></li>
                <li><a href="index.php#guidelines">Guidelines</a></li>
                <li class="dropdown current">
                  <a href="#">Sections <i class="icon-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="sec.php?id=a" class="external">IT - A</a></li>
                    <li><a href="sec.php?id=b" class="external">IT - B</a></li>
                    
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <!-- end top -->
  </header>
	<!-- section intro -->
	<section id="intro" class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="inner-heading">
						<h2><i class="icon-cogs"></i><strong><?= $sec_name ?></strong></h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end section intro -->
	<!-- section main content -->
	<section id="maincontent" class="section demoicon">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span12" style="text-align: center;">
							<h2>Student List</h2>
						</div>
						<div class="row">
							<div class="span12">
								<div class="solid_line">
								</div>
							</div>
						</div>
					</div>
					<div class="row" style='padding-top:10px;'>				
						<div class="span3" style='padding-left:30px'>
							<ul class="the-icons">
								<?php 
								    for ($stu_no = 1; $stu_no <= count($stu_map[$sec_id]); $stu_no++) 
								    {
								        $stu_name = $stu_names[$stu_no];                    
								            echo "<li> <a href='wall.php?sec=$sec_id&stu=$stu_no'>".
								            "Student $stu_no - $stu_name</a></li>\n";
								    }
								?>
							</ul>
						</div>
					
						
					</div>
					<div class="row">
						<div class="span12">
							<div class="solid_line">
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<!-- end section main content -->

	<footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div class="logo">
                <a class="brand" href="index.php"><img src="assets/img/logo.png" alt="" /></a>
              </div>
              
              <div class="credits">
            
                Created by Saamarth Gupta
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

	<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

	<!-- Javascript Library Files -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.easing.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/parallax/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/nagging-menu.js"></script>
	<!-- <script src="assets/js/jquery.nav.js"></script> -->
	<script src="assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
	<script src="assets/js/portfolio/jquery.quicksand.js"></script>
	<script src="assets/js/portfolio/setting.js"></script>
	<script src="assets/js/hover/jquery-hover-effect.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/animate.js"></script>

	<!-- Template Custom Javascript File -->
	<script src="assets/js/custom.js"></script>

</body>

</html>
