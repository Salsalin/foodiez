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


            <div class="col-md-12">
                <?php

                $sql = "SELECT * FROM item WHERE restaurant_id='$restaurant_id'";
                $result=mysqli_query($conn,$sql);


                if (mysqli_num_rows($result) >= 1) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $item_name = $row['name'];
                        $price = $row['price'];
                        $item_id = $row['id'];

                        $sql1 = "SELECT * FROM reviews WHERE item_id='$item_id'";
                        $result1 = mysqli_query($conn, $sql1);


                        if (mysqli_num_rows($result1) >= 1) {
                            while ($row = mysqli_fetch_assoc($result1)) {
                                $title = $row['title'];
                                $content = $row['content'];
                                $date = $row['date'];
                                $user_id = $row['user_id'];


                                $sql2 = "SELECT * FROM registration WHERE member_id='$user_id'";
                                $result2 = mysqli_query($conn, $sql2);

                                $row = mysqli_fetch_assoc($result2);

                                $firstName = $row['firstname'];
                                $lastName = $row['lastname'];


                                echo"   
                
                             <h3>User:&nbsp;&nbsp;$firstName $lastName</h3>
                            <h4>Item Name:&nbsp;&nbsp;$item_name</h4>
                            <p>$date</p>
                            
                            <h3>Title:&nbsp;&nbsp;$title</h3>
                            
                            <p>Content:&nbsp;&nbsp;$content</p>
                            
                            <hr>

               

          
            ";


                            }


                        }

                    }
                }

                ?>

            </div>




        </div>




    </div>


</section>
?>

<?php require_once('../footer.php'); ?>


 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>