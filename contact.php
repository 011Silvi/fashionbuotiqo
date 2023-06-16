<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Hubungi</span> Kami
      </div>
      <p class="nero__text">
      Silahkan kontak admin kami jika ada pertanyaan.
      </p>
    </div>
  </main>

<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center><!-- center Starts -->

<?php

$get_contact_us = "select * from contact_us";

$run_conatct_us = mysqli_query($con,$get_contact_us);

$row_conatct_us = mysqli_fetch_array($run_conatct_us);

$contact_heading = $row_conatct_us['contact_heading'];

$contact_desc = $row_conatct_us['contact_desc'];

$contact_email = $row_conatct_us['contact_email'];

?>

<h2> <?php echo $contact_heading; ?> </h2>

<p class="text-muted" >
<?php echo $contact_desc; ?>
</p>

</center><!-- center Ends -->

</div><!-- box-header Ends -->

<form action="contact.php" method="post" ><!-- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Nama</label>

<input type="text" class="form-control" name="name" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Email</label>

<input type="text" class="form-control" name="email" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Subjek </label>

<input type="text" class="form-control" name="subject" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Pesan </label>

<textarea class="form-control" name="message"> </textarea>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label> Pilih Pertanyaan </label>


<select name="enquiry_type" class="form-control"><!-- select Starts -->

<option> Pilih Pertanyaan </option>

<?php

$get_enquiry_types = "select * from enquiry_types";

$run_enquiry_types = mysqli_query($con,$get_enquiry_types);

while($row_enquiry_types = mysqli_fetch_array($run_enquiry_types)){

$enquiry_title = $row_enquiry_types['enquiry_title'];

echo "<option> $enquiry_title </option>";

}

?>

</select><!-- select Ends -->

</div><!-- form-group Ends -->


<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="submit" class="btn btn-primary">

<i class="fa fa-user-md"></i> Kirim Pesan

</button>

</div><!-- text-center Ends -->

</form><!-- form Ends -->

<?php

if(isset($_POST['submit'])){

// Admin receives email through this code

$sender_name = $_POST['name'];

$sender_email = $_POST['email'];

$sender_subject = $_POST['subject'];

$sender_message = $_POST['message'];

$enquiry_type = $_POST['enquiry_type'];

$new_message = "

<h1> Pesan telah dikirim oleh $sender_name </h1>

<p> <b> Email Pengirim :  </b> <br> $sender_email </p>

<p> <b> Subjek Pengirim :  </b> <br> $sender_subject </p>

<p> <b> Jenis Pertanyaan Pengirim :  </b> <br> $enquiry_type </p>

<p> <b> Pesan Pengirim :  </b> <br> $sender_message </p>

";

$headers = "From: $sender_email \r\n";

$headers .= "Content-type: text/html\r\n";

mail($contact_email,$sender_subject,$new_message,$headers);

// Send email to sender through this code

$email = $_POST['email'];

$subject = "Pembayaran";

$msg = "Terimakasih sudah mengontak kami.";

$from = "sad.ahmed22224@gmail.com";

mail($email,$subject,$msg,$from);

echo "<h2 align='center'>Pesan Anda Telah Terkirim</h2>";

}


?>

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
