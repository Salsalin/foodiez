
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

session_start();
$conn = mysqli_connect("localhost","root","","foodie") ;

?>

<body>



<?php require_once('header.php');?>

<div class='container'>
    <div class='row'>
        <div class='col-md-9 restaurant_coverphoto'>

            <?php
            $i =1;
            $restaurant_id = $_SESSION['id'];
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
            <li><a href="restaurant_detail.php"><strong>OVERVIEW</strong></a></li>
            <li><a href=""><strong>FOOD ITEM REVIEWS</strong></a></li>
            <li><?php echo"<a href='menu.php?id=$id'><strong>MENU</strong></a>";?></li>
            <li><a href="#"><strong>PHOTOS</strong></a></li>
        </ul>
        <div class="row">
            <div class="col-md-12 table-responsive">
                <div>
                    <table class="table table-bordered  table-striped table-hover">
                        <tr>
                            <th>Sl</th>
                            <th>Item</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Rating</th>
                            <th></th>
                            <th></th>

                        </tr>
                    <?php

                    $sql = "select * from type where restaurant_id='$restaurant_id'";
                    $result = mysqli_query($conn, $sql);


                    if (mysqli_num_rows($result) >= 1) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $type_id = $row['id'];
                        $type = $row['name'];


                        $sql1 = "select * from item where restaurant_id='$restaurant_id'and type_id = '$type_id'";

                        $result1 = mysqli_query($conn, $sql1);


                        if (mysqli_num_rows($result1) >= 1) {

                            while ($row = mysqli_fetch_assoc($result1)) {

                                $item_id = $row['id'];
                                $name = $row['name'];
                                $price = $row['price'];
                                $rating = $row['rating'];

                                echo "
                    
                        
                        <tr>
                            <td>$i</td>
                            <td>$name</td>
                            <td>$type </td>
                            <td>$price</td>
                            <td>$rating</td>
                            <td><a href='update.php?item_id=$item_id' class='btn btn-primary'>Update</a></td>
                            <td><a href='delete.php?item_id=$item_id' class='btn btn-danger'>Delete</a></td>                           
                        
                        </tr>
                        
                        
                    
                   
                    
              
                ";

                            $i=$i+1;
                            }

                        }


                         }

                    }

                    ?>

                    </table>

                    <a href="addMenu.php" class="btn btn-success">Add</a>
                </div>

            </div>

        </div>




    </div>


</section>
?>

<?php require_once('footer.php'); ?>
 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

    </body>
</html>