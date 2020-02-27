
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
<div class="container">
    <div class="row">
        <div class="col-md-9 order">

    <?php

        
            $item_id = $_GET['item_id'];
            $sql = "SELECT * FROM item WHERE id='$item_id'";
            $result=mysqli_query($conn,$sql);
            $data=mysqli_fetch_array($result);

             $name = $data['name'];
             $photo=$data['photo'];
             $price = $data['price'];
            
                  echo"                    <div class='col-md-6'>    
                                         <img src='img/$photo' alt='there is a image' class='img-responsive'>
                                         </div>
                                         <div class='col-md-6'>
                                        <h5><strong>$name</strong></h5>   
                                        <p><strong>$price</strong></p>
                                        <div class='box-order'>
                                              Minimum Order Quantity (MOQ): 1
                                             1 order quantity serves 1 people.
                                          </div>
                                        </div>
       <div class='col-md-6'>                                 
 <table class='table  table-responsive'>
  <tr>
    <th>Available Days</th>
    <th>Timing</th>
   
  </tr>
  <tr>
    <td>Everyday</td>
    <td>9.00AM-9.00PM</td>
  </tr>
</table>
</div>
                                        
                                        
                                        
                     <div class='quantity'>
                      <p>Quanity</p>
                        </div>
                                        

                            ";

            
              ?>     

                                  
            
                                        
                                        <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-default btn-number"  data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-default btn-number" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                                  <a href='' class='btn btn-success btn-sm'>Proceed to Checkout</a>
                      

		
  
        
        </div>
        <div class="col-md-3"></div>
    </div>     
    </div>
    
<?php include "footer.php";?>

 		<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
   
    
    <script>
    
    $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
});
    
    
    </script>
    </body>
</html>