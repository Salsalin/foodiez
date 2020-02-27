
<?php


$conn = mysqli_connect("localhost","root","","foodie") ;
        $member_id = $_GET['user_id'];

            $sql = "SELECT * FROM registration WHERE member_id='$member_id'";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>=1) {
                while ($row = mysqli_fetch_assoc ( $result )) {
                    $member_id = $row['member_id'];
                    $firstname = $row['firstname'];

                    $lastname = $row['lastname'];
                    $email = $row['email'];
                }


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

<?php include "../db.php";?>
<?php include "header3.php";?>
<!-- Navigation start -->
<body>


<div class=" main-profile container">
<div class='row'>
    <div class="col-md-3 profile">
        
        <h3>My Account</h3>
        <?php echo"
        <a href='profile.php?user_id=$member_id'>My Profile</a>"; ?>
        <a href="#">My Deals</a>
        <a href="#">My Reservations</a>
        <a href="#">My Points</a>
        <a href="myReviews.php">My Reviews</a>
    </div>  
    <div class='col-md-5 profile-detail'>
       <h4>First Name: <?php  echo $firstname;  ?></h4>
        <h4>Last Name:  <?php echo $lastname;   ?></h4>
        <h4>Email:   <?php echo  $email;  ?></h4>
        <?php  echo "
            <a href='edit_profile.php?user_id=$member_id' class='btn btn-success'>Edit</a>
            
        "; ?>
    </div>
    <div class='col-md-4 profile-image'>
    <img src='../img/no-image-medium-woman.png' alt='there is a image' class='img-responsive'>
    </div>
    </div>
</div>
    
  <?php require_once("../footer.php"); ?>  
 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>