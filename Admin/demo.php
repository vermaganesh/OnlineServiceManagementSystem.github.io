<?php
   include("config.php");
   
   if(isset($_REQUEST['submit'])){
      $aEmail = mysqli_real_escape_string($db,trim($_REQUEST['email']));
      $aPassword = mysqli_real_escape_string($db,trim($_REQUEST['password']));
      $sql = "SELECT email, passcode FROM admin WHERE email='".$aEmail."' AND passcode='".$aPassword."' limit 1";
      $result = $db->query($sql);
      if($result && $result->num_rows){
         $_SESSION['login_user'] = true;
         // $_SESSION['aEmail'] = $aEmail;
         // Redirecting to RequesterProfile page on Correct Email and Pass
         echo "<script> location.href='welcome.php'; </script>";
         exit;
      } 
    }
      else {
         $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
      }
   
   
?>
