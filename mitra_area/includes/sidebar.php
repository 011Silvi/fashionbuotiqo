    <?php


    if(!isset($_SESSION['mitra_email'])){

    echo "<script>window.open('login.php','_self')</script>";

    }

    else {




    ?>

    <nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

    <div class="navbar-header" ><!-- navbar-header Starts -->

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


    <span class="sr-only" >Alihkan Navigasi</span>

    <span class="icon-bar" ></span>

    <span class="icon-bar" ></span>

    <span class="icon-bar" ></span>


    </button><!-- navbar-ex1-collapse Ends -->

    <a class="navbar-brand" href="index.php?dashboard" >Panel Mitra</a>


    </div><!-- navbar-header Ends -->

    <ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

    <li class="dropdown" ><!-- dropdown Starts -->

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

    <i class="fa fa-user" ></i>

    <?php echo $mitra_name; ?> <b class="caret" ></b>


    </a><!-- dropdown-toggle Ends -->

    <ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

    <li><!-- li Starts -->

    <a href="index.php?user_profile=<?php echo $mitra_id; ?>" >

    <i class="fa fa-fw fa-user" ></i> Profil


    </a>

    </li><!-- li Ends -->

    <li><!-- li Starts -->

    <a href="index.php?view_products" >

    <i class="fa fa-fw fa-envelope" ></i> Produk 

    <span class="badge" ><?php echo $count_products; ?></span>


    </a>

    </li><!-- li Ends -->

    <li><!-- li Starts -->

    <a href="index.php?view_customers" >

    <i class="fa fa-fw fa-gear" ></i> Customer

    <span class="badge" ><?php echo $count_customers; ?></span>


    </a>

    </li><!-- li Ends -->

    <li><!-- li Starts -->

    <a href="index.php?view_p_cats" >

    <i class="fa fa-fw fa-gear" ></i> Kategori Produk

    <span class="badge" ><?php echo $count_p_categories; ?></span>


    </a>

    </li><!-- li Ends -->

    <li class="divider"></li>

    <li><!-- li Starts -->

    <a href="logout.php">

    <i class="fa fa-fw fa-power-off"> </i> Log Out

    </a>

    </li><!-- li Ends -->

    </ul><!-- dropdown-menu Ends -->




    </li><!-- dropdown Ends -->


    </ul><!-- nav navbar-right top-nav Ends -->

    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

    <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

    <li><!-- li Starts -->

    <a href="index.php?dashboard">

    <i class="fa fa-fw fa-dashboard"></i> Dashboard

    </a>

    </li><!-- li Ends -->

    <li><!-- Products li Starts -->

    <a href="#" data-toggle="collapse" data-target="#products">

    <i class="fa fa-fw fa-table"></i> Produk

    <i class="fa fa-fw fa-caret-down"></i>


    </a>

    <ul id="products" class="collapse">

    <li>
    <a href="index.php?insert_product"> Memasukkan Produk </a>
    </li>

    <li>
    <a href="index.php?view_products"> Lihat Produk </a>
    </li>


    </ul>

    </li><!-- Products li Ends -->










    <li><!-- li Starts -->

    <a href="#" data-toggle="collapse" data-target="#p_cat">

    <i class="fa fa-fw fa-pencil"></i> Kategori Produk

    <i class="fa fa-fw fa-caret-down"></i>


    </a>

    <ul id="p_cat" class="collapse">

    <li>
    <a href="index.php?insert_p_cat"> Memasukkan Kategori Produk </a>
    </li>

    <li>
    <a href="index.php?view_p_cats"> Lihat Kategori Produk </a>
    </li>


    </ul>

    </li><!-- li Ends -->


    <li><!-- li Starts -->

    <a href="#" data-toggle="collapse" data-target="#cat">

    <i class="fa fa-fw fa-arrows-v"></i> Kategori

    <i class="fa fa-fw fa-caret-down"></i>

    </a>

    <ul id="cat" class="collapse">

    <li>
    <a href="index.php?insert_cat"> Memasukkan Kategori </a>
    </li>

    <li>
    <a href="index.php?view_cats"> Lihat Kategori </a>
    </li>


    </ul>

    </li><!-- li Ends -->
    <li><!-- Coupons Section li Starts -->

    <a href="#" data-toggle="collapse" data-target="#coupons"><!-- anchor Starts -->

    <i class="fa fa-fw fa-arrows-v"></i> Kupon

    <i class="fa fa-fw fa-caret-down"></i>

    </a><!-- anchor Ends -->

    <ul id="coupons" class="collapse"><!-- ul collapse Starts -->

    <li>
    <a href="index.php?insert_coupon"> Memasukkan Kupon </a>
    </li>

    <li>
    <a href="index.php?view_coupons"> Lihat Kupon </a>
    </li>

    </ul><!-- ul collapse Ends -->

    </li><!-- Coupons Section li Ends -->







    <li>

    <a href="index.php?view_customers">

    <i class="fa fa-fw fa-edit"></i> Lihat Customer

    </a>

    </li>



    <li>

    <a href="index.php?view_payments">

    <i class="fa fa-fw fa-pencil"></i> Lihat Pembayaran

    </a>

    </li>

    <li><!-- li Starts -->

    <a href="logout.php">

    <i class="fa fa-fw fa-power-off"></i> Log Out

    </a>

    <a href="admin/login.php">

    <i class="fa fa-fw fa-power-off"></i> Login as admin

    </a>
    </li><!-- li Ends -->

    </ul><!-- nav navbar-nav side-nav Ends -->

    </div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

    </nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

    <?php } ?>