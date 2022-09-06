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

<header class="header"style="background-color: black;">

   <div class="flex">

   <a class="navbar-brand mx-2 nav1"align="center" href="admin_page
   .php" id="font1"style="color: #e84393"></i><?php echo "<h1>" . $_SESSION['admin_name'] . "</h1>"; ?></a>

      <nav class="navbar" style="background-color: black;">
         <a href="admin_page.php"style="color:white;text-decoration:none">Home</a>
         <a href="admin_products.php"style="color:white;text-decoration:none">Products</a>
         <a href="admin_orders.php"style="color:white;text-decoration:none">Orders</a>
         <a href="admin_users.php"style="color:white;text-decoration:none">Users</a>
         <a href="admin_contacts.php"style="color:white;text-decoration:none">Messages</a>
      </nav>

      <div class="icons"style="color:white;text-decoration:none">
         <div id="menu-btn" style="color:white;text-decoration:none"class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"style="color:white;text-decoration:none"></div>
        
      </div>

      <div class="account-box">
         <p><span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p> <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
        
      </div>

   </div>

</header>