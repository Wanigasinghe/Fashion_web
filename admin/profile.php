<?php
    include '../components/connect.php' ;

     if (isset($_COOKIE['seller_id'])) {
        $seller_id = $_COOKIE['seller_id'];
    }else{
        $seller_id = '';
        header('location:login.php');
        exit();
    }

   $select_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ?");
   $select_products->execute([$seller_id]);
   $total_products = $select_products->rowCount();

   $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE seller_id = ?");
   $select_orders->execute([$seller_id]);
   $total_orders = $select_orders->rowCount();




?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- box icon cdn link -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

     <link rel="stylesheet" type="text/css" href="../css/admin_style.css?v=<?php echo time(); ?>">
     <title>Sandu Fashion Website</title>
</head>
<body>
      <?php include '../components/admin_header.php'; ?>


    <div class="banner">
        <div class="detail">
            <h1>seller profile</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <span><a href="dashboard.php">admin</a><i class="bx bx-right-arrow-alt"></i>seller profile</span>
        </div>
    </div>
    <div class="line2"></div>

     <div class="seller-profile">
          <div class="heading">
               <h1>seller profile</h1>
               <img src="../image/separator.png">
          </div>
     	<div class="detail">
            <div class="seller">
                 <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" width=600px>
                 <h3><?= $fetch_profile['name']; ?></h3>
                 <span>seller</span>
                 <a href="update.php" class="btn">update profile</a>
            </div> 
            <div class="flex">
                 <div class="box">
                     <span><?= $total_products; ?></span>
                     <p>total products</p>
                     <a href="view_product.php" class="btn">view products</a> 
                 </div>
                  <div class="box">
                     <span><?= $total_orders; ?></span>
                     <p>total orders placed</p>
                     <a href="admin_orders.php" class="btn">view orders</a> 
                 </div>
            </div>
               
          </div>
     </div>

     <?php include '../components/admin_footer.php'; ?>


     <!-- sweetalert cnd link -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    

     <script type="text/javascript" src="../js/admin_script.js"></script>
     <!-- alert -->
     <?php include '../components/alert.php'; ?>
</body>
</html>
