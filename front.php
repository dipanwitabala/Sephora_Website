<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_wishlist'])){

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];

  
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($check_wishlist_numbers) > 0){
        $message[] = 'already added to wishlist';
    }elseif(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart';
    }else{
        mysqli_query($conn, "INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
        $message[] = 'product added to wishlist';
    }

}

if(isset($_POST['add_to_cart'])){

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart';
    }else{

        $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

        if(mysqli_num_rows($check_wishlist_numbers) > 0){
            mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        }

        mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'product added to cart';
    }

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
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


  <title>Project</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" >

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php @include 'header.php'; ?>  
<div class="container-fluid " style="color:pink;">
    
   <section class="home">

<div class="content">
   <h3>WELCOME TO <br>S E P H O R A</h3>
   
</div>

</section>
                          <div class="row col-md-10 mx-5 mb-5" >
                                    <div class="sub-b3 mb-5">
                                        <div class="container-fluid">
                                            <div class="sub-b4 " style="margin-left:15%">
                                                <nav class="navbar navbar-expand-lg bg-white navbar-dark sticky- bottom-nav">
                                                    <div class="navbar-collapse collapse" id="dropdown">
                                                        <ul class="navbar-nav ">
                                                            <li class="nav-item ">
                                                                <a class="nav-link " role ="button"href="new.php" style="color: black; font:bold; ">NEW </a>          
                                                            </li>
                                                            <li class ="nav-item">
                                                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role ="button"href="" style="color: black;">MAKEUP</a>
                                                                <ul class=" dropdown-menu"  style="height: 200px ; width:200px" >
                                                                    <li><a  class="dropdown-item" href="face.php" >Face</a></li>
                                                                    <li><a  class="dropdown-item" href="eyes.php" >Eyes</a></li>
                                                                    <li><a  class="dropdown-item" href="lips.php">Lips</a></li>
                                                                    <li><a  class="dropdown-item" href="nails.php" >Nails</a></li>
                                                                    <li><a  class="dropdown-item" href="remover.php" >Makeup Remover</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item ">
                                                                <a class="nav-link dropdown-toggle"id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" role ="button" href="javascript:void(0)" style="color: black;">SKINCARE </a>
                                                                <ul class="dropdown-menu" >
                                                                    <li><a class="dropdown-item"  href="cleanser.php"  role="button">Cleanser & Exfoliator</a></li>
                                                                    <li><a class="dropdown-item" href="toner.php" role="button">Toner</a></li>
                                                                    <li><a class="dropdown-item" href="moist.php"  role="button">Moisturiser</a></li>
                                                                    <li><a class="dropdown-item" href="mask.php" role="button">Masks & Treatment</a></li>
                                                                    <li><a class="dropdown-item" href="sun.php"  role="button">Sun Care</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link dropdown-toggle"id="navbarDropdownMenuLink"data-bs-toggle="dropdown" aria-expanded="false" role ="button" href="javascript:void(0)" style="color: black;">HAIR</a>
                                                                <ul class=" dropdown-menu"  >
                                                                    <li><a class="dropdown-item" href="shampoo.php"  role="button">Shampoo & Conditioner</a></li>
                                                                    <li><a class="dropdown-item" href="styling.php"  role="button">Styling</a></li>
                                                                    <li><a class="dropdown-item" href="treatment.php"  role="button">Treatment</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link  dropdown-toggle"id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" role ="button" href="javascript:void(0)" style="color: black;">TOOLS AND BRUSHES</a>  
                                                                <ul class="dropdown-menu"  >
                                                                    <li><a class="dropdown-item" href="brush.php" role="button">Brushes</a></li>
                                                                    <li><a class="dropdown-item" href="sponge.php" role="button">Sponges</a></li>
                                                                    <li><a class="dropdown-item" href="tool.php"  role="button">Hair Tools</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item ">
                                                                <a class="nav-link  dropdown-toggle"id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" role ="button"href="javascript:void(0)" style="color: black;">BATH & BODY </a>
                                                                <ul class=" dropdown-menu" >
                                                                    <li><a class="dropdown-item" href="bath.php" role="button">Bath & Shower</a></li>
                                                                    <li><a class="dropdown-item" href="moisturizer.php"  role="button">Moisturiser</a></li>
                                                                    <li><a class="dropdown-item"  href="suncare.php"  role="button">Sun Care</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link  dropdown-toggle"id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" role ="button"href="javascript:void(0)" style="color: black;">FRAGRANCE </a>
                                                                <ul class=" dropdown-menu" >
                                                                    <li><a class="dropdown-item" href="men.php" role="button">Men</a></li>
                                                                    <li><a class="dropdown-item" href="women.php"role="button">Women</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="nav-item ">
                                                                <a class="nav-link  dropdown-toggle"id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" role ="button"href="javascript:void(0)" style="color: black;">GIFTS </a>
                                                                <ul class=" dropdown-menu"  style="height: 100px ; width:100px" >
                                                                    <li><a class="dropdown-item" href="him.php"  role="button">For Him</a></li>
                                                                    <li><a class="dropdown-item" href="her.php" role="button">For Her</a></li>
                                                                </ul>
                                                            </li>
                                                         
                                                        </ul>
                                                    </div>
                                               </nav>
                                            </div>
                                        </div>
                                    </div><hr style="margin-left:8%">
                                </div>
                          
        

        <div class="c mx-5" style="height:400px"style="margin-left:1%">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/display1.jpg" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/display2.jpg" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/display3.jpg" class="d-block " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      
         <div class="e container-fluid  mt-5 mx-5">
            <div class="btn-group" style="margin-left:5%">
               <a href="sephora.php"> <button >SEPHORA COLLECTION</button></a>
                <a href="dior.php"> <button>DIOR</button></a>
               <a href="huda.php"> <button>HUDA BEAUTY</button></a>
                 <a href="ola.php"> <button>OLAPLEX</button></a>
                <a href="rare.php"> <button>RARE BEAUTY</button></a>
            </div>
        </div>
   
   
        <section class="products">

<h1 class="title">latest products</h1>
<div class="box-container">

   <?php
      $select_products = mysqli_query($conn, "SELECT * FROM `skin_mask`Limit 6") or die('query failed');
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_products = mysqli_fetch_assoc($select_products)){
   ?>
<form action="" method="POST" >
   <div class="box" >
      <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="fas fa-eye"></a>

     <div class="cost mt-3 text-dark"><span>$<?php echo $fetch_products['price']; ?>/-</span></div>
     <img src="image/<?php echo $fetch_products['image']; ?>"class="rounded",width=160 alt="" class="image">
     <div class="name"><h3 style="margin-top: 4%;color:red"><?php echo $fetch_products['name']; ?></h3></div>
     

     <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
     <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
     <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
     <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
     <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
     <input type="submit" value="add to cart" name="add_to_cart" class="delete-btn">
         </div>
     </form>

   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

</div>



</section>



<script src="js/admin_script.js"></script>
                
    <section id = end class="end_wrapper">

    <?php @include 'footer.php'; ?> 
 
  
  
</section>   

   

    
  <script>
     // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });


    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    $(document).ready(function () {
      $('.dropdown-submenu a.test').on("click",function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
      // body...
    });
    </script>
         <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          slidesPerGroup: 1,
          breakpoints: {
           768: {
              slidesPerView: 2,
            },
    
            991: {
              slidesPerView: 3,
            },
          },
          loop: true,
          navigation:{
            nextEl:".swiper-button-next",
            prevEl: ".swiper-button-prev",
          }
    
    
        });
    
      </script>
  
</body>
</html>