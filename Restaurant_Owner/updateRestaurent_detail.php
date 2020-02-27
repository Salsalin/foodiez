<?php


$conn = mysqli_connect("localhost","root","","foodie") ;
$restaurent_id = $_GET['id'];

$sql = "SELECT * FROM seperate_restaurant WHERE id='$restaurent_id'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>=1) {
    while ($row = mysqli_fetch_assoc ( $result )) {
        $restaurent_id = $row['id'];
        $photo = $row['photo'];
        $coverphoto = $row['coverphoto'];
        $restaurant_name = $row['restaurant_name'];
        $address= $row['address'];
        $time= $row['time'];
        $cuisine= $row['cuisine'];
        $mobile= $row['mobile'];
    }


}

if(!empty($_POST['update'])) {
    
    

                       $dir='../img/';
					$file=$_FILES['photo']['name'];
					$pic=$dir.$file;
					$upload=move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
                    
                                        //images processing
                    $dir='../img/';
					$file=$_FILES['coverphoto']['name'];
					$pic2=$dir.$file;
					$upload=move_uploaded_file($_FILES['coverphoto']['tmp_name'],$pic2);

    $name = trim($_POST['restaurant_name']);
    $address = trim($_POST['address']);
    $time = trim($_POST['time']);
    $cuisine = trim($_POST['cuisine']);
    $mobile= trim($_POST['mobile']);


    $sql = "update seperate_restaurant set restaurant_name='$name', address='$address', time = '$time' , cuisine = '$cuisine' , mobile = '$mobile' where id='$restaurent_id' ";
    $result = mysqli_query($conn, $sql);
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

    <!-- Bootstrap -->

    <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../css/style6.css">
    <link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="../js/modernizr.custom.js"></script>

</head>




<!-- Navigation start -->
<body>
<?php require_once('header.php');?>

<div class='update-restaurant container'>
    <div class='row'>

        <div class='col-md-12'>
            <form action="" method="post" enctype="multipart/form-data">
               
                                <div class="form-file">
                                <label >Photo</label>
                                <input type="file" name='photo' id='file'>
                                </div>
                                        
                               <div class="form-file">
                                <label >Cover Photo</label>
                                <input type="file" name='coverphoto' id='file'>
                                </div>
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="restaurant_name" value="<?php echo"$restaurant_name"; ?>" required>
                </div>

                <div class="form-group">
                    <label for="  Email  ">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo"$address"; ?>" />
                </div>

                <div class="form-group">
                    <label for="  Email  ">Time</label>
                    <input type="text" class="form-control" name="time" value="<?php echo"$time"; ?>" />
                </div>

                <div class="form-group">
                    <label for="  Email  ">Cuisine</label>
                    <input type="text" class="form-control" name="cuisine" value="<?php echo"$cuisine"; ?>"/>
                </div>

                <div class="form-group">
                    <label for="  Email  ">Mobile</label>
                    <input type="text" class="form-control" name="mobile" value="<?php echo"$mobile"; ?>"/>
                </div>

                <input type="submit" value="Update" class="btn btn-info" name="update">

            </form>

        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->


<!-- Javascripts
<!-- Javascripts
    ================================================== -->




</body>
</html>