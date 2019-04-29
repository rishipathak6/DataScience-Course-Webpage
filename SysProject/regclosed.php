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

     
     $val = 1;
      $qry = mysqli_query($db,"SELECT * FROM `Registration` WHERE id = '$val'");
      $data = mysqli_fetch_array($qry,MYSQLI_ASSOC);
      if($data['value'] == 1){
        $x = 0;
        $uquery = mysqli_query($db,"UPDATE `Registration` SET value='$x' WHERE id='$val'");
        echo '<script language="javascript">alert("Registration Closed"); window.location.href = "dashboard_staff.php"</script>';
      }else{
        echo '<script language="javascript">alert("Registration Already Closed"); window.location.href = "dashboard_staff.php"</script>';
      }
?>