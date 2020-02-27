

<?php
session_start();
$conn = mysqli_connect("localhost","root","","foodie") ;

$item_id = $_GET['item_id'];
$restaurant_id = $_SESSION['id'];


$sql1 = "select * from item where id = '$item_id'";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        $type_id = $row['type_id'];
        $item_name = $row['name'];
        $price = $row['price'];
        $restaurant_id = $row['restaurant_id'];

        $sql = "select * from type where id ='$type_id' and restaurant_id='$restaurant_id'";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) >= 1) {
        while ($row = mysqli_fetch_assoc($result)){

            $type = $row['name'];

        }
        }


    }

}






if(!empty($_POST['addmenu'])) {
    $gtype_id = 0;



    $itemName = trim($_POST['name']);
    $type = trim($_POST['type']);
    $price = trim($_POST['price']);


    $sql = "select * from type where name ='$type' and restaurant_id='$restaurant_id'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) >= 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $type_id = $row['id'];

            $sql = "update item set name='$itemName', price='$price' where id='$item_id' ";
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
            $sql = "insert into type(id,name,restaurant_id) values('$type_id','$type','$restaurant_id')";
            $result = mysqli_query($conn, $sql);

        }

        else{

            $sql = "select * from type ORDER BY id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) >= 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    var_dump($row['id']);
                    $type_id = ($row['id']+1);
                    //echo $row['id']+1;
                    //var_dump($row['id']+1);


                }
                $sql = "insert into type(id,name,restaurant_id) values('$type_id','$type','$restaurant_id')";
                $result = mysqli_query($conn, $sql);

            }

            else{
                $type_id = 1;
                $sql = "insert into type(id,name,restaurant_id) values('$type_id','$type','$restaurant_id')";
                $result = mysqli_query($conn, $sql);
            }

        }

        $sql = "update item set name='$itemName', price='$price', type_id = '$type_id' where id='$item_id' ";
        $result = mysqli_query($conn, $sql);

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
                    
                    <legend><h3>Update Menu</h3></legend>
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo"$item_name"; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="  Email  ">Type</label>
                        <input type="text" class="form-control" name="type" value="<?php echo"$type"; ?>" />
                    </div>

                    <div class="form-group">
                        <label for="  Email  ">Price</label>
                        <input type="text" class="form-control" name="price" value="<?php echo"$price"; ?>"/>
                    </div>

                    <input type="submit" value="Update Menu" class="btn btn-info" name="addmenu">

                </form>
            </div>
        </div>

    </div>


    <?php require_once('footer.php'); ?>
    
 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

</body>
</html>
