<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php';
?>

<!--Body Content-->
<div id="page-content">






    <!--Blast from the past-->
    <?php
    $sql = "SELECT * FROM 	category WHERE men='yes' order by id asc Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];
    ?>
            <div class="slideshow mt-5" style="background-color: #43a0c2;">
                <div class="container">
                    <div class="row custom_slideshow_row">

                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%"><!-- banner Image-->
                        </div>


                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #92c8dc; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">

                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>

                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="vendor/assets/image/<?php echo $row['image'] ?>" src="vendor/assets/image/<?php echo $row['image'] ?>" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>

                        <?php }
                        } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Summer denim-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category  where ((id=$id)&&(men='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #f2da3c;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                                <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #faefad; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">




                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="vendor/assets/image/<?php echo $row['image'] ?>" src="vendor/assets/image/<?php echo $row['image'] ?>" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Summer Blast-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(men='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #58cefd;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>



    <!--This just in-->
    <!--<div class="slideshow mt-5" style="background-color: #58cefd;">-->
    <!--    <div class="container">-->
    <!--        <div class="row custom_slideshow_row">-->
    <!--            <div class="col-12 col-sm-12 col-md-5 col-lg-5">-->
    <!--                <h3 style="color: black;">This just in</h3>-->
    <!--                <h4 style="color: black;">A day at the beach</h4>-->
    <!--                <p style="color: black;">Thoughtful swimwear, sandals, accessories and more for a salty and sandy summertime.</p>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">-->
    <!--                        <a href="#" style="color: black;">Shop now <i class="fa-solid fa-right-long"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">-->
    <!--                <img src="assets/images/new/men2.webp" alt="" width="100%">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--Summer Blast-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(men='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #f16027;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>

    <!--Gift Cards-->
    <!--<div class="slideshow mt-5" style="background-color: #f16027;">-->
    <!--    <div class="container">-->
    <!--        <div class="row custom_slideshow_row">-->
    <!--            <div class="col-12 col-sm-12 col-md-5 col-lg-5">-->
    <!--                <h3 style="color: black;">Gift Cards</h3>-->
    <!--                <h4 style="color: black;">A day at the beach</h4>-->
    <!--                <p style="color: black;">Thoughtful swimwear, sandals, accessories and more for a salty and sandy summertime.</p>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">-->
    <!--                        <a href="#" style="color: black;">Shop now <i class="fa-solid fa-right-long"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">-->
    <!--                <img src="assets/images/new/men2.webp" alt="" width="100%">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


    <!--Summer denim-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(men='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #4d96dc;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #faefad; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">




                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Summer denim-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(men='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #3e74b2;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #faefad; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">




                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image"><!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php';
?>

<!--Body Content-->
<div id="page-content">



    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section">
        <div class="home-slideshow">
            <?php
            $sql = "SELECT * FROM 	slider  order by id desc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $category = $row['name'];
            ?>
                    <div class="slide">
                        <div class="blur-up lazyload">
                            <img class="blur-up lazyload" data-src="admin/assets/image/<?php echo $row['image'] ?>" src="admin/assets/image/<?php echo $row['image'] ?>" alt="Shop Our New Collection" title="Shop Our New Collection" style="height: 25rem;" />
                            <div class="slideshow__text-wrap slideshow__overlay classic middle">
                                <div class="slideshow__text-content middle">
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
    <!--End Home slider-->



    <!--Blast from the past-->
    <?php
    $sql = "SELECT * FROM 	category WHERE kids='yes' order by id asc Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];
    ?>
            <div class="slideshow mt-5" style="background-color: #43a0c2;">
                <div class="container">
                    <div class="row custom_slideshow_row">

                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%"><!-- banner Image-->
                        </div>


                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #92c8dc; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">

                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>

                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="vendor/assets/image/<?php echo $row['image'] ?>" src="vendor/assets/image/<?php echo $row['image'] ?>" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>

                        <?php }
                        } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Summer denim-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category  where ((id=$id)&&(kids='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #f2da3c;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                                <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #faefad; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">




                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="vendor/assets/image/<?php echo $row['image'] ?>" src="vendor/assets/image/<?php echo $row['image'] ?>" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Summer Blast-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(kids='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #58cefd;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>



    <!--This just in-->
    <!--<div class="slideshow mt-5" style="background-color: #58cefd;">-->
    <!--    <div class="container">-->
    <!--        <div class="row custom_slideshow_row">-->
    <!--            <div class="col-12 col-sm-12 col-md-5 col-lg-5">-->
    <!--                <h3 style="color: black;">This just in</h3>-->
    <!--                <h4 style="color: black;">A day at the beach</h4>-->
    <!--                <p style="color: black;">Thoughtful swimwear, sandals, accessories and more for a salty and sandy summertime.</p>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">-->
    <!--                        <a href="#" style="color: black;">Shop now <i class="fa-solid fa-right-long"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">-->
    <!--                <img src="assets/images/new/men2.webp" alt="" width="100%">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--Summer Blast-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(kids='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #f16027;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>

    <!--Gift Cards-->
    <!--<div class="slideshow mt-5" style="background-color: #f16027;">-->
    <!--    <div class="container">-->
    <!--        <div class="row custom_slideshow_row">-->
    <!--            <div class="col-12 col-sm-12 col-md-5 col-lg-5">-->
    <!--                <h3 style="color: black;">Gift Cards</h3>-->
    <!--                <h4 style="color: black;">A day at the beach</h4>-->
    <!--                <p style="color: black;">Thoughtful swimwear, sandals, accessories and more for a salty and sandy summertime.</p>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">-->
    <!--                        <a href="#" style="color: black;">Shop now <i class="fa-solid fa-right-long"></i></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">-->
    <!--                <img src="assets/images/new/men2.webp" alt="" width="100%">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


    <!--Summer denim-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(kids='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #4d96dc;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #faefad; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">




                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Summer denim-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(kids='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #3e74b2;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #faefad; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">




                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Summer denim-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(kids='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #cc4752;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #faefad; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">




                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>







    <!--Style watch-->
    <div class="slideshow mt-5">
        <div class="container">
            <div class="row custom_slideshow_row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 style="color: black;">Style watch</h3>
                    <h4 style="color: black;">Today’s outfit inspiration</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="slideshow custom_slideshow" style="background: #ffffff; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <!--Featured Item-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-left custom_style_watch">
                    <p>
                        <a href="#">
                            <img class="blur-up lazyload" data-src="assets/images/collection/modern-fi-1.jpg" src="assets/images/collection/modern-fi-1.jpg" alt="feature-row__image">
                        </a>
                    </p>
                    <a href="#" class="custom_style_watch_a">
                        <h3 class="h4">by Grimey</h3>
                        <p>4 items</p>
                    </a>
                </div>
                <!--End Featured Item-->
                <!--Featured Item-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-left custom_style_watch">
                    <p>
                        <a href="#">
                            <img class="blur-up lazyload" data-src="assets/images/collection/modern-fi-2.jpg" src="assets/images/collection/modern-fi-2.jpg" alt="feature-row__image">
                        </a>
                    </p>
                    <a href="#" class="custom_style_watch_a">
                        <h3 class="h4">by Grimey</h3>
                        <p>4 items</p>
                    </a>
                </div>
                <!--End Featured Item-->
                <!--Featured Item-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-left custom_style_watch">
                    <p>
                        <a href="#">
                            <img class="blur-up lazyload" data-src="assets/images/collection/modern-fi-3.jpg" src="assets/images/collection/modern-fi-3.jpg" alt="feature-row__image">
                        </a>
                    </p>
                    <a href="#" class="custom_style_watch_a">
                        <h3 class="h4">by Grimey</h3>
                        <p>4 items</p>
                    </a>
                </div>
                <!--End Featured Item-->
            </div>
        </div>
    </div>







    <!--Our best offers for you-->
    <div class="slideshow mt-5">
        <div class="container">
            <div class="row custom_slideshow_row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 style="color: black;">Our best offers for you</h3>
                    <h4 style="color: black;">Reduced for you</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="slideshow custom_slideshow" style="background: #ffffff; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="button-set">
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-left">
                                <!-- product name -->
                                <div class="product-name custom_product_name">
                                    <a href="product-layout-1.html">
                                        <h5 style="color: black;">Quiksilver</h5>
                                        <p style="color: black;">GARDEN PATH - Shiirt - antique black</p>
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price" style="color: #eb0037;">$788.00</span>
                                            <span class="old-price" style="color: black;">$900.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </a>
                                </div>
                                <!-- End product name -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="button-set">
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-left">
                                <!-- product name -->
                                <div class="product-name custom_product_name">
                                    <a href="product-layout-1.html">
                                        <h5 style="color: black;">Quiksilver</h5>
                                        <p style="color: black;">GARDEN PATH - Shiirt - antique black</p>
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price" style="color: #eb0037;">$788.00</span>
                                            <span class="old-price" style="color: black;">$900.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </a>
                                </div>
                                <!-- End product name -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Logo Slider-->
    <div class="section logo-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Our Partners</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="logo-bar">
                        <?php
                        $sql = "SELECT * FROM 	partners  order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $category = $row['name'];
                        ?>
                                <div class="logo-bar__item">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" title="" style="margin-left: 2rem;" />
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Logo Slider-->


</div>
<!--End Body Content-->

<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Summer denim-->
    <?php
    $id = $id + 1;
    $sql = "SELECT * FROM 	category   where ((id=$id)&&(men='yes')) Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $category = $row['name'];

    ?>
            <div class="slideshow mt-5" style="background-color: #cc4752;">
                <div class="container">
                    <div class="row custom_slideshow_row">


                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <h3 style="color: black;"><?php echo $row['title'] ?></h3>

                            <p style="color: black;"><?php echo $row['text'] ?></p>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom_save_now custom_discover_now">
                                    <a href="#" style="color: black;">Discover now <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 text-right">
                            <img src="vendor/assets/image/<?php echo $row['image'] ?>" alt="" width="100%">
                        </div>

                    </div>
                </div>
            </div>
    <?php }
    } ?>
    <div class="slideshow custom_slideshow" style="background: #faefad; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">




                        <?php
                        $sql = "SELECT * FROM 	products where category='$category' order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                $offer = $row['offer'];


                                $price = $row['price'];

                        ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                            <!-- End image -->
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        <div class="button-set">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name custom_product_name">
                                            <a href="product-layout-1.html">
                                                <h5 style="color: black;"><?php echo $row['name'] ?></h5>
                                                <!--<p style="color: black;">GARDEN PATH - Shiirt - antique black</p>-->
                                                product price
                                                <div class="product-price"><?php if ($offer == 0) { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } else { ?>
                                                        <span class="price" style="color: black;">BDT <?php echo $row['offer'] ?>/-</span>
                                                        <span class="old-price" style="color: black;">BDT <?php echo $row['price'] ?>/-</span><?php } ?>

                                                </div>
                                                <!--End product price -->
                                            </a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>







    <!--Style watch-->
    <div class="slideshow mt-5">
        <div class="container">
            <div class="row custom_slideshow_row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 style="color: black;">Style watch</h3>
                    <h4 style="color: black;">Today’s outfit inspiration</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="slideshow custom_slideshow" style="background: #ffffff; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <!--Featured Item-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-left custom_style_watch">
                    <p>
                        <a href="#">
                            <img class="blur-up lazyload" data-src="assets/images/collection/modern-fi-1.jpg" src="assets/images/collection/modern-fi-1.jpg" alt="feature-row__image">
                        </a>
                    </p>
                    <a href="#" class="custom_style_watch_a">
                        <h3 class="h4">by Grimey</h3>
                        <p>4 items</p>
                    </a>
                </div>
                <!--End Featured Item-->
                <!--Featured Item-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-left custom_style_watch">
                    <p>
                        <a href="#">
                            <img class="blur-up lazyload" data-src="assets/images/collection/modern-fi-2.jpg" src="assets/images/collection/modern-fi-2.jpg" alt="feature-row__image">
                        </a>
                    </p>
                    <a href="#" class="custom_style_watch_a">
                        <h3 class="h4">by Grimey</h3>
                        <p>4 items</p>
                    </a>
                </div>
                <!--End Featured Item-->
                <!--Featured Item-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 text-left custom_style_watch">
                    <p>
                        <a href="#">
                            <img class="blur-up lazyload" data-src="assets/images/collection/modern-fi-3.jpg" src="assets/images/collection/modern-fi-3.jpg" alt="feature-row__image">
                        </a>
                    </p>
                    <a href="#" class="custom_style_watch_a">
                        <h3 class="h4">by Grimey</h3>
                        <p>4 items</p>
                    </a>
                </div>
                <!--End Featured Item-->
            </div>
        </div>
    </div>







    <!--Our best offers for you-->
    <div class="slideshow mt-5">
        <div class="container">
            <div class="row custom_slideshow_row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 style="color: black;">Our best offers for you</h3>
                    <h4 style="color: black;">Reduced for you</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="slideshow custom_slideshow" style="background: #ffffff; padding: 2% 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="productSlider grid-products grid-products-hover-gry custom_grid-products">
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="button-set">
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-left">
                                <!-- product name -->
                                <div class="product-name custom_product_name">
                                    <a href="product-layout-1.html">
                                        <h5 style="color: black;">Quiksilver</h5>
                                        <p style="color: black;">GARDEN PATH - Shiirt - antique black</p>
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price" style="color: #eb0037;">$788.00</span>
                                            <span class="old-price" style="color: black;">$900.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </a>
                                </div>
                                <!-- End product name -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image7.jpg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="button-set">
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-left">
                                <!-- product name -->
                                <div class="product-name custom_product_name">
                                    <a href="product-layout-1.html">
                                        <h5 style="color: black;">Quiksilver</h5>
                                        <p style="color: black;">GARDEN PATH - Shiirt - antique black</p>
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="price" style="color: #eb0037;">$788.00</span>
                                            <span class="old-price" style="color: black;">$900.00</span>
                                        </div>
                                        <!-- End product price -->
                                    </a>
                                </div>
                                <!-- End product name -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Logo Slider-->
    <div class="section logo-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Our Partners</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="logo-bar">
                        <?php
                        $sql = "SELECT * FROM 	partners  order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $category = $row['name'];
                        ?>
                                <div class="logo-bar__item">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" title="" style="margin-left: 2rem;" />
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Logo Slider-->


</div>
<!--End Body Content-->

<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>