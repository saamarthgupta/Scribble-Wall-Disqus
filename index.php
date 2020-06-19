<?php
    include 'map/sec.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>    DTU-IT Yearbook 2020 - Home        </title>
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

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.ico" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.ico" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.ico" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.ico" />
  <link rel="shortcut icon" href="assets/ico/favicon.ico" />

</head>

<body>
  <header>
    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
      <div class="navbar-inner">
        <div class="container">
          <div class="logo">
            <a href="index.php"><img src="assets/img/logo.png" alt="" /></a>
          </div>
          <div class="navigation">
            <nav>
              <ul class="nav pull-right">
                <li class="current"><a href="#intro">Home</a></li>
                <li><a href="#section-table">Sections</a></li>
                <li><a href="#guidelines">Guidelines</a></li>
                <li class="dropdown">
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
  <section id="intro">
    <div class="slogan">
      <div class="icon">
        <i style='padding-left:40px' class="icon-desktop icon-10x"></i>
      </div>
      <h1>Welcome to <span>Virtual </span> Scribble Day</h1>
      <h2>IT Department - Batch of 2020</h2>
    </div>
  </section>
  <!-- end intro -->
  <!-- Section about -->
  <section id="section-table" class="section" style="padding-top: 30px;padding-bottom: 30px">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="heading">
            <h3><span>Sections</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              Pick Your Poison
            </p>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="span6">
          <a href = 'sec.php?id=a'>
          <img src="https://res.cloudinary.com/cierdo/image/upload/v1591596363/team1_iajfra.jpg" alt="" class="img-polaroid" />
          <div class="roles">
            <h2><strong>IT - A</strong></h2>
            <p>
              
            </p>
            
          </div>
          </a>
        </div>
        <div class="span6">
          <a href = 'sec.php?id=b'>
          <img src="https://res.cloudinary.com/cierdo/image/upload/v1591596363/team2_w8c8hf.jpg" alt="" class="img-polaroid" />
          <div class="roles">
            <h2><strong>IT - B</strong></h2>
            <p>
            </p>
            
          </div>
          </a>
        </div>
  
      </div>
    </div>
  </section>
  <!-- end section about -->
  
  <!-- section contact -->
  <section id="guidelines" class="section" style="padding-top: 0px;padding-bottom: 30px">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="heading">
            <h3><span>Guidelines</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              Follow the following Guidelines for a seamless experience.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span6">
          <h4><strong>Commenting</strong></h4>
          <p>
            This is an Informal Platform, you are free to write anything about your classmates. Do Not Shitpost.
          </p>
          <p>
            Make sure not to start Conversations under a person's wall. This might result in a ban.
          </p>
          <p>
            Please make only 1 scribble entry for a person.
          </p>
          <p>
            
          </p>
          <!-- start contact form -->
          
        </div>
        <div class="span6">
          <h4><strong>Commenting Platform</strong></h4>
          <p>
            This Website uses Disqus platform for comments. Login Using your Social ID or create a Disqus account and start commenting.
          </p>
          <div class="dotted_line">
          </div>
         
          <p>
           If there are any discrepancies with your name or your name is missing, contact me. (Saamarth Gupta)
          </p>
          
        </div>
      </div>
    </div>
  </section>
  <!-- end section contact -->

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
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/animate.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>
