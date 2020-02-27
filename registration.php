<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>foodiez</title>
    <meta name="description" content="">
    <meta name="author" content="">

  	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
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

//                For Become A Foodie

	 		if(!empty($_POST['submit']))
			
			{

				$firstname=trim($_POST['firstname']);
                $lastname=trim($_POST['lastname']);
				$email=trim($_POST['email']);
                $password1=trim($_POST['password1']);
		        $password2=trim($_POST['password2']);
                
                    
				if($password1==$password2)
                {
                    
		$sql="insert into registration(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password1')";
                      $result=mysqli_query($conn,$sql);
                header('Location:userReviewLogin.php');
			     echo "<meta http-equiv='refresh' content='0'>";      
                				
							
				 }
                else
                {
                 echo"<script>alert('Password does not match!please try again..')</script>";	
			     echo "<meta http-equiv='refresh' content='0'>";
                }
		
         }
    ?>
    
            
               <div class="col-md-6 loginform">
          <form action='' method = 'POST' id='submit'>

                     <legend><h3>Become a FOODIE</h3></legend>
					<fieldset>
                        
                        
						  <label class='label_design'>Firstname</label>
                            <div class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  type='text' name='firstname' id='firstname' class="form-control"   placeholder='Enter Your Firstname' required>
                            </div>
                           <br>
                           <label class='label_design'>Lastname</label>
                          <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  type='text' name='lastname' id='lastname' class="form-control"  placeholder='Enter Your Lastname' required>
                            </div>
                        
                        <br>
                           <label class='label_design'>Email</label>
                            <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  type='email' name='email' id='email' class="form-control"  placeholder='Enter Your Email'  required>
                            </div>
                        
                        <br>
							   <label class='label_design'>Password</label>
							<div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type='password' name='password1' id='password1' class="form-control"  placeholder='*****' required>
                            </div>	
                           <br>
                               <label class='label_design'>Confirm Password</label>
                            <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type='password' name='password2' id='password2' class="form-control"  placeholder='*****' required>
                            </div>	
								
								<br>										
                             <input type="submit" value='submit' name='submit' class="btn btn-default" required>
                                    
				</fieldset>	
       </form>
        </div>
        
 <div class="col-md-3"></div>
            </div>


        </div>    

    <?php include "footer.php";?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>


    </script>
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
</body>
</html>