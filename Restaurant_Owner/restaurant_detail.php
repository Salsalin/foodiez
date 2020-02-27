<?php

session_start();

if(empty($_SESSION['id'])){
    header('Location: restaurantLogin.php');


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>foodiez</title>
	<!-- Bootstrap Link Part Start Here -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<!-- Font-awesome Link Part Start Here -->
	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
 <link rel="stylesheet" type="text/css"  href="../css/style6.css">

</head>  

<?php


$conn = mysqli_connect("localhost","root","","foodie") ;

?>

<body>



<?php require_once('header.php');?>

<div class='container'>
    <div class='row'>
        <div class='col-md-9 restaurant_coverphoto'>

            <?php
            $restaurant_id=$_SESSION['id'];
            $sql = "SELECT * FROM seperate_restaurant WHERE id=$restaurant_id";
            $result=mysqli_query($conn,$sql);
            $data=mysqli_fetch_array($result);

            $id=$data['id'];
            $restaurant_name=$data['restaurant_name'];
            $photo=$data['photo'];
            $coverphoto=$data['coverphoto'];
            $address=$data['address'];
            $time=$data['time'];
            $cuisine=$data['cuisine'];
            $mobile=$data['mobile'];


            echo"
                                              
                                        <div class='coverphoto'>
                                        <img src='../img/$coverphoto' alt='there is a image' class='img-responsive'>
                                      </div>
                                      
                                      <div class='profile-photo'>
                                      
                                         <img src='../img/$photo' alt='there is a image' class='img-responsive'>
                                        <h5>$restaurant_name</h5>
                                        </div>   
                                        
                                        

                            ";
            ?>
        </div>
        <div class='col-md-3 restaurant_service_second'>
        </div>
    </div>
</div>


<section id='restaurant_menu'>
    <div class="container">
        <ul class="list-inline">
            <li><?php echo"<a href='restaurant_detail.php?id=$restaurant_id'><strong>Overview</strong></a>";?></li>
            <li><?php echo"<a href='itemReviews.php?id=$restaurant_id'><strong>Food Item REVIEWS</strong></a>";?></li>
            <li><?php echo"<a href='menu.php?id=$restaurant_id'><strong>MENU</strong></a>";?></li>
            <li><a href="#"><strong>PHOTOS</strong></a></li>
        </ul>
        <div class="row">
            <div class="col-md-3 image-deal">
                <img src='../img/no-image-deals.jpg' alt='there is a image' class='img-responsive'>
            </div>

            <div class="col-md-5">
                <?php
                echo"   <div class='restaurant_overview'>
                                   <p><strong>Address:</strong>  $address</p>
                                   <div class='col-md-5 paragraph'>
                                   <p><strong>Most Popular Items </strong></p>
                                   <p><strong>Cuisine ></strong></p>
                                   <p><strong>Time ></strong></p>
                                   <p><strong>Mobile ></strong></p>
                                   </div>
                                   <div class='col-md-7 paragraph'>
                                   <br><br>
                                   <p>$cuisine</p>
                                   <p>$time </p>
                                   <p>$mobile </p>
                                   <a href='updateRestaurent_detail.php?id=$restaurant_id' class='btn btn-success'>Update Info</a>
                                   </div>
                                   </div>
                                ";

                ?>

            </div>

            <div class="col-md-4">

                
            </div>



        </div>




    </div>


</section>


<?php require_once('footer.php'); ?>
 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    
    </body>
</html>