<?php
include('session.php');
if (!isset($_SESSION['login_user'])) {
    $url = "user_login.php";
    $cart = 0;
} else
    $url = "profile.php";

$sql = "SELECT * FROM 	customer  where username='$login_session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id         = $row['id'];
        $user_name       = $row['name'];
        $email      = $row['username'];
        $password   = $row['password'];
        $phone      = $row['phone'];
        $address    = $row['address'];
    }
}
$cart = 0;
$sql = "SELECT * FROM  orderlist where ((c_email='$login_session')&&(status='cart'))";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $cart += 1;
    }
}


?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/home15-funiture.html   11 Nov 2019 12:23:42 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Family Mall</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" /> -->
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="template-index home15-funiture-template belle">

    <!--<div id="pre-loader">-->
    <!--    <img src="assets/images/loader.gif" alt="Loading..." />-->
    <!--</div>-->
    <div class="pageWrapper">
        <!--Promotion Bar-->
        <div class="notification-bar mobilehide">
            <a href="#" class="notification-bar__message">🍦 Summer sale treat: up to 30% + 15% extra off premium
                styles. Your code: SUNSEEKER15 🍦</a>
            <span class="close-announcement">×</span>
        </div>
        <!--End Promotion Bar-->
        <!--Search Form Drawer-->
        <div class="search mobile">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Header-->
        <div class="header-wrap animated d-flex home15-funiture-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-8 d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                            <i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                    <!--Search Icon-->
                    <div class="col-4 col-sm-3 col-md-4 col-lg-4 d-none d-lg-block">
                        <div class="site-header__search text-left mobile">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                        <div class="custom_wmk">
                            <a href="women.php" class="btn active">Women</a>
                            <a href="men.php" class="btn">Men</a>
                            <a href="kids.php" class="btn">Kids & Teens</a>
                        </div>
                    </div>
                    <!--End Search Icon-->
                    <!--Desktop Logo-->
                    <div class="logo col-4 col-sm-6 col-md-4 col-lg-4 text-center">
                        <a href="index.php">
                            <!--<img src="assets/images/logo-text.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />-->
                            <h1>Family Malls</h1>
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-5 col-sm-3 col-md-4 col-lg-4 custom_header_cart_section">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" style="outline: none;"><i class="fa-solid fa-user custom_header_user"></i></a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="margin-right: -7rem; margin-top: 6rem;">
                                <div class="modal-content" style="width: 70%;">
                                    <div class="modal-body">
                                        <!-- <a href="register.php" class="btn btn-secondary btn--large ml-4">Register</a> -->
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <a href="<?php echo $url ?>" class="btn btn-secondary btn--large" style="width: 100%;">Log IN</a>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                                <p><a href="register.php" style="width: 100%;">Register Now </a> - It only takes a minute.</p>
                                            </div>
                                            <hr>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <a href="<?php echo $url ?>" style="width: 100%;">Your account</a>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <a href="orders.php" style="width: 100%;">Orders</a>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <a href="return_item.php" style="width: 100%;">Return an item</a>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <a href="contact-us.php" style="width: 100%;">Help and contact</a>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <a href="logout.php" style="width: 100%;">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="wishlist.php"><i class="fa-solid fa-heart custom_header_user" style="margin-left: 0px;"></i></a>

                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php echo $cart ?></span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <?php $sql = "SELECT * FROM  orderlist where ((c_email='$login_session')&&(status='cart'))";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $price += $row['p_price']; ?>

                                            <li class="item">
                                                <a class="product-image" href="#">
                                                    <img src="vendor/assets/image/<?php echo $row['p_image'] ?>" alt="3/4 Sleeve Kimono Dress" title="" />
                                                </a>
                                                <div class="product-details">
                                                    <a href="delete_cart.php?id=<?php echo $row['id'] ?>" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                    <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                    <a class="pName" href="cart.html"><?php echo $row['p_name'] ?></a>


                                                    <div class="priceRow">
                                                        <div class="product-price">
                                                            <span class="money"><?php echo $row['p_price'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    <?php }
                                    } ?>

                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">BDT <?php echo $price ?>/-</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="cart.php" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="cart.php" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Minicart Popup-->
                        </div>
                        <!--Mobile Search-->
                        <div class="site-header__search d-block d-lg-none">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                        <!--End Mobile Search-->
                    </div>
                </div>
                <!--Desktop Menu-->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-11 col-lg-11">
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium hidearrow" style="margin: 0;">
                                <li class="lvl1 parent megamenu"><a href="new.php">New <i class="anm anm-angle-down-l"></i></a>
                                    <?php
                                    $sql = "SELECT * FROM 	category where name!='New' order by id asc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                    ?>
                                <li class="lvl1 parent megamenu"><a href="category_products.php?name=<?php echo $row['name'] ?>"><?php echo $row['name'] ?> <i class="anm anm-angle-down-l"></i></a>
                                    <!--<div class="megamenu style2">-->
                                    <!--    <ul class="grid mmWrapper">-->
                                    <!--        <li class="grid__item one-whole">-->
                                    <!--            <ul class="grid">-->
                                    <!--                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New this week</a>-->
                                    <!--                    <ul class="subLinks">-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Accessories</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Clothng</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Designer</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Shoes</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sport</a></li>-->
                                    <!--                    </ul>-->
                                    <!--                </li>-->
                                    <!--                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New this week</a>-->
                                    <!--                    <ul class="subLinks">-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Accessories</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Clothng</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Designer</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Shoes</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sport</a></li>-->
                                    <!--                    </ul>-->
                                    <!--                </li>-->
                                    <!--                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New this week</a>-->
                                    <!--                    <ul class="subLinks">-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Accessories</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Clothng</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Designer</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Shoes</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sport</a></li>-->
                                    <!--                    </ul>-->
                                    <!--                </li>-->
                                    <!--                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New this week</a>-->
                                    <!--                    <ul class="subLinks">-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Accessories</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Clothng</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Designer</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Shoes</a></li>-->
                                    <!--                        <li class="lvl-2"><a href="#" class="site-nav lvl-2">Sport</a></li>-->
                                    <!--                    </ul>-->
                                    <!--                </li>-->
                                    <!--            </ul>-->
                                    <!--        </li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                </li>
                        <?php }
                                    } ?>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-12 col-sm-12 col-md-1 col-lg-1 desktop">
                        <div class="site-header__search text-left">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                    </div>
                    <!--Search Form Drawer-->
                    <div class="search desktop">
                        <div class="search__form">
                            <form class="search-bar__form" action="#">
                                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                                <input class="search__input" type="search" name="q" value="" placeholder="Search" aria-label="Search" autocomplete="off">
                            </form>
                            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
                        </div>
                    </div>
                    <!--End Search Form Drawer-->
                </div>
                <!--End Desktop Menu-->
            </div>
        </div>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <!-- <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div> -->
            <!--Top Header-->
            <div class="top-header mobile">
                <div class="container-fluid">
                    <div class="row mt-2 mb-2">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 custom_top_header_a">
                            <a href="#" class="btn">Women</a>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 custom_top_header_a">
                            <a href="#" class="btn">Men</a>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 custom_top_header_a">
                            <a href="#" class="btn">Kids</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Top Header-->
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="index.html">Get the look <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">One<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories</a></li>
                                <li><a href="#" class="site-nav">Clothng</a></li>
                                <li><a href="#" class="site-nav">Designer</a></li>
                                <li><a href="#" class="site-nav">Shoes</a></li>
                                <li><a href="#" class="site-nav">Sport</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Two<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories</a></li>
                                <li><a href="#" class="site-nav">Clothng</a></li>
                                <li><a href="#" class="site-nav">Designer</a></li>
                                <li><a href="#" class="site-nav">Shoes</a></li>
                                <li><a href="#" class="site-nav">Sport</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Three<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories</a></li>
                                <li><a href="#" class="site-nav">Clothng</a></li>
                                <li><a href="#" class="site-nav">Designer</a></li>
                                <li><a href="#" class="site-nav">Shoes</a></li>
                                <li><a href="#" class="site-nav">Sport</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Four<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories</a></li>
                                <li><a href="#" class="site-nav">Clothng</a></li>
                                <li><a href="#" class="site-nav">Designer</a></li>
                                <li><a href="#" class="site-nav">Shoes</a></li>
                                <li><a href="#" class="site-nav">Sport</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="index.html">Get the look <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">One<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories</a></li>
                                <li><a href="#" class="site-nav">Clothng</a></li>
                                <li><a href="#" class="site-nav">Designer</a></li>
                                <li><a href="#" class="site-nav">Shoes</a></li>
                                <li><a href="#" class="site-nav">Sport</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Two<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories</a></li>
                                <li><a href="#" class="site-nav">Clothng</a></li>
                                <li><a href="#" class="site-nav">Designer</a></li>
                                <li><a href="#" class="site-nav">Shoes</a></li>
                                <li><a href="#" class="site-nav">Sport</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Three<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories</a></li>
                                <li><a href="#" class="site-nav">Clothng</a></li>
                                <li><a href="#" class="site-nav">Designer</a></li>
                                <li><a href="#" class="site-nav">Shoes</a></li>
                                <li><a href="#" class="site-nav">Sport</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Four<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories</a></li>
                                <li><a href="#" class="site-nav">Clothng</a></li>
                                <li><a href="#" class="site-nav">Designer</a></li>
                                <li><a href="#" class="site-nav">Shoes</a></li>
                                <li><a href="#" class="site-nav">Sport</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->