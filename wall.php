<?php
    include 'map/sec.php';                      
    $sec_id = $_GET["sec"];                   
    $stu = $_GET["stu"];
    
    if($sec_id=='a' || $sec_id == 'b')
        $true = 1;
    else{
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The page that you have requested could not be found.";
        exit();
    }
    if($stu < 1 || $stu > count($stu_map[$sec_id])){
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The page that you have requested could not be found.";
        exit();
    }
    $stu_name = $stu_map[$sec_id][$stu];
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>DTU-IT Yearbook 2020 - <?= $stu_name ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<!-- styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="assets/css/prettyPhoto.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet" />
	<<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Roboto+Condensed:400,300,700" rel="stylesheet" />

	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/color/default.css" rel="stylesheet" />

	<!-- Fav and touch icons -->
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
	<section id="intro" class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<h2><a href='sec.php?id=<?=$sec_id?>'><?= $sec_map[$sec_id] ?></a></h2> 
               

    				<h2>Student <?= $stu ?></h3>
    			</div>
    		</div>
			<div class="row">
				<div class="span12">
					<?php

					    $stu_prev = $stu - 1;
					    $href = "wall.php?sec=$sec_id&stu=$stu_prev";           //Condition for Previous and Next Buttons
					    if ($stu_prev>=1) {
					        echo "<a href='$href' id='next_button'><button type='button' class='btn btn-primary'> &larr; Previous  </button></a>";
					    }
					?>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					
						<h2><i class="icon-cogs"></i><strong><?= $stu_name ?></strong> </h2>
					
				</div>
			</div>
			<div class="row">
				<div class="span12">		
					<?php
						$stu_next = $stu + 1;
					    $href = "wall.php?sec=$sec_id&stu=$stu_next";
					    if ($stu_next<=count($stu_map[$sec_id])) {
					        echo "<a href='$href' id='next_button'><button type='button' class='btn btn-primary'> Next &rarr; </button></a>	";
					    }
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- section main content -->
	<section id="maincontent" class="section">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						
							<!-- Add Disqus Code Here -->
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section main content -->

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
