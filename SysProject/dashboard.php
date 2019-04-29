<?php
   include('Session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
      <h2><a href = "upload_assignment.php">Upload Assignment</a></h2>
      <h2><a href = "view_assignments.php">View Assignments</a></h2>
   </body>
   
</html>