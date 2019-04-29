<?php
	include('Session.php');
	if ($login_designation == "staff" ){
      header("location:dashboard_staff.php");
  }
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>View Notices</title>

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
	  <section class="section bg-gray overflow-hidden" id="advertisement" >
      <div class="section-header fw-500">
          <h2 class="display-3 fw-400">View Assignment</h2>
      </div>
        <div class="container">
      <div class="row gap-y">
        <?php
          $qry = mysqli_query($db,"SELECT * FROM `UploadNotices`");

          $pathy = "Notices/pdf/";
          $count = 0;
          while($data = mysqli_fetch_assoc($qry)){
            $count++; 
              // echo $data['path'];
              $pathx = $pathy.$data['path'];
              echo "<div class='col-12 col-lg-6'>
          <div class='card text-white justify-content-end bg-img h-400' style='background-image: url(assets/img/sendNotices.jpg); '' data-scrim-bottom='5'>
            <a href='#'>
          <div class='card-body flex-grow-0'>
            <a href='".$pathx."' target='_blank'><h3 class='card-title fw-200 text-center'>'".$data['path']."'</h3></a>
          </div>
            </a>
          </div>
        </div>";
          }
          
          if($count == 0){
            echo "<div class='col-12 col-lg-6 jumbotron'>
              <p> No Notices Available</p>
        </div>";
          }
          ?>

      </div>
        </div>
      </section>



       <!-- Scripts -->
    <script src="assets/js/page.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>