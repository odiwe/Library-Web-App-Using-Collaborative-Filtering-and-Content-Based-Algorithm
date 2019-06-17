<?php
/**
 * Created by PhpStorm.
 * User: ODIWE JOHN
 * Date: 3/27/2017
 * Time: 9:20 PM
 */
include 'connection.php';
include 'functions.php';
if(isset($_GET['book_id'])){
    $book = $_GET['book_id'];
}
if(isset($_GET['submit'])){
    $book_id = $_GET['book_id'];
    $rating = $_GET['rating'];
    if($rating>100){
        $error = "<div class='alert alert-danger'>Rating value should be between 0-100</div>";
    }else{
        $r6 = '';
        $select = "SELECT * FROM recommendation WHERE Prid='$book_id'";
        $select_conn=$conn->query($select);
        if($select_conn->num_rows>0){
            while($row=$select_conn->fetch_assoc()){
                $r6=$row['Rating'];
            }
            $r5 = calculate_rating($rating);
            $r7 = add_rating($r5,$r6);
            $get ="SELECT * FROM products WHERE id='$book_id'";
            $get_conn=$conn->query($get);
            $book_name='';
            while($bow=$get_conn->fetch_assoc()){
                $book_name=$bow['Name'];
            }
            $sql = "UPDATE recommendation SET Rating='$r7' WHERE Prid='$book_id'" ;
            $sql_conn = $conn->query($sql);
            if($sql_conn===true){
                $success="<div class='alert alert-success'>Rating successfully added</div>";
            }
        }else{
            $get ="SELECT * FROM products WHERE id='$book_id'";
            $get_conn=$conn->query($get);
            $book_name='';
            while($bow=$get_conn->fetch_assoc()){
                $book_name=$bow['Name'];
            }
            $r5 = calculate_rating($rating);
            $sql = "INSERT INTO recommendation(Name,Rating,Prid) VALUES ('$book_name','$r5','$book_id')";
            $sql_conn=$conn->query($sql);
            if($sql_conn===true){
                $success="<div class='alert alert-success'>Rating successfully added</div>";
            }
        }
    }
}
?>



