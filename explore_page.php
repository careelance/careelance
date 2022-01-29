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
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="c_mini.png" type="image/png">

  <title>careelance - Explore</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
    <!--<link href='https://fonts.googleapis.com/css2?family=PT+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./style.css">
    <style>body{background-color:#f0efeb}</style>-->

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
</head>
<body>
    <!-- ***** Preloader Start ***** -->
  <!--div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div-->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="cl.png" height="60px" width="180px" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.html" >Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="explore_page.php" class="active">Explore</a></li>
              <?php
                
                if($_SESSION['logProof'] == TRUE){
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
                      <li><a class="dropdown-item" href="#">Link 1</a></li>
                      <li><a class="dropdown-item" href="#">Link 2</a></li>
                      <li><a class="dropdown-item" href="#">Link 3</a></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                    </div>
                  
                  </li>';
                } else{
                  echo '<li class="scroll-to-section"><div class="border-first-button"><a href="login_page.html">Log In</a></div></li>';
                }
                ?> 
            </ul>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <!-- ***** Search Bar Start *****-->
  <section style="padding-top: 130px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
		  <div class="row search-page-top d-flex align-items-center justify-content-center">
			<h1 class="text-black" style="text-align: center">Search Results</h1>	
			  <form action="#" class="search-form-area">
				<div class="row justify-content-center" style="padding-top: 20px">
				  <div class="col-3 form-cols">
					<input type="text" class="form-control" name="search" placeholder="Job Name">
				  </div>
				  <div class="col-3 form-cols">
					<select class="form-select overflow-auto" style="width:100%">
					  <option value="1">Select job type</option>
            <option value="7">Any</option>
					  <option value="2">Software Engineering</option>
					  <option value="3">UI/UX Designer</option>
					  <option value="4">Backend Developer</option>
					  <option value="5">Research</option>
					  <option value="6">Education</option>
					</select>
				  </div>
				  <div class="col-1 form-cols">
					<button type="submit" class="btn btn-info" name="search" style="background: #47BD5Cff">Search</button>
				  </div>				
				</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!-- ***** Search Bar End *****-->
  
  <!-- ***** List Job Start *****-->
  <section class="post-area section-gap" style="padding-top: 100px">
	  <div class="container">
			<div class="row justify-content-center d-flex row-cols-1 row-cols-md-2">
        <div class="row ">
          <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-2">
              <div class="col-md-4">
                <img src="c_mini.png" class="rounded float-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><a href="#">UI/UX Designer</a></h5>
                  <h6>Company Name</h6>
                  <p class="card-text">We are searching for an eligible freelancer to work on our project.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** List Job End *****-->
</body>
</html>