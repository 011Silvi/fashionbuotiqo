<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

<title>Login Mitra</title>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/login.css" >

</head>

<body>

<div class="container" ><!-- container Starts -->

<form class="form-login" action="" method="post" ><!-- form-login Starts -->

<h2 class="form-login-heading" >Login Mitra</h2>

<input type="text" class="form-control" name="mitra_email" placeholder="Email Address" required >

<input type="password" class="form-control" name="mitra_pass" placeholder="Password" required >

<button class="btn btn-lg btn-primary btn-block" type="submit" name="mitra_login" >

Log in

</button>


</form><!-- form-login Ends -->

</div><!-- container Ends -->



</body>

</html>

<?php

if(isset($_POST['mitra_login'])){

$mitra_email = mysqli_real_escape_string($con,$_POST['mitra_email']);

$mitra_pass = mysqli_real_escape_string($con,$_POST['mitra_pass']);

$get_mitra = "select * from mitra where mitra_email='$mitra_email' AND mitra_pass='$mitra_pass'";

$run_mitra = mysqli_query($con,$get_mitra);

$count = mysqli_num_rows($run_mitra);

if($count==1){

$_SESSION['mitra_email']=$mitra_email;

echo "<script>alert('Selamat Datang, Mitra')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email atau Password Salah')</script>";

}

}

?>