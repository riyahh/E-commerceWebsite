<?php
  include('../includes/connect.php');
  include('../functions/common_function.php');
  @session_start();
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--Bootstrap css link--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--font awesome link--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css file link--> 
    <link rel="stylesheet" href="../style.css">
    <style>
body{
    overflow-x:hidden;
}
.product_img{
    width:100px;
    object-fit:contain;

}
        </style>
</head>
<body>
    <!--navbar--> 
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="..\images\logo_img.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <?php 
                          if(!isset($_SESSION['admin_name'])){
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='#'>Welcome guest</a>
                          </li>";
                          }else{
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='#'>Welcome ".$_SESSION['admin_name']."</a>
                          </li>";
                          }
                          ?>
                        <!--
                        <li class="nav-itren">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
-->
                    </ul>

                 </nav>
            </div>
        </nav>
        <!--second child--> 
        <div class="bg-light ">
            <h3 class="p-2 text-center">Manage Details</h3>
        </div>
        <!-- third child--> 
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="..\images\adminpic.webp" alt="" class="admin_image"></a>
                    <p class="text-light text-center py-3"><?php echo $_SESSION['admin_name'] ?></p>
                </div>
              <div class="button text-center">
              <button class="my-4"><a href="insert_product.php" class="nav-link text-light bg-info m-1">Insert products</a></button>
              <button><a href="index.php?view_products" class="nav-link text-light bg-info m-1">View product</a></button>
              <button><a href="index.php?insert_category" class="nav-link text-light bg-info m-1">Insert category</a></button>
             <button><a href="index.php?view_categories" class="nav-link text-light bg-info m-1">View category</a></button>
            <button><a href="index.php?insert_brand" class="nav-link text-light bg-info m-1">Insert brands</a></button>
             <button><a href="index.php?view_brands" class="nav-link text-light bg-info m-1">View Brands</a></button>
            <button><a href="index.php?list_orders" class="nav-link text-light bg-info m-1">All Orders</a></button>
            <button><a href="index.php?list_payments" class="nav-link text-light bg-info m-1">All Payments</a></button>
            <button><a href="index.php?list_users" class="nav-link text-light bg-info m-1">List Users</a></button>
             <button><a href="logoutadmin.php" class="nav-link text-light bg-info m-1">Logout</a></button>
                   
              
                   
                   
                

            </div>
        </div>
    </div>
<!--fourth child--> 
<div class="container my-3 ">
    <?php 
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    if(isset($_GET['view_products'])){
        include('view_products.php');
    }
    if(isset($_GET['edit_products'])){
        include('edit_products.php');
    }
    if(isset($_GET['delete_product'])){
        include('delete_product.php');
    }
    if(isset($_GET['view_categories'])){
        include('view_categories.php');
    }
    if(isset($_GET['view_brands'])){
        include('view_brands.php');
    }
    if(isset($_GET['edit_category'])){
        include('edit_category.php');
    }
    if(isset($_GET['edit_brands'])){
        include('edit_brands.php');
    }
    if(isset($_GET['delete_category'])){
        include('delete_category.php');
    }
    if(isset($_GET['delete_brands'])){
        include('delete_brands.php');
    }
    if(isset($_GET['list_orders'])){
        include('list_orders.php');
    }
    if(isset($_GET['list_payments'])){
        include('list_payments.php');
    }
    if(isset($_GET['list_users'])){
        include('list_users.php');
    }
   
    
    ?>
</div>
<?php
 include("../includes/footer.php")
?>

<!--boostrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- js links --> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>