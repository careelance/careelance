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

  <title>careelance - Explore</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/careelance.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/dropDownUser.js"></script>
</head>
<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="main_page_user.php" class="logo">
              <img src="cl.png" height="60px" width="180px" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="main_page_user.php" >Home</a></li>
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
  
  <!-- ***** Post Job Start *****-->
  <section style="padding-top: 100px">
  <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="post-job bg-white p-4">
              <div class="custom-form">
                <div id="message3"></div>
                  <form action="jobPost.php" method="POST" enctype="multipart/form-data">
                    <h4 class="text-dark mb-4">Post A New Job</h4>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group app-label mt-2">
                            <label for="company-name" class="text-muted">Job Type</label>
                              <div class="form-button">
                                <select class="nice-select" name="jobtype">
                                  <option data-display="type">Type</option>
                                  <option value="UI/UX Designer">UI/UX Designer</option>
                                  <option value="Frontend Developer">Frontend Developer</option>
                                  <option value="Backend Developer">Backend Developer</option>
                                  <option value="Software Engineering">Software Engineering</option>
													        <option value="Education">Education</option>
                                </select>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group app-label mt-2">
                            <label for="minimum-salary" class="text-muted">Minimum Salary (RM)</label>
                            <input name="minsalary" type="text" class="form-control resume" placeholder="1500">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group app-label mt-2">
                            <label for="maximum-salary" class="text-muted">Maximum Salary (RM)</label>
                            <input name="maxsalary" type="text" class="form-control resume" placeholder="10000">
                          </div>
                        </div>
                      </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="level" class="text-muted">Education Level</label>
                                            <div class="form-button">
                                                <select class="nice-select" name="edulevel">
                                                    <option data-display="Level">Level</option>
                                                    <option value="lowlevel">Diploma/A-Levels/Foundation</option>
                                                    <option value="bachelor">Bachelor's Degree</option>
                                                    <option value="master">Master's Degree</option>
                                                    <option value="phd">PhD/Doctorate Degree</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="url" class="text-muted">Website</label>
                                            <input name="weburl" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="email-address" class="text-muted">Email Address</label>
                                            <input name="email" type="text" class="form-control resume" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="phonenum" class="text-muted">Phone Number</label>
                                            <input name="phonenum" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="description" class="text-muted">Job Description</label>
                                            <textarea name="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="picture" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01"><i class="mdi mdi-cloud-upload mr-1"></i> Upload Files</label>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <h6 class="text-muted mb-0">Upload Images</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center mt-4">
                                            <button name="jobPost" type="submit" class="btn btn-info" style="border-radius: 20px; margin-top: 20px;">Post Job</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
  <!-- ***** Post Job End *****-->
</body>
</html>