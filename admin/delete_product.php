<?php
include'../db_connection/db_connection.php';

$get_id=$_GET['id'];

mysqli_query($conn, "delete from products where prodid='$get_id'")or die(mysql_error());
header('location:product.php');
?>