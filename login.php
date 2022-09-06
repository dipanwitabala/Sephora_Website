<?php 

include 'config.php';

session_start();

error_reporting(0);
if (isset($_SESSION['name'])) {
  header("Location: welcome.php");
}



if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
	$result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
      
    $row = mysqli_fetch_assoc($result);

    if($row['user_type'] == 'admin'){

       $_SESSION['admin_name'] = $row['name'];
       $_SESSION['admin_email'] = $row['email'];
       $_SESSION['admin_id'] = $row['id'];
       header('location:admin_page.php');

    }else{
      $_SESSION['user_name'] = $row['name'];
      $_SESSION['user_email'] = $row['email'];
      $_SESSION['user_id'] = $row['id'];
     

      header('location:front.php');
    }

 }else{
    $message[] = 'incorrect email or password!';
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="css/CSSfront.css">
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
                        <div class="row  mt-4" align="center">
                          <a href="front.php" style="text-decoration: none;"><h1 class="display-4" style=" color:black; font: bold;  ">WELCOME   TO   SEPHORA</h1></a>
                        </div>
                    

<div class="form-container"style="background-color:transparent;">
   <form action="" method="POST" >

   <div class="text-center mb-3">
       <div class="center">
                                                    <p style="font-size: 160%">Sign in</p>
                                                   
                                                </div>
                                                <p class="text-center" style="font-size:160%">or</p>
                                                <div class="row mx-5" >
                                                  <div class="form-outline mb-4 " >
                                                        <input type="text" name="name"style=" width:40% ;align:center;margin-left:30%;" value="<?php if (isset($_POST['submit'])) { echo $name; } ?>" required id="siName" class="form-control" placeholder="Username" />
                                                    </div>
                                                    <div class="form-outline mb-4 ">
                                                        <input type="password"name="password"style=" width:40% ;align:center;margin-left:30%;"value="<?php if (isset($_POST['submit'])) { echo $password; } ?>" required required id="siPassword" class="form-control" placeholder="Password" />
                                                    </div>
                                                </div>
                                                <div class="row mb-4" style="color:black;">
                                                    <div class="col-md-6 d-flex justify-content-center">
                                                        <div class="form-check mb-3 mb-md-0">
                                                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" style="background-color: #dc143c; border: #dc143c;"checked />
                                                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-center">
                                                        <a href="#!" style=" color: #dc143c; font: bold;">Forgot password?</a>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                  <button type="submit"name="submit" class="btn btn-primary btn-block mb-4" style="background-color: #dc143c; border: #dc143c;">Sign in</button>
                                               
                                                </div>
                                                 <div class="text-center">
                                                    <p>Not a member? <a  href ="register.php" style=" color: #dc143c; font: bold;" data-bs-toggle=""  data-bs-dismiss="">Register</a></p>
                                                </div>
                                              </div>
                                              </div>
   </form>
 </div>




</body>
</html>