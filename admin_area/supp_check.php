<?php
session_start();
$supplier=$_POST['supplier'];
$_SESSION['sup']=$supplier;
header("Location: index.php?insert_product");

?>