<?php
   include('Session.php');
   if ($login_designation != "student"){
   	  if($login_designation == "staff"){
          header("location:dashboard_staff.php");
      }else if($login_designation == "faculty"){
          header("location:dashboard_faculty.php");
      }else {
          header("location:login.php");
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Student Dashboard</title>

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
          <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="smart">
            <div class="container">

              <div class="navbar-left">
                <button class="navbar-toggler" type="button">&#9776;</button>
                <a class="navbar-brand" href="#">
                  <img class="logo-dark" src="assets/img/iitglogo.png" height="50px" width="50px" alt="logo">
                  <img class="logo-light" src="assets/img/iitglogolight.png" height="50px" width="50px" alt="logo">
                </a>
              </div>

              <section class="navbar-mobile">
                <nav class="nav nav-navbar ml-auto">
					
                </nav>

               

                <div>
                  <a class="btn btn-sm btn-round btn-primary ml-lg-4 mr-2" href = "logout.php">Log out</a>
                </div>
              </section>

            </div>
          </nav><!-- /.navbar -->


    <!-- Header -->
    <header class="header h-fullscreen" style="background-image: linear-gradient(135deg, #f9f7ff 0%, #fff 50%, #f6f3ff 100%);">
        <div class="container">
          <div class="row align-items-center h-100">

            <div class="col-lg-6">
              <h1>Student Dashboard</h1>
              <p class="lead mt-5 mb-8">Dashboard that shows you the assignments, notices and let you download your grade card.</p>
             
            </div>

            <div class="col-lg-5 ml-auto d-none d-lg-block">
              <img src="assets/img/student.jpg" alt="img">
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
      <section class="section bg-gray overflow-hidden" id="advertisement" >
		  <div class="section-header fw-500">
		  		<h2 class="display-3 fw-400">Dashboard</h2>
		  </div>
        <div class="container">
			<div class="row gap-y">
				<div class="col-12 col-lg-6">
				  <div class="card text-white justify-content-end bg-img h-400" style="background-image: url(assets/img/viewAssignments.jpg); " data-scrim-bottom="5">
					  <a href="#">
					<div class="card-body flex-grow-0">
					  <a href="view_assignments.php"><h3 class="card-title fw-200 text-center">View Assignments</h3></a>
					</div>
					  </a>
				  </div>
				</div>
				
				
				<div class="col-12 col-lg-6">
				  <div class="card text-white justify-content-end bg-img h-400" style="background-image: url(assets/img/sendNotices.jpg); " data-scrim-bottom="5">
					  <a href="#">
					<div class="card-body flex-grow-0">
					  <a href="view_notices.php"><h3 class="card-title fw-200 text-center">View Notices</h3></a>
					 
					</div>
					  </a>
				  </div>
				</div>
				
				<div class="col-12 col-lg-6">
				  <div class="card text-white justify-content-end bg-img h-400" style="background-image: url(assets/img/sendResults.jpg); " data-scrim-bottom="5">
					  <a href="#">
					<div class="card-body flex-grow-0">
					  <h3 class="card-title fw-200 text-center">Download Gradecard</h3>
					 
					</div>
					  </a>
				  </div>
				</div>
			</div>
        </div>
      </section>


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