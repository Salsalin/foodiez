
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
       
       
                     <?php

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
                 echo"<script>alert('Entry successfully..')</script>";	
			     echo "<meta http-equiv='refresh' content='0'>";      
                				
							
				 }
                else
                {
                 echo"<script>alert('Password does not match!please try again..')</script>";	
			     echo "<meta http-equiv='refresh' content='0'>";
                }
		
         }
    
    
	        
                if(!empty($_POST['register']))

                {

                    //images processing
                    $dir='../img/';
					$file=$_FILES['photo']['name'];
					$pic=$dir.$file;
					$upload=move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
                    
                                        //images processing
                    $dir='../img/';
					$file=$_FILES['coverphoto']['name'];
					$pic2=$dir.$file;
					$upload=move_uploaded_file($_FILES['coverphoto']['tmp_name'],$pic2);

                    $restaurant_name=trim($_POST['restaurant_name']);
                    $email=trim($_POST['email']);
                    $password1=trim($_POST['password1']);
		            $password2=trim($_POST['password2']);
                    $address=trim($_POST['address']);
                    $time=trim($_POST['time']);
                    $cuisine=trim($_POST['cuisine']);
                    $mobile=trim($_POST['mobile']);



                    if($password1==$password2)
                    {

                    					
					$sql="insert into seperate_restaurant values(
								'',
								'$pic',
                                '$pic2',
								'$restaurant_name',
                                '$email',
                                '$password1',
                                '$address',
                                '$time',
                                '$cuisine',
                                '$mobile'
					)";
                        
                        $result=mysqli_query($conn,$sql);
                        echo"<script>alert('Registration successfully..')</script>";
                        echo "<meta http-equiv='refresh' content='0'>";


                    }
                    else
                    {
                        echo"<script>alert('Something Error in Photo upload')</script>";
                        echo "<meta http-equiv='refresh' content='0'>";
                    }

                }
    
    
    
      mysqli_close($conn);
    
    ?>
    
       
       
       <nav id="menu" class="navbar navbar-default navbar-fixed-top">
       <div class="container">
       <div class="navbar-header">
                
           <a href="index2.php" class="navbar-brand"><img src="img/FP-NEW-120X42.png" />
           </a>
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
           </button>
       </div>    
           
           <div class=" navbar-collapse collapse" id="mynav">
               
                  <ul class="nav navbar-nav navbar-right">
            <li><a href="all_restaurants.php">Restaurants</a></li>
          <li><a href="userLogin.php">UserLogin</a></li>
        <li><a href="restaurantLogin.php">RestaurantLogin</a></li>
    <li> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalLoginForm">
    Become a FOODIE
        </button></li>
     <li> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#RestaurantRegistrationForm">
              Launch Restaurant
         </button> </li>            
                      
        <div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Become a FOODIE</h3>
            </div>
            <div class="modal-body">
      <form action='' method = 'POST' id='submit'>
            <input type="hidden" name="_token" value="">
          <div class="login-wrap">

					<fieldset>
                        <div class='middle'>
                            
					
                            <div class="form-group">  
                            <label class='label_design'>Firstname</label>
                                <input  type='text' name='firstname' id='firstname' class="form-control"   placeholder='Enter Your Firstname' required>
                            </div>
                               
                          
                          <div class="form-group">
                                <label class='label_design'>Lastname</label>
                                <input  type='text' name='lastname' id='lastname' class="form-control"  placeholder='Enter Your Lastname' required>
                            </div>
                            
                            
                    
                            <div class="form-group">
                                 <label class='label_design'>Email</label>
                                <input  type='email' name='email' id='email' class="form-control"  placeholder='Enter Your Email'  required>
                            </div>
                            
                            
							 
							<div class="form-group">
                                   <label class='label_design'>Password</label>
                                <input type='password' name='password1' id='password1' class="form-control"  placeholder='Enter Your Password' required>
                            </div>	
                            
                            
               
                            <div class="form-group">
                                <label class='label_design'>Confirm Password</label>
                                <input type='password' name='password2' id='password2' class="form-control"  placeholder='Enter Your Password' required>
                            </div>	
								
																		
                             <input type="submit" value='submit' name='submit' class="btn btn-success btn-lg" required>
                                       
						</div>
				</fieldset>	
          </div>
       </form>
            </div>
             <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
            </div>     
                      
                      
              
    <div id="RestaurantRegistrationForm" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Launch Restaurant</h3>
                    </div>
                    <div class="modal-body">
            <form action='' method ='POST' id='submit' enctype='multipart/form-data'>
                            <input type="hidden" name="_token" value="">
                            <div class="login-wrap">

                                <fieldset>
                                    <div class='middle'>

<!--                                        <div class="form-group">-->
<!--                                            <label class='photo'>Photo</label>-->
<!--                                            <input  type='file' name='photo' id='photo' class="form-control"   required>-->
<!--                                        </div>-->
                                <div class="form-file">
                                <label >Photo</label>
                                <input type="file" name='photo' id='file'>
                                </div>
                                        
                               <div class="form-file">
                                <label >Cover Photo</label>
                                <input type="file" name='coverphoto' id='file'>
                                </div>
                                        
                                        <div class="form-group">
                                            <label class='label_design'>Restaurant Name</label>
                                            <input  type='text' name='restaurant_name' id='restaurant_name' class="form-control"   placeholder='Enter Your Restaurant Name' required>
                                        </div>

                                        <div class="form-group">
                                            <label class='label_design'>Email</label>
                                            <input  type='email' name='email' id='email' class="form-control"  placeholder='Enter Your Email'  required>
                                        </div>

                                  							
							<div class="form-group">
                                <label class='label_design'>Password</label>
                                <input type='password' name='password1' id='password1' class="form-control"  placeholder='Enter Your Password' required>
                            </div>	
                            
                            <div class="form-group">
                                <label class='label_design'>Confirm Password</label>
                                <input type='password' name='password2' id='password2' class="form-control"  placeholder='Enter Your Password' required>
                            </div>	

                                        <div class="form-group">
                                            <label class='label_design'>Address</label>
                                            <input  type='text' name='address' id='address' class="form-control"  placeholder='Enter Your Address'  required>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class='label_design'>Opening Time</label>
                                            <input  type='text' name='time' id='time' class="form-control"  placeholder='Enter the opening time'  required>
                                        </div>

                                        <div class="form-group">
                                            <label class='label_design'>Cuisine</label>
                                            <input type='text' name='cuisine' id='cuisine' class="form-control"  placeholder='Enter Your Cuisine' required>
                                        </div>

                                        <div class="form-group">
                                            <label class='label_design'>Mobile</label>
                                            <input type='text' name='mobile' id='mobile' class="form-control"  placeholder='Enter Your Mobile Number' required>
                                        </div>

                                     <input type="submit" value='Register' name='register' class="btn btn-success btn-lg" required>
                                   

                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>            
                                
         </ul>    
       </div>  
           
       </div>
           
             
       <div class="header-slider">
       
    </div>     

    </nav>

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

    
</body>
</html>