<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<body>
    <h3 class="text-danger mb-4">Delete Account</h3>
    <form action="" method="post" class="mt-5">
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="delete" value="Delete Account">
        </div>
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="Don't Delete Account">
        </div>
    </form>
</body>
</html>
<?php 
//php code for deleting the session 
$username_session=$_SESSION['username'];  //sima will stored in username session.
if(isset($_POST['delete'])){    //if we click on delete thn only perform
$delete_query="Delete from `user_table` where username='$username_session'";
$result=mysqli_query($con,$delete_query);
if($result){
  // if delete is set then perform two things 1. destroy session variable 2. and display alery and direct to index page
    session_destroy();
    echo "<script>alert('Account Deleted successfully')</script>";
    echo "<script>window.open('../index.php','_self')</script>";  
}
}
if(isset($_POST['dont_delete'])){
    echo "<script>window.open('profile.php','_self')</script>";
}

?>