<?php

$conn = mysqli_connect("localhost","root","","foodie") ;

    $member_id=$_GET['id'];
    $firstname=trim($_POST['firstname']);
    $lastname=trim($_POST['lastname']);
    $email=trim($_POST['email']);
    echo $email;


    $sql1 = "update registration set firstname='$firstname',lastname='$lastname',email='$email' WHERE member_id='$member_id'";
    $result=mysqli_query($conn,$sql1);

    if($result){

        echo'Show Somthing';
    }
    else{
        echo'show anything';
    }






?>