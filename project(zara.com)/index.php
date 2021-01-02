<?php
include('config/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Zara Fashion</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     inserted     -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"/>
    
    <link href="assets/style.css" rel="stylesheet"/>
    <!--     inserted     -->

</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="index.php" class="navbar-brand" rel="tooltip" title="" data-placement="bottom" target="">
                    Zara Fashion
                </a>
               
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="pages/user_login_page.php" class="nav-link" href="javascript:void(0)">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/user_signup.php" class="nav-link" >
                            <i class="now-ui-icons education_paper"></i>
                            <p>Sign up</p>
                        </a>
                    </li>
					
                    <li class="nav-item">
                        <a class="nav-link" href="pages/products.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Trending Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" >
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Shopping Cart</p>
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
            <div class="page-header-image" data-parallax="true" style="background-image: url('https://previews.123rf.com/images/lenblr/lenblr1711/lenblr171100286/90105209-row-of-autumn-coats-hanging-on-rack-shopping-cloth-shop-clothing-store-female-collection-in-fashion-.jpg');">
            
                <div class="container">
                    <div class="content-center brand">
                       
                        <img src="data:image/png;base64,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" alt="Circle Image" class="rounded-circle">
                        <br><br>
                        <h3></h3>
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
                        <h2 class="title">Products</h2>
                        <div class="typography-line">
                            <p>
                            “Offer you premium collection of Cloth .
                            </p>
                        </div>
                        <br>

                        
                        <center>
                        <label><b>Search Anything: &nbsp</b></label>       
                                <form method="POST" action="index_search.php" >
                                    <input type="image" title="Search" src="assets/img/search.png" alt="Search" />
                                    <input type="text" name="search" class="search-query" placeholder="Enter product name">
                                </form>
                        </center>
                    </div>
                    <br><hr color="orange">

  <div class="tab-pane  active" id="">
    <ul class="thumbnails">
    <?php
    $query = "SELECT * FROM products ORDER BY prod_name ASC";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['prod_id'];
    
?>   
    <div class="row-sm-3">
        <div class="thumbnail">
            <?php if($res['prod_pic1'] != ""): ?>
            <img src="uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px">
            <?php else: ?>
            <img src="uploads/default.png" width="300px" height="200px">
            <?php endif; ?>
        <div class="caption">
          <h5><b><?php echo $res['prod_name'];?></b></h5>
          <h6><a class="btn btn-success btn-round" title="Click for more details!" href="pages/product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a><medium class="pull-right">Php<?php echo $res['prod_price']; ?></medium></h6>
        </div>

        </div>
      <hr color="orange">
      </div>
             
<?php }?> 

      </ul>
  </div>
        


    </div>     
</div>
        <footer class="footer" data-background-color="black">
            <div class="container">
               
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,Design By wTech G3.
                </div>
            </div>
        </footer>
    </div>
</body>

<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>




</html>