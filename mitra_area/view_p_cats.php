<?php

if(!isset($_SESSION['mitra_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Lihat Kategori Produk

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Lihat Kategori Produk

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Nama</th>
<th>Hapus</th>
<th>Edit</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i=0;

$get_p_cats = "select * from product_categories";

$run_p_cats = mysqli_query($con,$get_p_cats);

while($row_p_cats = mysqli_fetch_array($run_p_cats)){

$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];


$i++;

?>

<tr>

<td> <?php echo $i; ?> </td>

<td> <?php echo $p_cat_title; ?> </td>


<td> 

<a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>">

<i class="fa fa-trash-o"></i> Hapus

</a>

</td>

<td> 

<a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>">

<i class="fa fa-pencil"></i> Edit

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->
<div class="panel-heading">
    <!-- panel-heading Starts -->
    <div class="panel-options">
        <a href="report_pcats_excel.php?type=excel" class="btn btn-success btn-sm">
            <i class="fa fa-file-excel-o"></i> Report to Excel
        </a>
        <a href="report_p_cats.php?type=pdf" class="btn btn-danger btn-sm">
            <i class="fa fa-file-pdf-o"></i> Report to PDF
        </a>
    </div>
</div>


<?php } ?>