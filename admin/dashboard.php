<?php
    include '../components/connect.php'; 

    if (isset($_COOKIE['seller_id'])) {
        $seller_id = $_COOKIE['seller_id'];
    }else{
        $seller_id = '';
        header('location:login.php');
        exit();
    }

    // Fetch seller profile data
    $select_profile = $conn->prepare("SELECT * FROM `seller` WHERE id = ?");
    $select_profile->execute([$seller_id]);
    
    if ($select_profile->rowCount() > 0) {
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
    } else {
        // If no profile found, redirect to login
        header('location:login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- box icon cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css?v=<?php echo time(); ?>">
    <title>Sandu Fashion Website</title>
</head>
<body>
    <?php include '../components/admin_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>dashboard</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <span><a href="dashboard.php">admin</a><i class="bx bx-right-arrow-alt"></i>dashboard</span>
        </div>
    </div>
    <div class="line2"></div>

    <div class="dashboard">
        <div class="heading">
            <h1>dashboard</h1>
            <img src="../image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <h3>welcome !</h3>
                <p><?= htmlspecialchars($fetch_profile['name']); ?></p>
                <a href="profile.php" class="btn"> view profile</a>
            </div>
            <div class="box">
                <?php
                    $select_msg = $conn->prepare("SELECT * FROM `message`"); 
                    $select_msg->execute();
                    $num_of_msg = $select_msg->rowCount();
                ?>

                <h3><?= $num_of_msg; ?></h3>
                <p>unread message</p>
                <a href="admin_message.php" class="btn">see messages</a>
            </div>
            <div class="box">
                <?php
                    $select_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ?"); 
                    $select_products->execute([$seller_id]);
                    $num_of_products = $select_products->rowCount();
                ?>

                <h3><?= $num_of_products; ?></h3>
                <p>total products</p>
                <a href="view_products.php" class="btn">view all products</a>
            </div>
            <div class="box">
                <?php
                    $select_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ?"); 
                    $select_products->execute([$seller_id]);
                    $num_of_products = $select_products->rowCount();
                ?>

                <h3><?= $num_of_products; ?></h3>
                <p>products added</p>
                <a href="add_products.php" class="btn">add new products</a>
            </div>
            <div class="box">
                <?php
                   $select_active_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ? AND status = ?"); 
                    $select_active_products->execute([$seller_id, 'active']);
                    $num_of_active_products = $select_active_products->rowCount(); 
                ?>

                <h3><?= $num_of_active_products; ?></h3>
                <p>active products</p>
                <a href="view_products.php" class="btn">view active products</a>
            </div>
            <div class="box">
                <?php
                   $select_deactive_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ? AND status = ?"); 
                    $select_deactive_products->execute([$seller_id, 'deactive']);
                    $num_of_deactive_products = $select_deactive_products->rowCount(); 
                ?>

                <h3><?= $num_of_deactive_products; ?></h3>
                <p>deactive products</p>
                <a href="view_products.php" class="btn">view deactive products</a>
            </div>
              <div class="box">
                <?php
                    $select_users = $conn->prepare("SELECT * FROM `users`"); 
                    $select_users->execute();
                    $num_of_users = $select_users->rowCount();
                ?>

                <h3><?= $num_of_users; ?></h3>
                <p>registered users</p>
                <a href="users_account.php" class="btn">view users</a>
            </div>
                <div class="box">
                <?php
                    $select_seller = $conn->prepare("SELECT * FROM `seller`"); 
                    $select_seller->execute();
                    $num_of_seller = $select_seller->rowCount();
                ?>

                <h3><?= $num_of_seller; ?></h3>
                <p>registered sellers</p>
                <a href="seller_account.php" class="btn">view seller</a>
            </div>
              <div class="box">
                <?php
                    $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE seller_id = ?"); 
                    $select_orders->execute([$seller_id]);
                    $num_of_orders = $select_orders->rowCount();
                ?>

                <h3><?= $num_of_orders; ?></h3>
                <p>total orders</p>
                <a href="admine_orders.php" class="btn">view orders</a>
            </div>
             <div class="box">
                <?php
                    $canceled_orders = $conn->prepare("SELECT * FROM `orders` WHERE seller_id = ? AND status = ?"); 
                    $canceled_orders->execute([$seller_id, 'canceled']);
                    $num_of_canceled_orders = $canceled_orders->rowCount();
                ?>

                <h3><?= $num_of_canceled_orders; ?></h3>
                <p>canceled orders</p>
                <a href="admine_orders.php" class="btn">canceled orders</a>
            </div>
              <div class="box">
                <?php
                    $confirm_orders = $conn->prepare("SELECT * FROM `orders` WHERE seller_id = ? AND status = ?"); 
                    $confirm_orders->execute([$seller_id, 'in progress']);
                    $num_of_confirm_orders = $confirm_orders->rowCount();
                ?>

                <h3><?= $num_of_confirm_orders; ?></h3>
                <p>confirm orders</p>
                <a href="admine_orders.php" class="btn">confirm orders</a>
            </div>
        </div>
              
    

    <?php include '../components/admin_footer.php'; ?>

<!-- SweetAlert CDN link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Custom JS link -->
<script type="text/javascript" src="../js/admin_script.js"></script>
<!-- Alert -->
<?php include '../components/alert.php'; ?>
</body>
</html>
