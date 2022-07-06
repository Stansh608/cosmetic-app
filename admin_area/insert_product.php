<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}


else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Add New Product </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / New Product

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Add New Product

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="./supp_check.php" method="post">
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select Supplier</label>

<div class="col-md-6" >

<select  class="form-control" name="supplier"><!-- select manufacturer Starts -->

<option> <?php if(isset($_SESSION['sup'])){
  $person=$_SESSION['sup'];

  echo $_SESSION['sup'];
 
} 
 ?></option>

<?php

$get_supplier = "select * from suppliers";
$run_supplier = mysqli_query($con,$get_supplier);
while($row_supplier= mysqli_fetch_array($run_supplier)){
$supplier_id = $row_supplier['supplier_id'];
$supplier_name = $row_supplier['supplier_name'];

echo "<option value='$supplier_name'>
$supplier_name
</option>";
} 
?>

</select><!-- select manufacturer Ends -->
</div>

  <input type="submit" value="Select">




</div><!-- form-group Ends -->
</form>
<form style="display:none;" class="form-horizontal" action="./choose_cat.php" method="post">

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Category </label>

<div class="col-md-6" >

<select name="product_cat" class="form-control" >

<option><?php if(isset($_SESSION['pro'])){


  echo $_SESSION['pro'];
 
} 
 ?> </option>


<?php

$get_p_cats = "select * from ".$person." ";

$run_p_cats = mysqli_query($con,$get_p_cats);

while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {

$p_cat = $row_p_cats['product_category'];

$p_id = $row_p_cats['supplier_id'];

echo "<option value='$p_cat' >$p_cat</option>";

}


?>



</select>
</div>
</select><input type="submit" value="Done">
</div><!-- form-group Ends -->
</form>
  
 






<form style="display:none;"id="add_products" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Title </label>

<div class="col-md-6" >

<input type="text" name="product_title" class="form-control" required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Url </label>

<div class="col-md-6" >

<input type="text" name="product_url" class="form-control" required >

 Url Example : lipstick-10


</div>
</div>
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Type </label>

<div class="col-md-6" >
<select class="form-control" name="product_type" id="">
  <option value=""></option>
  <option value="lotion">Lotion</option>
  <option value="hair">Hair</option>
  <option value="perfume">Perfume</option>
  <option value="makeup">Make-up</option>
  <option value="polish">Polish</option>
  

</select>

</div>
</div><!-- form-group Ends -->











<!-- failed implementation
<script>
  function onout(){
  var name=document.getElementById("supplier").value;
  document.getElementById("")
  </script>
  
  <script>
  alert(name);
  }
</script>
-->




<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Sub-Category </label>

<div class="col-md-6" >


<select name="cat" class="form-control" >

<option> Select a Sub-Category </option>

<?php

$get_cat = "select * from categories ";

$run_cat = mysqli_query($con,$get_cat);

while ($row_cat=mysqli_fetch_array($run_cat)) {

$cat_id = $row_cat['cat_id'];

$cat_title = $row_cat['cat_title'];

echo "<option value='$cat_id'>$cat_title</option>";

}

?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image 1 </label>

<div class="col-md-6" >

<input type="file" name="product_img1" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image 2 </label>

<div class="col-md-6" >

<input type="file" name="product_img2" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image 3 </label>

<div class="col-md-6" >

<input type="file" name="product_img3" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Buying Price </label>

<div class="col-md-6" >

<input type="text" name="product_bprice" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Selling Price </label>

<div class="col-md-6" >

<input type="text" name="product_sprice" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Search Keyword </label>

<div class="col-md-6" >

<input type="text" name="product_keywords" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Product Description </a>

</li>

<li>

<a data-toggle="tab" href="#features"> Product Features </a>

</li>


</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="product_desc" class="form-control" rows="15" id="product_desc">


</textarea>

</div><!-- description tab-pane fade in active Ends -->


<div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

<br>

<textarea name="product_features" class="form-control" rows="15" id="product_features">


</textarea>

</div><!-- features tab-pane fade in Ends -->




</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Label <i>e.g New, Hot </i></label>

<div class="col-md-6" >

<input type="text" name="product_label" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Add Product" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->





</form><!-- form-horizontal Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['submit'])){

$product_title = $_POST['product_title'];
$product_cat = $_POST['product_cat'];
$cat = $_POST['cat'];
$manufacturer_id = $_POST['manufacturer'];
$product_bprice = $_POST['product_bprice'];
$product_desc = $_POST['product_desc'];
$product_keywords = $_POST['product_keywords'];

$product_sprice = $_POST['product_sprice'];

$product_label = $_POST['product_label'];

$product_url = $_POST['product_url'];

$product_features = $_POST['product_features'];

//$product_video = $_POST['product_video'];



$product_img1 = $_FILES['product_img1']['name'];
$product_img2 = $_FILES['product_img2']['name'];
$product_img3 = $_FILES['product_img3']['name'];

$temp_name1 = $_FILES['product_img1']['tmp_name'];
$temp_name2 = $_FILES['product_img2']['tmp_name'];
$temp_name3 = $_FILES['product_img3']['tmp_name'];

move_uploaded_file($temp_name1,"product_images/$product_img1");
move_uploaded_file($temp_name2,"product_images/$product_img2");
move_uploaded_file($temp_name3,"product_images/$product_img3");

$insert_product = "insert into products (product_category,product_subcat,supplier_name,date,product_name,product_url,product_img1,product_img2,product_img3,product_bprice,product_sellprice,product_quantity,product_desc,product_features,product_keywords,product_label)
 values ('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_url','$product_img1','$product_img2','$product_img3','$product_price','$psp_price','$product_desc','$product_features','$product_video','$product_keywords','$product_label','$status')";

$run_product = mysqli_query($con,$insert_product);

if($run_product){

echo "<script>alert('Product has been inserted successfully')</script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}

}

?>

<?php } ?>

<?php
 if(isset($_SESSION['pro'])){
   
  ?>
  <script>
    document.getElementById('add_products').style.display='block';
  </script>
  <?php
}else{?><script>
  document.getElementById('add_products').style.display='none';
</script>
<?php }
$_SESSION['pro']=false; ?>
