
<?php
session_start();
$conn = mysqli_connect("localhost","root","","foodie") ;
if(!empty($_POST['addmenu'])) {
    $gtype_id = 0;
    $restaurant_id = $_SESSION['id'];
    
     $dir='../img/';
     $file=$_FILES['photo']['name'];
     $pic=$dir.$file;
     $upload=move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
    $itemName = trim($_POST['name']);
    $type = trim($_POST['type']);
    $price = trim($_POST['price']);
   

    $sql = "select * from type where name = '$type' and restaurant_id='$restaurant_id'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) >= 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $type_id = $row['id'];

            echo "When type and restaurent already added";

            $sql = "insert into item(name,photo,type_id,restaurant_id,price) values
            ('$itemName','$pic','$type_id','$restaurant_id','$price')";
            $result = mysqli_query($conn, $sql);

        }

    }

    else {


        $sql = "select * from type where name= '$type'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >= 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $type_id = $row['id'];


            }
            echo "When type available but restaurent is not";
            $sql1 = "insert into type(id,name,restaurant_id) values('$type_id','$type','$restaurant_id')";
            $result1 = mysqli_query($conn, $sql1);

        }

        else{

            $sql = "select * from type ORDER BY id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) >= 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $type_id = ($row['id']+1);
                    //echo $row['id']+1;
                    var_dump($row['id']);


                }
                echo "When type and restaurent both not available";
                $sql = "insert into type(id,name,restaurant_id) values('$type_id','$type','$restaurant_id')";
                $result = mysqli_query($conn, $sql);

            }

            else{
                $type_id = 1;
                echo" When type table is empty";
                $sql = "insert into type(id,name,restaurant_id) values('$type_id','$type','$restaurant_id')";
                $result = mysqli_query($conn, $sql);
            }

        }

        $sql1 ="insert into item(name,photo,type_id,restaurant_id,price) values('$itemName','$pic','$type_id','$restaurant_id','$price')";
        $result = mysqli_query($conn, $sql1);

    }

}




?>



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

<body>

<?php require_once('header.php');?>


    <div class="mainform container">

        <div class="row">
            <div class="col-sm-6 .col-sm-offset-3">

                <form action="" method="post" enctype="multipart/form-data">
                    
                    <legend><h3>Add To Menu</h3></legend>
                    
                    <div class="form-file">
                                <label >Upload Item Image</label>
                                <input type="file" name='photo' id='file'>
                     </div>
                    
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="  Email  ">Type</label>
                        <input type="text" class="form-control" name="type">
                    </div>

                    <div class="form-group">
                        <label for="  Email  ">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>

                    <input type="submit" value="Add Menu" class="btn btn-info" name="addmenu">

                </form>
            </div>
        </div>
    </div>



<?php require_once('footer.php'); ?>

 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>


</body>
</html>
