<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $Name = mysqli_real_escape_string($conn, $_POST['Name']);
   $Email = mysqli_real_escape_string($conn, $_POST['Email']);
   $Mobile_no = mysqli_real_escape_string($conn, $_POST['Mobile_no']);
   $Address = mysqli_real_escape_string($conn, $_POST['Address']);
   $Donation = mysqli_real_escape_string($conn, $_POST['Donation']);
   // $pass = md5($_POST['password']);
   //$cpass = md5($_POST['cpassword']);
   //$user_type = $_POST['user_type'];

  // $select = " SELECT * FROM user_info WHERE email = '$email' && password = '$pass' ";

  
    
         $insert = "INSERT INTO user_dona(Name ,Email, Mobile_no , Address, Donation) VALUES('$Name','$Email','$Mobile_no','$Address','$Donation')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   




?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register Your Donation</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">

</head>
<body background="images/flag3.jpg" width="100px" height ="200px" >
 
<div class="form-container">

   <form action="" method="post" >
      
      <h3>Register Your Donation </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="Name" required placeholder="enter your name">
      <input type="email" name="Email" required placeholder="enter your email">
      <input type="text" name="Mobile_no" required placeholder="enter your Mobile no">
      <input type="text" name="Address" required placeholder="enter your Address">
      <!--<input type="text" name="Donation" required placeholder="enter your Donation ">-->
      <div class="select-menu" >
         
         <div class="select-btn" >
            
            <span class="sBtn-text">Select Type Of Donation</span>
            <i class="bx bx-chevron-down"></i>
        </div>
         <ul class="options">
           <li class="option">
               <i class=""></i>
               <span class="option-text">Blood Donation</span>
           </li>
           <li class="option">
               <i class=""></i>
               <span class="option-text">Cloth Donation</span>
           </li>
           <li class="option">
               <i class=""></i>
               <span class="option-text">Book Donation</span>
           </li>
           <li class="option">
               <i class=""></i>
               <span class="option-text">Food Donation</span>
           </li>
         </ul>
  
         
      </div>
      
      
      <input type="submit" name="submit" value="submit now" class="form-btn">
      
   </form>

</div>
<script src="script.js"></script>


</body>

</html>