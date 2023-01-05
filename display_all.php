  <!--connect file i.e connect.php -->
  <?php
  include('includes/connect.php');
  include('functions/common_function.php');
  session_start();
 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website using PHP and MySQL</title>
    <!--bootstrap css link-->
    <!-- CSS only -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--font awesome link-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!--css file-->
       <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
   <img src=".\images\logo_img.jpg" alt="fbbg gb" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li> <li class="nav-item">
          <a class="nav-link" href="./user_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:  <?php total_cart_price(); ?>/- </a>
        </li>
        
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- second child--> 
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    
        <?php 
         if(!isset($_SESSION['username'])){
          echo "
          <li class='nav-item'>
          <a class='nav-link' href='#'>Welcome guest</a>
        </li>";
        }else{
          echo "
          <li class='nav-item'>
          <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
        </li>";
        }
        if(!isset($_SESSION['username'])){
          echo "
          <li class='nav-item'>
          <a class='nav-link' href='./user_area/user_login.php'>Login</a>
        </li>";
        }else{
          echo "
          <li class='nav-item'>
          <a class='nav-link' href='./user_area/logout.php'>Logout</a>
        </li>";
        }
        ?>
    </ul>
</nav>
<!--third chils--> 
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>
<!--fourth child--> 
<div class="row px-1">
    <div class="col-md-10">
        <!--Products-->
      <div class="row">
        <!--fetching products-->
        <?php
        //calling function
        get_all_products();
        get_uniquecategories();
        get_uniquebrands();
    //        $select_query="Select * from `products` order by rand()";
    //       $result_query=mysqli_query($con,$select_query);
    //      // $row=mysqli_fetch_assoc( $result_query);
    //      // echo  $row['product_title'];
    //     while($row=mysqli_fetch_assoc( $result_query)){
    //       $product_id=$row['product_id'];
    //       $product_title=$row['product_title'];
    //       $product_description=$row['product_description'];
    //       $product_image1=$row['product_image1'];
    //       $product_price=$row['product_price'];
    //       $category_id=$row['category_id'];
    //       $brand_id=$row['brand_id'];
    //       echo " <div class='col-md-4 mb-2'>
    //       <div class='card'>
    //               <img src='.\admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
    //                 <div class='card-body'>
    //                    <h5 class='card-title'>$product_title</h5>
    //                    <p class='card-text'>$product_description</p>
    //                    <a href='#' class='btn btn-info'>Add to cart</a>
    //                    <a href='#' class='btn btn-secondary'>View more</a>
    //                  </div>
    //       </div>
    //  </div>";
    //     }


        ?>
           <!-- <div class="col-md-4 mb-2">
          <div class="card">
                  <img src=".\images\high waist jeans.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 class="card-title">Card title</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <a href="#" class="btn btn-info">Add to cart</a>
                       <a href="#" class="btn btn-secondary">View more</a>
                     </div>
          </div>
     </div> -->
     <!--row end here-->

    </div> 
    <!--column end here-->
  </div>

    <div class="col-md-2 bg-secondary p-0">
        <!--side nav i.e brands name-->
        <ul class="navbar-nav me-auto text-center">
            <li class="navbar-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
            <?php
           getbrands();
           ?>


        </ul>
        <!--category items--> 
        <ul class="navbar-nav me-auto text-center">
            <li class="navbar-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Catogries</h4></a>
            </li>
            <?php
            getcategory();
        //     $select_categories="Select * from `categories`";
        //     $result_categories=mysqli_query($con,$select_categories);
        //     $row_data=mysqli_fetch_assoc( $result_categories);
          
        // while( $row_data=mysqli_fetch_assoc($result_categories))
        // {
        //   $category_title=$row_data['category_title'];
        //   $category_id=$row_data['category_id'];
        //   echo "<li class='navbar-item'>
        //   <a href='index.php?category=$category_id' class='nav-link text-light'> $category_title</a>
        //   </li>";
        // }



          


           ?>
        </ul>
    </div>
</div>
<!-- last child-->
<div class="bg-info p-3 text-center">
    <p>All rights reserved - Designed by Riya-2022</p>
</div>
    </div>




    <!--bootstrap js link-->
    <!-- JavaScript Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>