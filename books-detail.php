<?php
/**
 * Created by PhpStorm.
 * User: ODIWE JOHN
 * Date: 3/27/2017
 * Time: 3:14 PM
 */

if(isset($_GET['book_id'])){
    $book = $_GET['book_id'];
    include 'connection.php';
    $pic='';
    $name='';
    $description='';
    $price='';
    $category='';
    $author='';
    $get = "SELECT * FROM products WHERE id='$book'";
    $get_conn = $conn->query($get);
    while($row=$get_conn->fetch_assoc()){
            $pic = $row['Pix'];
            $name=$row['Name'];
            $description=$row['Details'];
            $price = $row['Price'];
            $category=$row['Category'];
            $author=$row['author'];
    }
    $get2="SELECT * FROM recommendation ORDER BY Rating DESC ";
    $get2_conn = $conn->query($get2);
    while($sow=$get2_conn->fetch_assoc()){

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodeforest.net/html/books/library/books-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 12:50:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Book Library - Book Guide Author, Publication and Store</title>
    <!-- CUSTOM STYLE -->
    <link href="style.css" rel="stylesheet">
    <!-- THEME TYPO -->
    <link href="css/themetypo.css" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- COLOR FILE -->
    <link href="css/color.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- BX SLIDER -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <!-- Boostrap Slider -->
    <link href="css/bootstrap-slider.css" rel="stylesheet">
    <!-- Widgets -->
    <link href="css/widget.css" rel="stylesheet">
    <!-- Owl Carusel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Component -->
    <link href="js/dl-menu/component.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<!--WRAPPER START-->
<div class="wrapper kode-header-class-3">
    <!--HEADER START-->
    <header class="header-3">
        <div class="container">
            <div class="logo-container">
                <div class="row">
                    <div class="col-md-3">
                        <!--LOGO START-->
                        <div class="logo">
                            <a href="index.php"><img src="images/logo-2.png" alt=""></a>
                        </div>
                        <!--LOGO END-->
                    </div>
                    <div class="col-md-9">
                        <div class="top-strip">
                            <div class="pull-left">
                                <p>Welcome to Library theme</p>
                            </div>
                            <div class="social-icon">
                                <a href="mailto:info@library-theme.com" class="pull-left">info@library-theme.com</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="kode-navigation">
                            <ul>
                                <li><a href="index.php">Home</a>
                                </li>

                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="books.html">Our Books</a>
                                </li>
                                
                                <li class="last"><a href="contact-us.html">Contact Us</a></li>
                                <li> <a href="logout.php">Logout</a> </li>
                            </ul>
                        </div>
                        <div id="kode-responsive-navigation" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li class="menu-item kode-parent-menu"><a href="index.php">Home</a>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="menu-item kode-parent-menu"><a href="books3-sidebar.php">Our Books</a>
                                </li>
                               
                                <li class="last"><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
            <h2>Product Detail</h2>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Product Detail</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->
    <!-- <!--  --> -->
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                   <!--NEW ARRIVAL WIDGET START-->
                    <div class="widget widget-new-arrival">
                        <h2>New Arrival</h2>
                        <ul>
                            <li>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival1.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>Don Quixote</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival2.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>Big Little Lies</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival3.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>Doctor Who</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--NEW ARRIVAL WIDGET END-->
                    <!--CATEGORY WIDGET START-->
                    <div class="widget widget-categories">
                        <h2>Categories</h2>
                        <ul>
                             <li><a href="#">Educational</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Religion</a></li>
                            <li><a href="#">Fiction</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Romance</a></li>
                            <li><a href="#">Business</a></li>
                        </ul>
                    </div>
                    <!--CATEGORY WIDGET END-->
                </div>
                <div class="col-md-9">
                    <!--BOOK DETAIL START-->
                    <div class="lib-book-detail">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="kode-thumb">
                                    <img src="<?php echo $pic ;?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="kode-text">
                                    <h2><?php echo $name; ?></h2>

                                    <div class="product-price">
                                        <h4><?php echo $price; ?></h4>
                                        <p>Author : <span class="color"><?php echo $author ;?></span></p>
                                        <a  href="books-rating.php?book_id=<?php echo $book?>" class="filter">Rate this book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BOOK DETAIL END-->
                    <!--PRODUCT REVIEW TABS START-->
                    <div class="product-review-tabs">
                        <!--NAV TABS START-->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Description " aria-controls="Description" role="tab" data-toggle="tab">Description </a></li>
                        </ul>
                        <!--NAV TABS END-->
                        <!--TAB PANEL START-->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Description">
                                <?php echo $description ; ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <div class="kode-comments">
                                    <ul>
                                        <li>
                                            <div class="kode-thumb">
                                                <a href="#"><img alt="" src="images/author14.png"></a>
                                            </div>
                                            <div class="kode-text">
                                                <h4>Saul Bellow</h4>
                                                <p class="designation">JUNE 20, 2015</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                <a class="reply" href="#">Reply</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="kode-thumb">
                                                <a href="#"><img alt="" src="images/author14.png"></a>
                                            </div>
                                            <div class="kode-text">
                                                <h4>Saul Bellow</h4>
                                                <p class="designation">JUNE 20, 2015</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                <a class="reply" href="#">Reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tags">
                                <div class="product-tags">
                                    <a href="#">habemus</a>
                                    <a href="#">accusam</a>
                                    <a href="#">vero</a>
                                    <a href="#">dolor</a>
                                    <a href="#">justo</a>
                                    <a href="#">diam</a>
                                    <a href="#">nonumy</a>
                                    <a href="#">consetetur</a>
                                    <a href="#">erat</a>
                                    <a href="#">sanctus</a>
                                    <a href="#">gubergren</a>
                                    <a href="#">eirmod</a>
                                    <a href="#">habemus</a>
                                    <a href="#">accusam</a>
                                    <a href="#">vero</a>
                                    <a href="#">dolor</a>
                                    <a href="#">justo</a>
                                    <a href="#">diam</a>
                                    <a href="#">nonumy</a>
                                    <a href="#">consetetur</a>
                                    <a href="#">erat</a>
                                    <a href="#">sanctus</a>
                                    <a href="#">gubergren</a>
                                    <a href="#">eirmod</a>
                                    <a href="#">habemus</a>
                                    <a href="#">accusam</a>
                                    <a href="#">vero</a>
                                    <a href="#">dolor</a>
                                    <a href="#">justo</a>
                                    <a href="#">diam</a>
                                    <a href="#">nonumy</a>
                                    <a href="#">consetetur</a>
                                    <a href="#">erat</a>
                                    <a href="#">sanctus</a>
                                    <a href="#">gubergren</a>
                                    <a href="#">eirmod</a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="CustomTab">
                                <p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                            </div>
                        </div>
                        <!--TAB PANEL END-->
                    </div>
                    <!--PRODUCT REVIEW TABS END-->
                    <!--RELATED PRODUCTS START-->
                    <div class="lib-related-products">
                        <h2>Related Books</h2>
                        <div class="row">
                            <?php
                            $select = "SELECT * FROM products WHERE Category='$category' ORDER BY id DESC LIMIT 3 ";
                            $select_conn= $conn->query($select);
                            if($select_conn->num_rows>0){
                            while($bow=$select_conn->fetch_assoc()){

                            echo "	<div class='col-md-4 col-sm-6'>
                                <div class='best-seller-pro'>
                                    <figure>
                                        <img src='{$bow['Pix']}' alt=''>
                                    </figure>
                                    <div class='kode-text'>
                                        <h3><a href='#'>{$bow['Name']}</a></h3>
                                    </div>
                                    <div class='kode-caption'>
                                        <h3>{$bow['Category']}</h3>
                                        <p>{$bow['author']}</p>
                                        <p class='price'>{$bow['Price']}</p>
                                        <a href='books-detail.php?book_id={$bow['id']}' class='add-to-cart'>View</a>
                                    </div>
                                    </div>
                                    </div>
                                    ";

                                    }
                            }else{
                                  echo "no such category in the database";
                            }
                            ?>
                        </div>
                    </div>
                    <!--RELATED PRODUCTS END-->
                    <div class="lib-related-products">
                        <h2>RECOMMENDATION BASED ON RATINGS</h2>
                        <div class="row">
                            <?php
                            $select = "SELECT * FROM recommendation ORDER BY Rating DESC LIMIT 3 ";
                            $select_conn= $conn->query($select);
                            if($select_conn->num_rows>0){
                                while($sow=$select_conn->fetch_assoc()){
                                    $set=$sow['Prid'];
                                    $set_1 = "SELECT * FROM products WHERE id='$set'";
                                    $set_1_conn=$conn->query($set_1);
                                    while($dow=$set_1_conn->fetch_assoc()){
                                        echo "	<div class='col-md-4 col-sm-6'>
                                    <div class='best-seller-pro'>
                                    <figure>
                                        <img src='{$dow['Pix']}' alt=''>
                                    </figure>
                                    <div class='kode-text'>
                                        <h3><a href='#'>{$dow['Name']}</a></h3>
                                    </div>
                                    <div class='kode-caption'>
                                        <h3>{$dow['Category']}</h3>
                                        <p>{$dow['author']}</p>
                                        <p class='price'>{$dow['Price']}</p>
                                        <a href='books-detail.php?book_id={$dow['id']}' class='add-to-cart'>View</a>
                                    </div>
                                    </div>
                                    </div>
                                    ";
                                    }


                                }
                            }else{
                                echo "no Recomendation in database";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="kode-uptodate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>stay up-to-dated</h2>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="input-container">
                                <input type="text" placeholder="Your E-mail Address" id="sub-2">
                                <button>Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTENT END-->
    <footer class="footer-3">
        <div class="container">
            <div class="row">
                <!--CATEGORY WIDGET START-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-categories">
                        <h2>Information</h2>
                        <ul>
                            <li><a href="#">Specials</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Best sellers</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <!--CATEGORY WIDGET END-->
                <!--LATEST NEWS WIDGET START-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-latest-news">
                        <h2>Lates News</h2>
                        <ul>
                            <li>
                                <div class="kode-thumb"><a href="#"><img src="images/latest-news.png" alt=""></a></div>
                                <div class="kode-text">
                                    <p>Phasellus risusa Aliowm</p>
                                    <p>14 December 2015</p>
                                </div>
                            </li>
                            <li>
                                <div class="kode-thumb"><a href="#"><img src="images/latest-news.png" alt=""></a></div>
                                <div class="kode-text">
                                    <p>Phasellus risusa Aliowm</p>
                                    <p>14 December 2015</p>
                                </div>
                            </li>
                            <li>
                                <div class="kode-thumb"><a href="#"><img src="images/latest-news.png" alt=""></a></div>
                                <div class="kode-text">
                                    <p>Phasellus risusa Aliowm</p>
                                    <p>14 December 2015</p>
                                </div>
                            </li>
                            <li>
                                <div class="kode-thumb"><a href="#"><img src="images/latest-news.png" alt=""></a></div>
                                <div class="kode-text">
                                    <p>Phasellus risusa Aliowm</p>
                                    <p>14 December 2015</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--LATEST NEWS WIDGET END-->
                <!--TWITTER WIDGET START-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-flickr">
                        <h2>Flickr Gallery </h2>
                        <ul>
                            <li>
                                <a href="#"><img src="images/gallery1.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/gallery2.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/gallery3.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/gallery4.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/gallery5.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/gallery6.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/gallery4.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/gallery5.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/gallery6.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--TWITTER WIDGET END-->

                <!--NEWSLETTER START-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-contact-info">
                        <h2>get in touch</h2>
                        <ul>
                            <li>
                                <i class="fa fa-paper-plane"></i>
                                <div class="kode-text">
                                    <h4>Address</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div class="kode-text">
                                    <h4>phone Number</h4>
                                    <p>+55(62) 55258-4570</p>
                                    <p>+55(62) 55258-4570</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <div class="kode-text">
                                    <h4>Email Address</h4>
                                    <a href="#">Info@thelibrary.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--NEWSLETTER START END-->
            </div>
        </div>
    </footer>
    <div class="copyrights">
        <div class="container">
            <p>Copyrights © 2015-16 KodeForest. All rights reserved</p>
            <div class="cards"><img src="images/cards.png" alt=""></div>
        </div>
    </div>
</div>
<!--WRAPPER END-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/dl-menu/modernizr.custom.js"></script>
<script src="js/dl-menu/jquery.dlmenu.js"></script>
<script src="js/functions.js"></script>
</body>

<!-- Mirrored from kodeforest.net/html/books/library/books-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 12:51:05 GMT -->
</html>
