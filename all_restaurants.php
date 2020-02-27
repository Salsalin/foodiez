<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>foodiez</title>
	<!-- Bootstrap Link Part Start Here -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<!-- Font-awesome Link Part Start Here -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
 <link rel="stylesheet" type="text/css"  href="css/style6.css">

</head>

<?php include "db.php";?>
<?php include "header3.php";?>
    <!-- Navigation start -->
<body>
    <div class='container'>
            <h3>Restaurants in Comilla</h3>
            <div class='row'>
            <div class='col-md-9 restaurant_service_first'>
                 
                
                <?php
                    $per_page = 3;
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }
                    else{
                        $page = "";
                    }
                    if($page == "" || $page == 1){
                        $page_no = 0;
                    }
                    else{
                        $page_no = ($page * $per_page) - $per_page;
                    }
                    $count_restaurant = "SELECT * FROM seperate_restaurant";
                    $count_restaurant_query = mysqli_query($connection, $count_restaurant);
                    $count_restaurant_number = mysqli_num_rows($count_restaurant_query);
                
                    $count_restaurant_number = ceil($count_restaurant_number/ $per_page);
                
                    $query = "SELECT * FROM seperate_restaurant LIMIT $page_no, $per_page";
                    $restaurant_all_query = mysqli_query($connection,$query);
                    
                    while($row = mysqli_fetch_assoc($restaurant_all_query)){
                        $id = $row['id'];
                        $photo = $row['photo'];
                        $coverphoto = $row['coverphoto'];
                        $restaurant_name = $row['restaurant_name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $address = $row['address'];
                        $time = $row['time'];
                        $cuisine = $row['cuisine'];
                        $mobile = $row['mobile'];
                        
        
                                               echo"
                                    <div class='col-md-4'>
                                     <div class='restaurant_image'>
                                    <img src='img/$photo' alt='there is a image' class='img-responsive'>
                                    </div>
                                    </div>
                                    <div class='col-md-8'> 
                                    <div class='restaurant'>
                                        
                                        <h2><strong>  $restaurant_name</strong></h2>
                                        <p><strong>Address:</strong>   $address</p>
                                        <p><strong>Time:</strong>  $time</p>
                                        <p><strong>Time:</strong>  $cuisine</p>
                                        <p><strong>Time:</strong>  $mobile</p>
                                    
                                        
                         <a href='restaurant_detail.php?id=$id' class='btn btn-default btn-sm pull-right'>More</a>
                                          </div>
                                          </div>
                            ";
                        
                    }
                ?>
              
                </div>
                    <div class='col-md-3 restaurant_service_second'>

      
    </div>
        </div>
          <?php include "pager.php"?>
</div>

<?php include "footer.php";?>

 		<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>