<!DOCTYPE html>
<!-- saved from url=(0041)http://localhost:13026/Product/AddProduct -->
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - My ASP.NET Application</title>
    <link href="./Add Product - My ASP.NET Application_files/bootstrap.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/style.css" rel="stylesheet">

    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/B759F912-B020-A44D-BD66-71ADA867C7EE/main.js" charset="UTF-8"></script><script src="./Add Product - My ASP.NET Application_files/modernizr-2.6.2.js.download"></script>

    <link href="./Add Product - My ASP.NET Application_files/bookblock.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/bootstrap-slider.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/color.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/component.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/font-awesome.min.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/jquery.bxslider.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/jquery.countdown.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/magazine.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/owl.carousel.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/responsive.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/themetypo.css" rel="stylesheet">
    <link href="./Add Product - My ASP.NET Application_files/widget.css" rel="stylesheet">

    <script src="./Add Product - My ASP.NET Application_files/booklet-lib.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/bootstrap-slider.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/common.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/controls.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/jquery.bookblock.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/jquery.bxslider.min.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/marker.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/onion.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/jquerypp.custom.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/owl.carousel.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/util.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/waypoints.min.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/jquery.dlmenu.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/turn.html4.min.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/magazine.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/hash.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/jquery.countdown.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/map.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/functions.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/jquery.counterup.min.js.download"></script>
    <script src="./Add Product - My ASP.NET Application_files/googlemap.js.download"></script>

    <style>
        .kode_list_section:hover .kode_price_sec, .kode_list_section:hover .kode_try_wrap, .kode_price_sec h2, .kode_list_section:hover .kode_try_wrap a, .kode-navigation ul li::before, .buy-template .kode-btns a, .kode-service, .kode-service i, .kode-service p, .kode-service h3, .kode-service h3::before, .kode-service a.read-more, .kode-service h3 a, .best-seller-pro .kode-caption a.add-to-cart, .best-seller-pro .kode-caption, .bx-wrapper .bx-controls-direction a, .kode-blog-list, .kode-blog-list .blog-date, .gift-card-section .kode-gift ul li, .kode-package .package-content a.purchase, .kode-package, .package-price, .package-price small, .kode-newsletters .input-container button, .widget-categories ul li a, .widget-categories ul li::before, footer .widget-newletter button, .social-icon ul li a, .kode-author .kode-caption, .kode-author .kode-caption h4, .kode-author .kode-caption p, .banner-search button, .kode-blog-full h2, .kode-blog-full .kode-thumb .blog-btns, .kode-blog-full .kode-thumb img, .widget-newletter button, .kode-blog-full .kode-thumb .blog-btns ul li a, .widget-instagram ul li img, .widget-archive ul li a, .widget-archive ul li::before, .portfolio-btns ul li a, .kode-portfolio .portfolio-btns, .kode-portfolio .kode-thumb img, .kode-blog-detail .blog-meta ul li a, .comment-form button, .kode-single-blog .kode-text .kode-date, .kode-single-blog, .kode-single-blog figure img, .kode-single-blog figure a::before, .kode-single-sidebar figure img, .kode-single-sidebar figure a::before, .kode-single-sidebar .kode-date, .kode-author-2 img, .kode-author-2::before, .kode-service-2 i, .kd-tab-2 .bx-wrapper .bx-controls-direction a, .kode-banner .kode-caption-2 .caption-btns a, .kode-service-3 i, .kode-service-3 a, .lib-categories-section .best-seller-pro, .lib-papular-books .nav-tabs > li > a, .lib-blog-post, .lib-blog-post .kode-text a.more, .lib-blog-post .kode-thumb img, .lib-blog-post .lib-btns, .lib-testimonial-content::after, .lib-authors .kode-caption, .lib-authors img, .lib-authors .social-icons, .kode-service-2, .kode-comments ul li .kode-text a.reply, .lib-ebook a.more, .lib-ebook i, .lib-qualities ul li i, .lib-blog-2 .kode-text a.more, .kode-blog-date, .lib-blog-2 .kode-thumb img, .lib-gallery img, .lib-gallery .caption, .product-review-tabs .nav-tabs li a, .lib-event-listing .kode-thumb, .lib-event-listing .kode-thumb img, .header-3 .kode-navigation ul li::before, .header-3 .kode-navigation ul li::after, .widget-flickr ul li::before, .widget-flickr ul li img, .kode-navigation ul ul, .kode-navigation ul li a, .post-next-previous a, .best-seller-pro::before, .gift-card-section .kode-gift ul li::before, #filterable-item-filter-1 li a, .kode-best-pro-seller .kode-thumb img, .kode-best-pro-seller .kode-thumb::before, .kode-service-3, .reg-btn, .product-review-tabs .product-tags a, .event-gallery .grid-item a::before, .kode-blog-list2 .kode-thumb img, .kode-blog-list2 .buy-ticket, .books-listing-3 .kode-caption a, .books-listing-3, .books-listing-3 .kode-caption, .books-listing-4 a.add-to-cart, .books-listing-4 h3, .books-listing-4 h3 a, .books-listing-4 .kode-thumb a::before, .books-listing-4, .kd-list3 li a, .kode-team-listing .kode-thumb img, .our-libraries .kode-thumb, .our-libraries .kode-thumb img, .kode-facts .nav-tabs > li > a, .widget-price-filter a.filter, .widget-new-arrival ul li, .widget-new-arrival ul li .kode-thumb img, .lib-book-detail a.add-to-cart, .bb-custom-wrapper > nav a, .lib-blog-2, .lib-event-listing, .contact-box .social-icon ul li a, .book-released .cart-btns a, .book-released, .book-released .cart-btns, .kode-certificate, .kode-blog-list a.more::before, .kode-blog-list a.more, .kode-banner .input-container button, .kode-banner .input-container button i, .kd-tab-2 .nav-tabs > li > a, .kd-tab-2 .nav-tabs > li > a::before, .kode-video-section-2 a.more, .kode-video a::before, .kode-video a::after, .comment-form textarea, .comment-form input[type="text"], .kode-certificate .kode-thumb a::before, .lib-call-to-action a.more, .kode-uptodate .social-icons ul li a, .kode-recent-posts .kode-thumb img, .search-section .form-container button, .lib-event-listing .lib-event-captions a.register, .kode-event-detail-thumb .kode-caption a.reg, .kode-event-detail a.book-now, .kode-blog-list2, .kode-newsletters-2 button, .lib-blog-post .kode-text a.more, .kode-uptodate .input-container button, .search-section .form-container input, .widget-latest-news .kode-thumb, .widget-latest-news .kode-thumb img, .error-404 a.go-back {
            transition: all 0.3s ease-in-out;
        }

        .kd-list3 li a {
            color: rgb(102, 102, 102);
            display: inline-block;
            text-decoration: none;
        }

        .kode-inner-banner {
            float: left;
            width: 100%;
            background-image: url(../images/blog-single7.png);
            background-size: cover;
        }


        .lib-contact-section .kode-thumb {
            position: absolute;
            left: 0px;
            top: 0px;
            height: 100%;
            background-image: url(~/images/location-image.jpg);
            background-size: cover;
            width: 50%;
            background-position: center center;
        }
    </style>

    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/12a/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/12a/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/22/12a/stats.js"></script></head>
