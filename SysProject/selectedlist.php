<?php
   include('Session.php');
   if ($login_designation != "staff"){
      if($login_designation == "student"){
          header("location:dashboard_student.php");
      }else if($login_designation == "faculty"){
          header("location:dashboard_faculty.php");
      }else {
          header("location:login.php");
      }
   }
   $op = 1;
     $myqry = mysqli_query($db,"SELECT * FROM `Selection` WHERE id='$op'");
     $mydata = mysqli_fetch_array($myqry,MYSQLI_ASSOC);
     if($mydata['value'] == 0){
         header("location:index.php");
     }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Selected Students:Data Science Course</title>

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
          <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="sticky">
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

                <span class="navbar-divider"></span>

                <div>
                  <a class="btn btn-sm btn-round btn-primary ml-lg-4 mr-2" href="dashboard_staff.php">Dashboard</a>
                </div>
              </section>

            </div>
          </nav><!-- /.navbar -->


    <!-- Header -->
    
	  
	  <header class="header h-fullscreen" style="background-image: linear-gradient(135deg, #f9f7ff 0%, #fff 50%, #f6f3ff 100%);">
        <div class="container">
          <div class="row align-items-center h-100">

            <div class="col-lg-6">
              <h1>Selected students</h1>
              <p class="lead mt-5 mb-8">Here is the list of selected students for the CS515: Data Science Course.</p>
             
		
				<div class="col-12 mx-auto" style="width: 0%;">
				  <a class="scroll-down-1" href="#list"><span></span></a>
				</div>
            </div>

            <div class="col-lg-5 ml-auto d-none d-lg-block">
              <img src="assets/img/selectedStudents.jpg" alt="img">
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
      <section class="section bg-gray overflow-hidden" id="list" >
		  <div class="section-header fw-500">
		  		<h2 class="display-4 fw-400">Selected Students List</h2>
		  </div>
		  <div class="row gap-y mx-13">

                <?php
                    $qry = mysqli_query($db,"SELECT * FROM `Applicant` ORDER BY gatescore DESC");
                    $count = 0;
                    $rollnumber = 190101000;
                    while($data = mysqli_fetch_assoc($qry)){
                      $count++;
                      if($count<=20){
                      $name = $data["firstname"]." ".$data["secondname"];
                      $gatescore = $data["gatescore"];
                      $appnum = $data["appnum"];
                      $roll = $rollnumber + $count;
                      $strroll = "$roll";
                      $webmail = $data["firstname"].$strroll."@iitg.ac.in";
                      $prevcolledge = $data["prevcolledge"];
                      echo "<div class='col-md-12'>
              <div class='card hover-shadow-4'>
                <div class='card-body'>
                  <div class='col team-3'>
            <div class='team-body'>
            <h3>NAME OF STUDENT : '".$name."'</h3>
            <small class='lead'><strong>Roll Number Allotted</strong> : '".$strroll."'</small> 
            <p class='d-block lead-1' style='margin-top: -15px'>
              <strong>GATE SCORE</strong> : '".$gatescore."'</p>
              <p class='lead-1' style='margin-top: -15px'>
              <strong>APPLICATION NUMBER</strong>  : '".$appnum."'<br>
              <strong>PREVIOUS COLLEDGE</strong>  : '".$prevcolledge."'
            </p>
            </div>
          </div>
                </div>
              </div>
            </div>";
                    }
                    if($count==0){
                      echo ' <div class="col-md-12">
              <div class="card hover-shadow-4">
                <div class="card-body">
                  <div class="col team-3">
            <div class="team-body"> 
            <p class="d-block lead-1" style="margin-top: 15px">
              No Students Registered Yet !!</p>
            </div>
          </div>
                </div>
              </div>
            </div>';
                    }
                  }
                      
                  ?>

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
