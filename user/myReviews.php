
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


            <?php
            $user_id = $_SESSION['id'];
            $sql = "SELECT * FROM registration WHERE member_id ='$user_id'";
            $result=mysqli_query($conn,$sql);
            $data=mysqli_fetch_array($result);


            $firstName=$data['firstname'];
            $lastName=$data['lastname'];


            ?>

<div class=" main-profile container">

    

        <div class="row">

           <div class="col-md-3 profile">
                    
               <h3>My Account</h3>
        <?php echo"
        <a href='profile.php?user_id=$user_id'><h4>My Profile</h4></a>"; ?>
        <a href="#"><h4>My Deals</h4></a>
        <a href="#"><h4>My Reservations</h4></a>
        <a href="#"><h4>My Points</h4></a>
               <a href="myReviews.php"><h4>My Reviews</h4></a>
            </div>
            <div class="col-md-8 reviews">
                <?php

                $sql = "SELECT * FROM reviews WHERE user_id ='$user_id'";
                $result=mysqli_query($conn,$sql);


                if (mysqli_num_rows($result) >= 1) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        $item_id = $row['item_id'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $date = $row['date'];

                        $sql1 = "SELECT * FROM item WHERE id='$item_id'";
                        $result1 = mysqli_query($conn, $sql1);


                        if (mysqli_num_rows($result1) >= 1) {
                            while ($row = mysqli_fetch_assoc($result1)) {

                                $item_name = $row['name'];
                                $restaurant_id = $row['restaurant_id'];

                                $sql2 = "SELECT * FROM seperate_restaurant WHERE id='$restaurant_id'";
                                $result2 = mysqli_query($conn, $sql2);


                                $row = mysqli_fetch_assoc($result2);

                                $restaurant_name = $row['restaurant_name'];






                                echo"   
                
                             <p>$date</p>
                             
                            <div class='user_review'> 
                            <h4>$item_name</h4>
                            <p>Restaurant Name:&nbsp;&nbsp;$restaurant_name</p>
                            <h3>Title:&nbsp;&nbsp;$title</h3>
                            <p><strong>Content:</strong>&nbsp;&nbsp;$content</p>
                            </div>

          
            ";


                            }


                        }

                    }
                }

                ?>

            </div>


<div class="col-md-1">
            
            </div>



        </div>




    


</div>


<?php require_once('../footer.php'); ?>

 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>