<body class="loaded">

<div class="">


    <!--HEADER START-->
    <header class="header-3">
        <div class="container">
            <div class="logo-container">
                <div class="row">
                    <div class="col-md-3">
                        <!--LOGO START-->
                        <div class="logo">
                            <a href="index.php"><img src="logo-2.png" alt=""></a>
                        </div>
                        <!--LOGO END-->
                    </div>
                    <div class="col-md-9">
                        <div class="top-strip">
                            <div class="pull-left">
                                <p>Welcome Admin</p>
                            </div>
                        </div>
                        <div class="kode-navigation">
                            <ul>
                                <li>
                                    <a href="books3-sidebar.php">BOOKS</a>
                                </li>
                            </ul>
                        </div>
                        <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="kode-inner-banner" style="background-image:url(images/video-bg.png)">
        <div class="kode-page-heading">
            <h2>DashBroad</h2>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Ratings</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->

    <div class="container">
        <br>
        <h2 class="text-center">Ratings</h2>


        <form action="books-rating.php" enctype="multipart/form-data" method="get" novalidate>
            <div class="form-horizontal">
                <hr>
                <?php
                if(isset($success)){
                    echo $success;
                }
                if(isset($error)){
                    echo $error;
                }
                ?>
                <input class="hidden" type="text" name="book_id" value="<?php echo $book?>">

                <div class="form-group">
                    <label class="control-label col-md-2" for="rating">rating</label>
                    <div class="col-md-4">
                        <input class="text-box single-line" id="rating" name="rating" type="text" value="" placeholder="rating is in percentage">
                        <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <input type="submit" value="Rate" name="submit" class="reg-btn">
                    </div>
                </div>
            </>
        </form>

    </div>

    <!--CONTENT END-->
    <footer class="footer-2">
        <div class="container-fluid">
            <div class="lib-copyrights">
                <p>Copyrights © 2015-16 KodeForest. All rights reserved</p>
            </div>
        </div>
    </footer>
</div>

<script src="./Add Product - My ASP.NET Application_files/jquery-1.10.2.js.download"></script>

<script src="./Add Product - My ASP.NET Application_files/bootstrap.js.download"></script>
<script src="./Add Product - My ASP.NET Application_files/respond.js.download"></script>


<script src="./Add Product - My ASP.NET Application_files/jquery.validate.js.download"></script>
<script src="./Add Product - My ASP.NET Application_files/jquery.validate.unobtrusive.js.download"></script>



<!-- Visual Studio Browser Link -->
<script type="application/json" id="__browserLink_initializationData">
    {"appName":"Chrome","requestId":"cfe04a7816ed43178c3b275f0da80f59"}
</script>
<script type="text/javascript" src="./Add Product - My ASP.NET Application_files/browserLink" async="async"></script>
<!-- End Browser Link -->



</body></html>

