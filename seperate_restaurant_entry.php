
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>foodiez</title>
<meta name="description" content="">
<meta name="author" content="">

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
    
            
            <?php require_once('header.php');?>
            <?php

            
             		if(!empty($_POST['submit'])){

				   $dir='../img/';
					$file=$_FILES['photo']['name'];
					$pic=$dir.$file;
					$upload=move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
                        
				   $dir='../img/';
					$file=$_FILES['coverphoto']['name'];
					$pic2=$dir.$file;
					$upload=move_uploaded_file($_FILES['coverphoto']['tmp_name'],$pic2);
                        
				$restaurant_name=trim($_POST['restaurant_name']);
                $address=trim($_POST['address']);
                $time=trim($_POST['time']);
                $cuisine=trim($_POST['cuisine']);
                $mobile=trim($_POST['mobile']);
                $page=trim($_POST['page']);
                        
					
					$sql="insert into seperate_restaurant values(
								'',
								'$pic',
                                '$pic2',
								'$restaurant_name',
                                '$address',
                                 '$time',
                                '$cuisine',
                                '$mobile',
                                '$page'
					)";
                  $result=mysqli_query($conn,$sql);
                
                if(!$result)
                {					
						echo"error".mysqli_error();			
				         }
                else
                {
                echo"<script>alert('Entry successfully')</script>";	
			     echo "<meta http-equiv='refresh' content='0'>";
                }
                
}             
            
       mysqli_close($conn);         
?>
    
	<div class='container form'>

      <form action='' method = 'POST' id='submit' enctype='multipart/form-data'>
          <div class="login-wrap">
              
           		<fieldset>
					<legend><h3>Create Restaurant Management</h3></legend>
                        <div class='middle'>

							<div class="form-file">
                                <label >Photo</label>
                                <input type="file" name='photo' id='file'>
                            </div>
                            <div class="form-file">
                                <label >Add Cover Photo</label>
                                <input type="file" name='coverphoto' id='file'>
                            </div>
                             <br>
                             <div class="form-group">
                                <label class='label_design'>Name</label>
                                <input  type='text' name='restaurant_name' class="form-control"  required>
                            </div>
                           <div class="form-group">
                                <label class='label_design'>Address</label>
                                <input  type='text' name='address' class="form-control" required>
                            </div>
                            
                               <div class="form-group">
                                <label class='label_design'>Time</label>
                                <input  type='text' name='time' class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label class='label_design'>Cuisine</label>
                                <input type='text' name='cuisine' class="form-control"  required>
                            </div>
                            
                                                        
                            <div class="form-group">
                                <label class='label_design'>Mobile</label>
                                <input type='text' name='mobile' class="form-control"  required>
                            </div>	
                            
                             <div class="form-group">
                                <label class='label_design'>Where to add</label>
                                <input type='text' name='page' class="form-control"  required>
                            </div>	
                            
                            
                           											
                             <input type="submit" value='SUBMIT' name='submit' class=" btn btn-success btn-sm pull-left "  required>
                                       
						</div>
				</fieldset>   
                   
          </div>
       </form>
        </div>
<?php require_once('footer.php'); ?>
    </body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    		<script type="text/javascript">
		
		
		$(window).on('scroll', function(){
			if($(window).scrollTop()>550){
				$('#menu').addClass('menu-bg');
			}
			else{
				$('#menu').removeClass('menu-bg');
			}
		});
		
		$(window).scroll(function() {
			if($(this).scrollTop()>200) {
				$('.scrollup').fadeIn();
			}
			else{
				$('.scrollup').fadeOut();
			}
		});
		
		$('.scrollup').click(function() {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
    </script> 
</html>