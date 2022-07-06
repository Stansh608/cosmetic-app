<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Products

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Products

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th> Item No. </th>
<th>Product Name</th>
<th>Product Image</th>
<th>Product B.Price</th>
<th>Product S.Price</th>
<th>Item sold</th>
<th>Item Remaining</th>
<th>Supplier Name </th>
<th>Search Keyword</th>
<th>Delete Product</th>
<th>Edit  Product</th>

</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_pro = "select * from products ";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
$pro_id=$row_pro['product_id'];
$pro_supplier = $row_pro['supplier_name'];

$pro_title = $row_pro['product_name'];

$pro_image = $row_pro['product_img1'];

$pro_bprice = $row_pro['product_bprice'];
$pro_sprice = $row_pro['product_sellprice'];
$pro_keywords = $row_pro['product_keywords'];


$i++;

?>

<tr>

<td></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"></td>

<td>$ <?php echo $pro_bprice; ?></td>
<td>$ <?php echo $pro_sprice; ?></td>


<td>
<?php

$get_sold = "select * from pending_orders where product_id='$pro_id'";
$run_sold = mysqli_query($con,$get_sold);
$count = mysqli_num_rows($run_sold);
echo $count;
?>
</td>
<td> <?php echo "Unkwown"; ?></td>
<td> <?php echo $pro_supplier; ?></td>
<td> <?php echo $pro_keywords; ?> </td>



<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php } ?>