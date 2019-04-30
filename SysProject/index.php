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

    <title>Data Science Course Webpage</title>

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
                  
                  <?php
                        $val = 1;
                          $qry = mysqli_query($db,"SELECT * FROM `Selection` WHERE id = '$val'");
                          $data = mysqli_fetch_array($qry,MYSQLI_ASSOC);
                          if($data['value'] == 1){
                            echo ' <a class="nav-link" href="selectedlist.php">Selected Students</a>';
                          }else{
                            echo '<a class="nav-link" style="pointer-events: none;
  cursor: default;" href="selectedlist">Selected Students</a>';
                          }
                        ?>
                  <a class="nav-link" href="admissions.php">Admission</a>
					<a class="nav-link" href="#">Course management</a>
                </nav>

                <span class="navbar-divider"></span>

                <div>
                  <a class="btn btn-sm btn-round btn-primary ml-lg-4 mr-2" href="login.php">Log in</a>
                </div>
              </section>

            </div>
          </nav><!-- /.navbar -->


    <!-- Header -->
    <header class="header text-white h-fullscreen text-center text-lg-left pb-8" style="background-image: url(assets/img/header.jpg);" data-overlay="6">
        <div class="container">

          <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">

              <h1 class="display-3 fw-500">CS515: Data Science</h1>
              <p class="lead-2 text-white mt-6 mb-8"><span class="fw-400">IIT Guwahati</span> is offering a course in
Data Science for M.Tech. The course is interdisciplinary and initiated jointly by CSE, EEE, and Math departments.</p>

              <p class="gap-xy">
                <a class="btn btn-lg btn-round mw-200 btn-primary" href="admissions.php">Admission</a>
                <a class="btn btn-lg btn-round mw-200 btn-info" href="#">Course management</a>
              </p>

            </div>

            <div class="col-12 align-self-end text-center mt-6">
              <a class="scroll-down-1 scroll-down-white" href="#advertisement"><span></span></a>
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
      <section class="section bg-gray overflow-hidden" id="advertisement">
        <div class="container">
          <div class="row">

            <div class="col-md-6 align-self-center text-center text-md-left">
              <h2>About the Course</h2><br>
              <p>Data science is a multi-disciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from structured and unstructured data. Data science is the same concept as data mining and big data: "use the most powerful hardware, the most powerful programming systems, and the most efficient algorithms to solve problems"</p>
              <br>
              <?php
                        $val = 1;
                          $qry = mysqli_query($db,"SELECT * FROM `Registration` WHERE id = '$val'");
                          $data = mysqli_fetch_array($qry,MYSQLI_ASSOC);
                          if($data['value'] == 1){
                            echo '<a class="btn btn-lg btn-round btn-primary shadow-3" href="registration_form.php">Apply Now</a>';
                          }else{
                            echo '<a class="btn btn-lg btn-round btn-primary shadow-3" style="pointer-events: none;
  cursor: default;" href="registration_form.php">Apply Now</a>';
                          }
                        ?>
            </div>

            <div class="col-md-5 mx-auto text-center mt-8 mt-md-0">
              <img src="assets/img/dataidea.jpg" alt="..." data-aos="fade-up">
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