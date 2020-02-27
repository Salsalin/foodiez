<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>foodiez</title>
<meta name="description" content="">
<meta name="author" content="">

    
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css"  href="../css/style6.css">

        

</head>


<?php
    $conn = mysqli_connect("localhost","root","","foodie") ;

        $restaurant_id = $_SESSION['id'];

        $sql = "SELECT * FROM seperate_restaurant WHERE id='$restaurant_id'";
        $result=mysqli_query($conn,$sql);

        $data=mysqli_fetch_array($result);

        $photo = $data['photo'];
        $coverphoto = $data['coverphoto'];
        $restaurant_name = $data['restaurant_name'];
             $address=$data['address'];
            $time=$data['time'];
            $cuisine=$data['cuisine'];
            $mobile=$data['mobile'];

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
         <li>

            <?php
                echo "
                <a href='restaurant_detail.php'>$restaurant_name</a>
                ";

            ?>

        </li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </div>
    </div>
 <div class="header-slider">
  </div>
  <!-- /.container-fluid --> 
</nav>

