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
     if($mydata['value'] == 1){
         header("location:dashboard_staff.php");
     }

$qry = mysqli_query($db,"SELECT * FROM `Applicant` ORDER BY gatescore DESC");
                    $count = 0;
                    $rollnumber = 190101000;
                    while($data = mysqli_fetch_assoc($qry)){
                      $count++;
                      if($count<=20){
                      $roll = $rollnumber + $count;
                      $strroll = "$roll";
                      $password = "INDIA";
                      $username = $data["firstname"].$strroll;
                      $webmail = $data["firstname"].$strroll."@iitg.ac.in";
                      $insqry = mysqli_query($db,"INSERT INTO `People`(`username`,`password`,`rollnumber`,`webmail`)VALUES('".$username."','".$password."','".$roll."','".$webmail."')");
                      
                    }
                    if($count==0){
                      echo '<script language="javascript">alert("No Students To Register"); window.location.href = "dashboard_staff.php"</script>';
                    }else{
                        $x = 1;
                        $uquery = mysqli_query($db,"UPDATE `Selection` SET value='$x' WHERE id='$x'");
                        echo '<script language="javascript">alert("Registration Succesful"); window.location.href = "dashboard_staff.php"</script>';
                    }

                  }
                      
?>