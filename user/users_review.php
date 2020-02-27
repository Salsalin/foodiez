
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
		   
  ?>
    
<body>
    
        
    
    <?php require_once('header3.php');?>
    <div class="postmainform container">
        <div class="row">
            <div class="col-md-2"></div>

    <?php

            $user_id = $_SESSION['id'];
            $item_id = $_GET['item_id'];

            date_default_timezone_set("Asia/Dhaka");
            $date = date("Y-m-d h:i:s");


//                For Become A Foodie

	 		if(!empty($_POST['submit']))
			
			{

				$comment_title=trim($_POST['title']);
                $content=trim($_POST['content']);
		
                    
		$sql="insert into reviews(user_id,item_id,date,title,content) values('$user_id','$item_id','$date','$comment_title','$content')";
		$result=mysqli_query($conn,$sql);


		if($result){
		        echo"<script>alert('Thank you for your review..')</script>";
               echo "<meta http-equiv='refresh' content='0'>";
        
        }
        else{
		       echo"<script>alert('Plz try again..')</script>";
               echo "<meta http-equiv='refresh' content='0'>";
        }

                				
							
				 }
                else
                {
                 //echo"<script>alert('Password does not match!please try again..')</script>";
			     //echo "<meta http-equiv='refresh' content='0'>";
                }
		
    ?>
            
            <div class="col-md-7 postform">
    
          <form action='' method ='POST' id='submit'>
                       <legend><h3>Post your Review</h3></legend> 
				
						
                            <div class="form-group">
                                <label class='label_design'>Review title</label>
                                <input  type='text' name='title' id='title' class="form-control"   placeholder='Enter Your Title' required>
                            </div>
                          <div class="form-group">
                                <label class='label_design'>Write your review</label>
                                <textarea type='text' name='content' id='content' class="form-control" rows="3" required></textarea>
                            </div>
							
								
																		
                             <input type="submit" value='Post Review' name='submit' class="btn btn-default" required>

       </form>
            </div>
             <div class="col-md-3"></div>
        </div>
    </div>
    
    
<?php include "footer.php";?>

 		<script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </body>
</html>