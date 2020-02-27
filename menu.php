
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>foodiez</title>
    <meta name="description" content="">
    <meta name="author" content="">

  	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css"  href="css/style6.css">

</head>
<?php

session_start();
$conn = mysqli_connect("localhost","root","","foodie") ;

?>

<body>



<?php require_once('header3.php');?>

<div class='container'>
    <div class='row'>
        <div class='col-md-9 restaurant_coverphoto'>

            <?php
            $restaurant_id=$_GET['id'];
            $sql = "SELECT * FROM seperate_restaurant WHERE id=$restaurant_id";
            $result=mysqli_query($conn,$sql);
            $data=mysqli_fetch_array($result);
            $restaurant_name=$data['restaurant_name'];
            $photo=$data['photo'];
            $coverphoto=$data['coverphoto'];
            $address=$data['address'];
            $time=$data['time'];
            $cuisine=$data['cuisine'];
            $mobile=$data['mobile'];

            echo"

                                         <div class='coverphoto'>
                                        <img src='img/$coverphoto' alt='there is a image' class='img-responsive'>
                                      </div>
                                      
                                      <div class='profile-photo'>
                                      
                                         <img src='img/$photo' alt='there is a image' class='img-responsive'>
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
            <div class="col-md-3 type">
                <?php

                $restaurant_id = $_GET['id'];
                $sql = "select * from type where restaurant_id='$restaurant_id'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) >= 1) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $type_id= $row['id'];
                        $type= $row['name'];

                        echo "
                    <ul class='list-unstyled'>
                    
                        <li><a href='#$type'><h3>$type</h3></a></li>
                    
                    </ul>
                   
                
                ";

                    }

                }


                ?>
            </div>

            <div class="col-md-8 menu-item">
                <div>
                    <?php

                    $sql = "select * from type where restaurant_id='$restaurant_id'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) >= 1) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $type_id = $row['id'];
                            $type= $row['name'];
                                
             
                            echo"<div class='menu-type'><h2 id='$type'>$type</h2></div>" ;
                            $sql1 = "select * from item where restaurant_id='$restaurant_id'and type_id = '$type_id'";

                            $result1 = mysqli_query($conn, $sql1);


                            if (mysqli_num_rows($result1) >= 1) {
                                while ($row = mysqli_fetch_assoc($result1)) {
                                    $name = $row['name'];
                                    $photo=$row['photo'];
                                    $price = $row['price'];
                                    $item_id = $row['id'];

                                    echo "
                                  <div class='item'>   
                    <ul class='list-unstyled'>
                        <div class='col-md-9'>
                        <li><a href=''><h3>$name</h3></a></li>
                        <li><a href=''><h5>$price</h5></a></li>
                        </div>
                        <div class='col-md-3 item-image'>
                       <li><img src='img/$photo' alt='there is a image' class='img-responsive'></li>
                      </div>
                    <li><a href='userOrderLogin.php?item_id=$item_id' class='btn btn-default btn-sm pull-left'>Order Now</a></li>
                    <li><a href='userReviewLogin.php?item_id=$item_id' class='btn btn-default btn-sm pull-right'>Post Your Review</a></li>
                 
                 </ul>
                 </div>
              
                ";

                                }

                            }

                        }
                    }

                    ?>


                </div>

            </div>



        </div>




    </div>




</section>

<?php require_once('footer.php'); ?>



  		<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</body>
</html>