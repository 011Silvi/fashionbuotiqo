<?php

session_start();

if(!isset($_SESSION['customer_email'])){

echo "<script>window.open('../checkout.php','_self')</script>";


}else {

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

if(isset($_GET['order_id'])){

$order_id = $_GET['order_id'];

}

?>



<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->


<div class="col-md-3"><!-- col-md-3 Starts -->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 Ends -->

<div class="col-md-9"><!-- col-md-9 Starts -->

<div class="box"><!-- box Starts -->

<h1 align="center"> Silahkan Konfirmasi Pembayaran Anda </h1>


<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>No. Invoice:</label>

<input type="text" class="form-control" name="invoice_no" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Jumlah Dikirim:</label>

<input type="text" class="form-control" name="amount_sent" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Pilih Metode Pembayaran:</label>

<select name="payment_mode" class="form-control"><!-- select Starts -->

<option>Pilih Metode Pembayaran</option>
<option>Transfer Bank</option>
<option>COD</option>
<option>PayLater</option>

</select><!-- select Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>ID Transaksi/Referensi:</label>

<input type="text" class="form-control" name="ref_no" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Kode Buotiqo:</label>

<input type="text" class="form-control" name="code" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Tanggal Pembayaran:</label>

<input type="text" class="form-control" name="date" required>

</div><!-- form-group Ends -->

<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">

<i class="fa fa-user-md"></i> Konfirmasi Pembayaran

</button>

</div><!-- text-center Ends -->

</form><!--- form Ends -->

<?php

if(isset($_POST['confirm_payment'])){

$update_id = $_GET['update_id'];

$invoice_no = $_POST['invoice_no'];

$amount = $_POST['amount_sent'];

$payment_mode = $_POST['payment_mode'];

$ref_no = $_POST['ref_no'];

$code = $_POST['code'];

$payment_date = $_POST['date'];

$complete = "Complete";

$insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

$run_payment = mysqli_query($con,$insert_payment);

$update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";

$run_customer_order = mysqli_query($con,$update_customer_order);

$update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

$run_pending_order = mysqli_query($con,$update_pending_order);

if($run_pending_order){

echo "<script>alert('Pembayaran Anda telah diterima, pesanan akan selesai dalam waktu 24 jam')</script>";

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}



}



?>


</div><!-- box Ends -->

</div><!-- col-md-9 Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php } ?>
