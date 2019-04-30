<?php
    include("MyConfig.php");
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
       
       $myusername = mysqli_real_escape_string($db,$_POST['username']);
       $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
       
       $sql = "SELECT * FROM People WHERE username = '$myusername' and password = '$mypassword'";
       $result = mysqli_query($db,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

       $count = mysqli_num_rows($result);
    
       if($count == 1) {
          $_SESSION['login_user'] = $myusername;
          $_SESSION['designation'] = $row['designation'];
          if($row['designation'] == 'student'){
              header("location: dashboard_student.php");
          }
          else if($row['designation'] == 'faculty'){
          	  header("location: dashboard_faculty.php");	
          }
          else if($row['designation'] == 'staff'){
              header("location: dashboard_staff.php");  
          }
       }else {
          echo '<script language="javascript">alert("Username And Password Not Valid"); window.location.href = "login.php"</script>';
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

    <title>Log In: Data Science Course</title>

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
                    <a class="btn btn-sm btn-round btn-primary ml-lg-4 mr-2" href="index.php">HomePage</a>
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
    <section class="section py-10" style="background-image: url(assets/img/login.jpg)" data-overlay="5">

        <div class="container">
          <h2 class="text-white text-center lead-6">Welcome to CS513</h2>
          <p class="text-white text-center opacity-70 lead">Start to explore the course.</p>
          <br>

          <div class="row">
            <form class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" method="POST">
              <div class="form-group input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                </div>
                <input type="text" name="username" class="form-control" placeholder="Username">
              </div>

              <div class="form-group input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key fa-fw"></i></span>
                </div>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>

              <button class="btn btn-block btn-lg btn-success">Log in</button>
            </form>
          </div>

        </div>
      </section>
<!-- /.header -->


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
