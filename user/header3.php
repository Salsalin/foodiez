
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

        $user_id = $_SESSION['id'];

        $sql = "SELECT * FROM registration WHERE member_id='$user_id'";
        $result=mysqli_query($conn,$sql);

        $data=mysqli_fetch_array($result);

        $firstName = $data['firstname'];
        $lastName = $data['lastname'];

?>
   
    <!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        							<a class="navbar-brand" href="index.php">
							<img src="../img/FP-NEW-120X42.png" />
							</a>
       </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Restaurants</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li>

            <?php
                echo "
                <a href='profile.php?user_id=$user_id'>$firstName $lastName</a>
                ";

            ?>

        </li>


          
      </ul>
    </div>
    </div>
 <div class="header-slider">
  </div>
  <!-- /.container-fluid --> 
</nav>