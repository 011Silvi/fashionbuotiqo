<!DOCTYPE html>
<html>
<head>
	<title>Insert Store</title>
	<!-- Tambahkan tautan CSS untuk mempercantik tampilan -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row"><!-- 1 row Starts -->
			<div class="col-lg-12"><!-- col-lg-12 Starts -->
				<ol class="breadcrumb"><!-- breadcrumb Starts -->
					<li class="active"></li>
				</ol><!-- breadcrumb Ends -->
			</div><!-- col-lg-12 Ends -->
		</div><!-- 1 row Ends -->

		<div class="row"><!-- 2 row Starts -->
			<div class="col-lg-12"><!-- col-lg-12 Starts -->
				<div class="panel panel-default"><!-- panel panel-default Starts -->
					<div class="panel-heading"><!-- panel-heading Starts -->
						<h3 class="panel-title">
							<i class="fa fa-money fa-fw"></i> Memasukkan Toko
						</h3>
					</div><!-- panel-heading Ends -->

					<div class="panel-body"><!-- panel-body Starts -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
							 <div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label"> Nama Toko : </label>
								<div class="col-md-6">
									<input type="text" name="store_title" class="form-control">
								</div>
							</div><!-- form-group Ends -->

							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label"> Gambar Toko : </label>
								<div class="col-md-6">
									<input type="file" name="store_image" class="form-control">
								</div>
							</div><!-- form-group Ends -->

							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label"> Deskripsi Toko : </label>
								<div class="col-md-6">
									<textarea name="store_desc" class="form-control" rows="10" cols="19"></textarea>
								</div>
							</div><!-- form-group Ends -->

							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label"> Tombol Toko : </label>
								<div class="col-md-6">
									<input type="text" name="store_button" class="form-control">
								</div>
							</div><!-- form-group Ends -->

							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label"> URL Toko : </label>
								<div class="col-md-6">
									<input type="url" name="store_url" class="form-control">
								</div>
							</div><!-- form-group Ends -->

							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label"></label>
								<div class="col-md-6">
									<input type="submit" name="submit" value="Insert store" class="btn btn-primary form-control">
								</div>
							</div>
							
							<div class="form-group" >
							<label class="col-md-3 control-label"></label>
								<div class="col-md-6">
								<a href="mitra_area/login.php" class="btn btn-danger form-control">LOGIN AS MITRA</a>
								</div>
	</div>
							</div><!-- form-group Ends -->
						</form><!-- form-horizontal Ends -->
					</div><!-- panel-body Ends -->
				</div><!-- panel panel-default Ends -->
			</div><!-- col-lg-12 Ends -->
		</div><!-- 2 row Ends -->
	</div><!-- container Ends -->

	<?php
		// Pastikan Anda telah membuat koneksi database sebelumnya
		// Misalnya, dengan menggunakan mysqli_connect
		$con = mysqli_connect("localhost", "root", "", "ecom_store");
		if (!$con) {
			die("Koneksi database gagal: " . mysqli_connect_error());
		}

		if (isset($_POST['submit'])) {
			$store_title = $_POST['store_title'];
			$store_desc = $_POST['store_desc'];
			$store_button = $_POST['store_button'];
			$store_url = $_POST['store_url'];
			$store_image = $_FILES['store_image']['name'];
			$tmp_image = $_FILES['store_image']['tmp_name'];

			$sel_store = "SELECT * FROM store";
			$run_store = mysqli_query($con, $sel_store);
			$count = mysqli_num_rows($run_store);

			if ($count == 3) {
				echo "<script>alert('Anda telah memasukkan 3 kolom penyimpanan')</script>";
			} else {
				move_uploaded_file($tmp_image, "store_images/$store_image");
				$insert_store = "INSERT INTO store (store_title, store_image, store_desc, store_button, store_url) VALUES ('$store_title', '$store_image', '$store_desc', '$store_button', '$store_url')";
				$run_store = mysqli_query($con, $insert_store);

				if ($run_store) {
					echo "<script>alert('Kolom toko baru telah dimasukkan')</script>";
					echo "<script>window.open('index.php?view_store','_self')</script>";
				}
			}
		}

		// Tutup koneksi database setelah penggunaan
		mysqli_close($con);
	?>
	
	<script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>
