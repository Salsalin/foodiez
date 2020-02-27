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
<link rel="stylesheet" type="text/css"  href="css/style1.css">


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
    
    
    //         For Launch Restaurant


	        
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
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        							<a class="navbar-brand" href="index.php">
								<div class="logo">
                              <img src="img/branding.png" />
								</div>
							</a>
       </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="all_restaurants.php">Restaurants</a></li>
          <li><a href="userLogin.php">UserLogin</a></li>
        <li><a href="restaurantLogin.php">RestaurantLogin</a></li>
          
       <li> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#RestaurantRegistrationForm">
              Launch Restaurant
</button></li>
       <li> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalLoginForm">
    Become a FOODIE
 </button></li>
        </ul>
          <!-- Modal HTML Markup -->
<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Become a FOODIE</h3>
            </div>
            <div class="modal-body">
      <form action='' method = 'POST' id='submit'>
            <input type="hidden" name="_token" value="">
          

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
                            

                                <fieldset>
                                    <div class='middle'>

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
                            
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div> 
      </div>
    </div>
</nav>

		<section id="slider" class="text-center">
		<div class="slider-overlay">
			<div class="container">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				    <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    </ol>

				  <!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<h3>Welcome to <span>Foodiez</span></h3>
							<h4>We are a full service integrated creative agency</h4>
						</div>
						<div class="item">
							<h3>Our mission is to...</h3>
							<h4>"For the Foodies, by the Foodies"</h4>
						</div>
					</div>

				  <!-- Controls -->
				</div>
			</div>
		</div>	
		</section>


<!-- Portfolio Section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Our Portfolio</h2>
      <hr>
      <div class="clearfix"></div>

    </div>
    <div class="row">
      <div class="portfolio-item">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/villa_angelia.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Popular Buffet</h4>
                <small>10 places</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/villa_angelia.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/TopCoffeeShop.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Popular Coffee shop</h4>
                <small>10 places</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/TopCoffeeShop.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/Top-Ice-Cream.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Ice Cream</h4>
                <small>10 places</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/Top-Ice-Cream.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/GoodForFamilyParty.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Good for Family Party</h4>
                <small>10 places</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/GoodForFamilyParty.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/BhaatDaal.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Deshi Khabar</h4>
                <small>10 places</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/BhaatDaal.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/TopSweets.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Top Sweets</h4>
                <small>10 places</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/TopSweets.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div> 
          
          <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/OutdoorSeating.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Outdoor Seating</h4>
                <small>10 places</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/OutdoorSeating.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
          
                  <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/TopSweets.jpg" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Branding</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/TopSweets.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
          
          
    </div>
  </div>
</div>
        </div>
<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Us</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-6"> <img src="img/pexels-photo-750073.jpeg" class="img-responsive"> </div>
      <div class="col-md-6">
        <div class="about-text">
          <h4>Who We Are</h4>
          <p>About Restaurant. The mixing of delicious. We strive to make all of life?s special dishes an unforgettable unique, attractive and elegant centerpiece surrounded with an abundance of decoration sensations with only the finest and freshest ingredient.</p>
          <h4>What We Do</h4>
          <p>Best Deal. Every Meal. We love restaurants as much as you do. That's why we've been helping them fill tables since 2016.</p>
          <h4>Why Choose Us</h4>
          <p>Whether you're browsing for a quick bite or planning a big night, Restaurant.com will help you discover the perfect dining experience. Your new favorite restaurant is out there – go ahead, dig in! .</p>
        </div>
      </div>
    </div>
  </div>
</div>

    
<?php require_once('footer.php'); ?>
		<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

    
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