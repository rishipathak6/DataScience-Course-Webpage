<?php
   include('MyConfig.php');
   $op = 1;
     $myqry = mysqli_query($db,"SELECT * FROM `Selection` WHERE id='$op'");
     $mydata = mysqli_fetch_array($myqry,MYSQLI_ASSOC);
     if($mydata['value'] == 1){
         header("location:index.php");
     }

   $qry = mysqli_query($db,"SELECT * FROM `Applicant`");
   $curr = mysqli_num_rows($qry);
   $applicationnumber = 190101000 + $curr;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["firstname"];
        $secondname = $_POST["secondname"];
        $gatescore = $_POST["gatescore"];
        $appnum = $applicationnumber;
        $username = $_POST["username"];
        $email = $_POST["email"];
        $prevcolledge = $_POST["prevcolledge"];
        $insertqry = mysqli_query($db,"INSERT INTO `Applicant`(`username`,`appnum`,`firstname`,`secondname`,`gatescore`,`email`,`prevcolledge`)VALUES('".$username."','".$appnum."','".$firstname."','".$secondname."','".$gatescore."','".$email."','".$prevcolledge."')");
        if($insertqry){
          echo '<script language="javascript">alert("Registration Successful");
          windows.location.href="registration_form.php"</script>';
        }else{
          echo '<script language="javascript">alert("This Username is Taken");
          windows.location.href="registration_form.php"</script>';
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

    <title>Registration Form: Data Science Course</title>

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
                  	<!-- <a class="nav-link" href="#">Dashboard</a> -->
                </nav>

                <span class="navbar-divider"></span>

                <div>
                  <a class="btn btn-sm btn-round btn-primary ml-lg-4 mr-2" href="index.php">Homepage</a>
                </div>
              </section>

            </div>
          </nav><!-- /.navbar -->


    <!-- Header -->
    <section class="section py-8" style="background-image: url(assets/img/registrationForm.jpg)" data-overlay="5">

        <div class="container">
          <h2 class="text-white text-center lead-6">Registration Form</h2>
          <p class="text-white text-center opacity-80 lead-2">The form for new students/applicants</p>
          <br>

          <div class="row">
            <form class="col-11 col-md-6 col-xl-5 mx-auto section-dialog bg-gray p-5 p-md-7" method="POST">



            <div class="form-group">
          <label class="lead-1 fw-600">Application Number</label>
          <input class="form-control" type="text" name="appnum" disabled="true" value = "<?php echo (isset($applicationnumber))?$applicationnumber:'';?>">
          </div>
              	<div class="form-group">
					<label class="fw-600 lead-1">First Name</label>
					<input class="form-control" type="text" placeholder="First name" name="firstname" required="true">
				</div>

              	<div class="form-group">
					<label class="lead-1 fw-600">Last Name</label>
					<input class="form-control" name="secondname" type="text" placeholder="Last name" required="true">
				</div>
				
				<div class="form-group">
					<label class="lead-1 fw-600">Email address</label>
					<input class="form-control" type="email" name="email" placeholder="Email address" required="true">
				</div>
               
				<div class="form-group">
					<label class="lead-1 fw-600">Username</label>
					<input class="form-control" name="username" type="text" placeholder="Username" required="true">
				</div>
				
				<!-- <div class="form-group">
					<label class="lead-1 fw-600">Password</label>
					<input class="form-control" type="password" placeholder="Password">
				</div>
				
				<div class="form-group">
					<label class="lead-1 fw-600">Confirm Password</label>
					<input class="form-control is-invalid" type="password" placeholder="Confirm Password">
					<div class="invalid-feedback">Passwords don't match.</div>
				</div> -->
				
				<div class="form-group">
					<label class="lead-1 fw-600">GATE score</label>
					<input class="form-control" type="text" name="gatescore" placeholder="GATE score" required="true">
				</div>
        <div class="form-group">
          <label class="lead-1 fw-600">Previous Colledge</label>
          <input class="form-control" type="text" name="prevcolledge" placeholder="Previous Colledge" required="true">
        </div>
        
        <?php
                  $x = 0;
                  $qry = mysqli_query($db,"SELECT * FROM `ExtraInfo` WHERE usefield = '$x'");
                  while($data = mysqli_fetch_assoc($qry)){
                    $info = "Enter Your ".$data["fieldname"];

                    echo " <div class='form-group'>
          <label class='lead-1 fw-600'>".$data['fieldname']."</label>
          <input class='form-control' type='text' placeholder= '".$info."' required='true'>
        </div>";
                  }
                    
        ?>          
        

          <button class="btn btn-block btn-lg btn-success">Register</button>
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
