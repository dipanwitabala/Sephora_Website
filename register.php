<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   $name = mysqli_real_escape_string($conn, $filter_name);
   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));
   $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_STRING);
   $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:front.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="css/CSSfront.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     
    
      
<div class="form-container"style="background-color:transparent;">

   <form action="" method="POST">
 
      
        <div class="text-center mb-3">
             <div class="center">
                                                    <p style="font-size: 160%">Sign up </p>
                                                   
                                                </div>
                                                
                                                <div class="row mx-5" >
                                                <div class="form-outline mb-4 " >
                                                        <input type="text"name="name" required id="reName"style=" width:40% ;align:center;margin-left:30%;" class="form-control" placeholder="Username"value="<?php if (isset($_POST['submit'])) { echo $name; } ?>" required />
                                                    </div>
                                                  <div class="form-outline mb-4 " >
                                                        <input type="email"name="email"required id="reName"style=" width:40% ;align:center;margin-left:30%;" class="form-control" placeholder="email"value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required />
                                                    </div>
                                                    <div class="form-outline mb-4 ">
                                                        <input type="password"name="pass"  style=" width:40% ;align:center;margin-left:30%;"required id="regPassword" class="form-control" placeholder="Password"value="<?php if (isset($_POST['submit'])) { echo $pass; } ?>" required />
                                                    </div>
                                                    <div class="form-outline mb-4 ">
                                                        <input type="password"name="cpass" style=" width:40% ;align:center;margin-left:30%;" required id="reregPassword" class="form-control" placeholder="Repeat Password" value="<?php if (isset($_POST['submit'])) { echo $cpass; } ?>" required/>
                                                    </div>
                                                </div>
                                                <div class="row mb-4" style="margin-left:10%;">
                                                    <div class="col-md-10 d-flex justify-content-center">
                                                        <div class="form-check mb-3 mb-md-0"  style="align-content:center;">
                                                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" style="background-color: #dc143c; border: #dc143; "checked />
                                                            <label class="form-check-label" for="loginCheck"> I have read and agree to the terms</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                  <button type="submit" name="submit"class="btn btn-primary btn-block mb-4" style="background-color: #dc143c; border: #dc143c;">Register</button>
                                                </div>
                                                 <div class="text-center">
                                                    <p>Already have an account? <a  href ="login.php" style=" color: #dc143c; font: bold;" role="button">Sign In</a></p>
                                                </div>

   </form>

</div>

 <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>
   


</body>
</html>