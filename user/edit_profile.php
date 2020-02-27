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

    if(!empty($_POST['addmenu'])) {



        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email= trim($_POST['email']);
        echo $email;


        $sql = "update registration set firstname='$firstname', lastname='$lastname', email = '$email' where member_id='$member_id' ";
        $result = mysqli_query($conn, $sql);
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
    



<!-- Navigation start -->
<body>
   <?php include "header3.php";?>
 
    <div class="mainform container">
    <div class='row'>
        <div class="col-md-2 profile">
        <h3>My Account</h3>
         <?php  echo "
            <a href='profile.php?user_id=$member_id'>My Profile</a>
            
        "; ?>
        <a href="#">My Deals</a>
        <a href="#">My Reservations</a>
        <a href="#">My Points</a>
       <a href="myReviews.php">My Reviews</a>
        </div>

        <div class='col-md-6 profile-detail'>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">First Name</label>
                    <input type="text" class="form-control" name="firstname" value="<?php echo"$firstname"; ?>" required>
                </div>

                <div class="form-group">
                    <label for="  Email  ">Last Name</label>
                    <input type="text" class="form-control" name="lastname" value="<?php echo"$lastname"; ?>" />
                </div>

                <div class="form-group">
                    <label for="  Email  ">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo"$email"; ?>"/>
                </div>

                <input type="submit" value="Update Profile" class="btn btn-primary" name="addmenu">

            </form>

        </div>
        <div class="col-md-4">
        </div>
        </div>
        </div>

<?php include "footer.php";?>
    
 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

</body>
</html>