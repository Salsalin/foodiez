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
<?php

session_start();
$conn = mysqli_connect("localhost","root","","foodie") ;

?>

<body>

    <?php require_once('header3.php');?>
    <div class="mainform container">
        <div class="row">
            <div class="col-md-3"></div>
    
    
    
    <?php

//               For Become A Foodie

if(!empty($_POST['login']))

{

    $email=trim($_POST['email']);
    $password=trim($_POST['password']);





        $sql="select * from seperate_restaurant where (email='$email' and password ='$password')";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['id'] = $row['id'];
                $_SESSION['restaurant_name'] = $row['restaurant_name'];

                header('Location:Restaurant_Owner/restaurant_detail.php');
                echo "<meta http-equiv='refresh' content='0'>";
            }

        }

        else{
            echo 'Wrong Email Or Password';
           // die("Query Failed" . mysqli_error($connection));
        }






}



?>

                <div class="col-md-6 loginform">

                    <form action='' method ='POST' id='submit' class="">
                        
                          <legend><h3> Restaurant Login</h3></legend>
                        <fieldset>
                            
                        <label class='label_design'>Email</label>
                        <div class="input-group">
                            
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
                            <input  type='email' name='email' id='email' class="form-control"   placeholder='Enter Your Email' required>
                        </div>
                        <br>
                              <label class='label_design'>Password</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
                            <input  type='password' name='password' id='password' class="form-control"  placeholder='Enter Your password' required>
                        </div>
                        <br>
                        <input type="submit" value='Login' name='login' class="btn btn-default" required>

                        </fieldset>

                    </form>

                </div>

<div class="col-md-3"></div>
            </div>


        </div>

      <?php include "footer.php";?>

 		<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>