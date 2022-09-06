<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>

<header class="header" style="background-color:black; ">

    <div class="flex">

        <a href="front.php" style="color:pink;text-decoration:none" class="logo"><span><?php echo $_SESSION['user_name']; ?></span></a>

        <nav class="navbar"style="background-color: black;">
            <ul >
            <li><a style="color:black;"> </a>
</li>
                <li><a  style="color:white;text-decoration:none" href="front.php">home</a></li>
                <li >

                                  <a style="color:white;text-decoration:none"  href="welcome.php" > My Profile</a>
                              </li>
                    
                </li>
              
                <li><a  style="color:white;text-decoration:none"  href="orders.php">orders</a></li>
                <li >
                     <a style="color:white;text-decoration:none" href="book_beauty_service.php" >Book Beauty Services</a>
                   </li>
            </ul>
        </nav>

        <div class="icons" >
            <div  id="menu-btn"style="" class="fas fa-bars"></div>
            <a  href="search_page.php" ><i style="color:white;" class="fas fa-search"></i></a>
            <div style="color:white;" id="user-btn" class="fas fa-user"></div>
            <?php
                $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
                $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
            ?>
            <a href="wishlist.php"><i style="color:white;" class="fas fa-heart"></i><span style="color:white;" >(<?php echo $wishlist_num_rows; ?>)</span></a>
            <?php
                $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                $cart_num_rows = mysqli_num_rows($select_cart_count);
            ?>
            <a href="cart.php"><i style="color:white;" class="fas fa-shopping-cart"></i><span style="color:white;" >(<?php echo $cart_num_rows; ?>)</span></a>
        </div>

        <div class="account-box">
            <p><span><?php echo $_SESSION['user_name']; ?></span></p>
            <p> <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>

    </div>

</header>