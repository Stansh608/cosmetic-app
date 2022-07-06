<?php
session_start();
$pro_cat=$_POST['product_cat'];
$_SESSION['pro']=$pro_cat;
header("Location: index.php?insert_product");

?>