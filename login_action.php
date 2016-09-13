<?php
   include("dbConnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM user_details WHERE user_id = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      if (!$result) {
      printf("Error: %s\n", mysqli_error($con));
      exit();
         }
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         header("location: welcome.php?username=".urlencode($_POST['username']));
      }else {
         header("location: login.php?error=Your Login Name or Password is invalid");
      }
   }
?>