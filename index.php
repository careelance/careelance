<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="c_mini.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>careelance - Freelance Centre</title>

    <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/careelance.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!--<style>body{background-color:#C3E2F7ff}</style>-->

    <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/dropDownUser.js"></script>
  <script type="text/javascript"> 
  window.$crisp = [];
  window.CRISP_WEBSITE_ID = "00606ed3-20b9-46b9-a547-32b4aca345c2";
  (function() {
	  d = document;
	  s = d.createElement("script");
	  s.src = "https://client.crisp.chat/l.js";
	  s.async = 1;
	  d.getElementsByTagName("head")[0].appendChild(s);})(); 
    </script>

</head>

<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="cl.png" height="60px" width="180px" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="explore_page.php">Explore</a></li>
              <!--<li class="scroll-to-section"><div class="border-first-button"><a href="login_page.html">Log In</a></div></li>-->
              <?php
                
                if($_SESSION['logProof'] == TRUE){
                  if($_SESSION['typeofuser'] == 'Client'){
                    echo '
                  <li class="scroll-to-section">
                    
                      <div class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle mx-auto" 
                      data-bs-toggle="dropdown" onclick="myFunction()"
                      style="border: 1px solid #47597Fff !important;
                      border-radius: 23px;">
                    <span>'
                    . $_SESSION['loggedUser'] .
                    '</span>
                      </button>
                      <ul class="dropdown-menu" id="myDrop">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><a class="dropdown-item" href="post_job.php">Post a Job</a></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                    </div>
                  
                  </li>';
                  } else if($_SESSION['typeofuser'] == 'Freelancer'){
                    echo '
                  <li class="scroll-to-section">
                    
                      <div class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle mx-auto" 
                      data-bs-toggle="dropdown" onclick="myFunction()"
                      style="border: 1px solid #47597Fff !important;
                      border-radius: 23px;">
                    <span>'
                    . $_SESSION['loggedUser'] .
                    '</span>
                      </button>
                      <ul class="dropdown-menu" id="myDrop">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                    </div>
                  
                  </li>';
                  }
                } else{
                  echo '<li class="scroll-to-section"><div class="border-first-button"><a href="login_page.html">Log In</a></div></li>';
                }
                ?> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Careelance</h6>
                    <h2>Explore <span style="color:#47BD5Cff">part-time jobs</span> to build your career!</h2>
                    <p>A freelance stop centre that aim to support the fresh graduate to find a part time job.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="explore_page.html">Search For Job</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="vector_bg.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/about-dec-v3.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Who is <em>careelance</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>careelance is developed by a group of four (4) students for the ease of undergraduates, postgraduates, and fresh graduates to browse through numerous part-time jobs to build your career and earn extra pocket money!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 careelance All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  
</body>
</html>
