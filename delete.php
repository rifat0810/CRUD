<?php
session_start();
include 'dbconnect.php'; 
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query = "DELETE FROM customers WHERE id = '$id'";
    if(mysqli_query($connection,$query)){
        $_SESSION['message'] = "Customer Deleted Successfully";
		$_SESSION['type'] = "danger";
		header('location:index.php');
    }
}
?>