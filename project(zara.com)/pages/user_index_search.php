<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Zara Fashion</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     inserted     -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet"/>
    
    <link href="../assets/style.css" rel="stylesheet"/>
    <!--     inserted     -->

</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="user_index.php" class="navbar-brand" rel="tooltip" title="" data-placement="bottom" target="">
                    Zara Fashion
                </a>
                
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>
                                <?php
                                 include('../config/dbconn.php');
                                 $query=mysqli_query($dbconn,"SELECT * FROM `users` WHERE user_id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 echo ''.$row['firstname'].'';
                                ?>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_products.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Explore Products</p>
                        </a>
                    </li>
                   
                    
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/ironman.jpg');">
            
                <div class="container">
                    <div class="content-center brand">
                        <img src="../assets/img/elogo.png" alt="Circle Image" class="rounded-circle">
                        <br><br>
                        <h3>Collect Your Desire Collecion</h3>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <br>
                    <div class="col-md-12">
                        <h2 class="title">Explore products</h2>
                        <div class="typography-line">
                           
                        </div>
                        <br>

                        
                        <center>
                        <label><b>Search Product: &nbsp</b></label>       
                                <form method="POST" action="user_index_search.php" >
                                    <input type="image" title="Search" src="../assets/img/search.png" alt="Search" />
                                    <input type="text" name="search" class="search-query" placeholder="Enter product name">
                                </form>
                        </center>
                    </div>
                    <br><hr color="orange">

                    <div class="tab-pane  active" id="">
                        <ul class="thumbnails">
                            <?php
                            if (isset($_POST['search'])){
                                                            
                            $search=$_POST['search'];
                                                                
                            $query="SELECT * FROM products WHERE category LIKE '%$search%' OR prod_name LIKE '%$search%' OR prod_desc LIKE '%$search%'";
                            $result = mysqli_query($dbconn,$query);
                            while($res=mysqli_fetch_array($result)){
                                $prod_id=$res['prod_id'];
                            ?> 

                            <div class="row-sm-3">
                                <div class="thumbnail">
                                    <?php if($res['prod_pic1'] != ""): ?>
                                    <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px">
                                    <?php else: ?>
                                    <img src="../uploads/default.png" width="300px" height="200px">
                                    <?php endif; ?>
                                <div class="caption">
                                  <h5><b><?php echo $res['prod_name'];?></b></h5>
                                  <h6><a class="btn btn-success btn-round" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a><medium class="pull-right">Php<?php echo $res['prod_price']; ?></medium></h6>
                                </div>

                                </div>
                              <hr color="orange">
                              </div>
                                     
                                <?php }?> 
                            <?php }?> 

                        </ul>
                    </div>




        </div>
    </div>     
</div>
        <footer class="footer" data-background-color="black">
            <div class="container">
                
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by wTech G3.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>


</html>