

<?php
session_start();
$conn = mysqli_connect("localhost","root","","foodie") ;

$item_id = $_GET['item_id'];
$restaurant_id = $_SESSION['id'];



    $sql = "Delete from item where id ='$item_id' and restaurant_id='$restaurant_id'";
    $result = mysqli_query($conn, $sql);

    header('Location:menu.php');

?>








