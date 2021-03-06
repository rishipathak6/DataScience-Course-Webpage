<?php
    include('MyConfig.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Admissions: Data Science Course</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/iitglogo.png">
    <link rel="icon" href="assets/img/iitglogo.png">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="Data Science Course Webpage">
    <meta property="og:description" content=": IIT Guwahati is going to offer M Tech in
Data Science. The course is interdisciplinary and initiated jointly by CSE, EEE, and Math
departments.">
    <meta property="og:image" content="assets/img/datascience.jpeg">
    <meta property="og:url" content="http://thetheme.io/thesaas/">
    <meta name="twitter:card" content="summary_large_image">
  </head>

  <body>


              <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
            <div class="container">

              <div class="navbar-left">
                <button class="navbar-toggler" type="button">&#9776;</button>
                <a class="navbar-brand" href="index.php">
                  <img class="logo-dark" src="assets/img/iitglogo.png" height="50px" width="50px" alt="logo">
                  <img class="logo-light" src="assets/img/iitglogolight.png" height="50px" width="50px" alt="logo">
                </a>
              </div>

              <section class="navbar-mobile">
                <nav class="nav nav-navbar ml-auto">
                  
                </nav>

                

<!--
                <div>
                  <a class="btn btn-sm btn-round btn-primary ml-lg-4 mr-2" href="#">Log in</a>
                </div>
-->
              </section>

            </div>
          </nav><!-- /.navbar -->


    <!-- Header -->
    <header class="header text-white h-fullscreen text-center text-lg-left pb-8" style="background-image: url(assets/img/admission.jpg);" data-overlay="3">
        <div class="container">
            <div class="row align-items-center">
				<div class="col-md-5 mx-auto">
				<h1>Notices</h1>
                <div class="pre-scrollable mh-500 section-dialog">
                    <div class="row">

                  <?php
                    $qry = mysqli_query($db,"SELECT * FROM `Advertisement`");
                    $count = 0;
                    while($data = mysqli_fetch_assoc($qry)){
                      $count++;
                      $about = $data['about'];
                      $topic = $data['topic'];
                      echo "<div class='mx-md-auto'>
              <div class='alert alert-primary' role='alert'>
              <h4 class='alert-heading fw-500 text-primary'>'".$topic."'</h4>
              <p class='text-black-50'>'".$about."'</p>
              </div>
            </div>";
                    }
                    if($count==0){
                      echo "<div class='mx-md-auto'>
              <div class='alert alert-primary' role='alert'>
              <h4 class='alert-heading fw-500 text-primary'>Notices</h4>
              <p class='text-black-50'>Nothing Available Right Now!!</p>
              </div>
            </div>";
                    }
                  ?>







<!-- 						<div class='mx-md-auto'>
						  <div class='alert alert-primary' role='alert'>
							<h4 class='alert-heading fw-500 text-primary'>Well done!</h4>
							<p class="text-black-50">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
						  </div>
						</div>
						<div class="mx-md-auto">
						  <div class="alert alert-primary " role="alert">
							<h4 class="alert-heading fw-500 text-primary">Well done!</h4>
							<p class="text-black-50">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
						  </div>
						</div>
						<div class="mx-md-auto">
						  <div class="alert alert-primary " role="alert">
							<h4 class="alert-heading fw-500 text-primary">Well done!</h4>
							<p class="text-black-50">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
						  </div>
						</div>
						<div class="mx-md-auto">
						  <div class="alert alert-primary " role="alert">
							<h4 class="alert-heading fw-500 text-primary">Well done!</h4>
							<p class="text-black-50">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
						  </div>
						</div>
						<div class="mx-md-auto">
						  <div class="alert alert-primary " role="alert">
							<h4 class="alert-heading fw-500 text-primary">Well done!</h4>
							<p class="text-black-50">Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
						  </div>
						</div> -->
					</div>
					</div></div>
                <div class="col-lg-6">
                    <h1>Do you <span class="text-primary">want to learn</span><br>Data Science ?</h1>
                    <p class="lead mt-5 mb-8">Data Science is a blend of various tools, algorithms, and machine learning principles with the goal to discover hidden patterns from the raw data. </p>
                    <p class="gap-xy">
                      
                        <?php
                        $val = 1;
                          $qry = mysqli_query($db,"SELECT * FROM `Registration` WHERE id = '$val'");
                          $data = mysqli_fetch_array($qry,MYSQLI_ASSOC);
                          if($data['value'] == 1){
                            echo '<a class="btn btn-success" href="registration_form.php">Register Now<i class="ti-arrow-right fs-9 ml-2"></i></a>';
                          }else{
                            echo '<a class="btn btn-success" style="pointer-events: none;
  cursor: default;" href="registration_form.php">Register Now<i class="ti-arrow-right fs-9 ml-2"></i></a>';
                          }

                        ?>
                    </p>
                </div>
            </div>
        </div>
      </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content">


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Populate the page
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
<!--
      <section class="section bg-gray overflow-hidden" id="advertisement">
        <div class="container">
          <div class="row">

            <div class="col-md-6 align-self-center text-center text-md-left">
              <h2>About the Course</h2><br>
              <p>Data science is a multi-disciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from structured and unstructured data. Data science is the same concept as data mining and big data: "use the most powerful hardware, the most powerful programming systems, and the most efficient algorithms to solve problems"</p>
              <br>
              <a class="btn btn-lg btn-round btn-primary shadow-3" href="#">Apply Now</a>
            </div>

            <div class="col-md-5 mx-auto text-center mt-8 mt-md-0">
              <img src="assets/img/dataidea.jpg" alt="..." data-aos="fade-up">
            </div>

          </div>
        </div>
      </section>
-->


    </main>


    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">

          

          <p class="small">Copyright © 2019 IIT Guwahati, All rights reserved.</p>

        </div>
      </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="assets/js/page.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>
