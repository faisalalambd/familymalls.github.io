<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>
<?php
include('login.php'); // Includes Login Script
if(!isset($_SESSION['login_user'])){
header("location: user_login.php"); // Redirecting To Profile Page
}

?>


<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Your Bag</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                <form action="#" method="post" class="cart style2">
                    <table>
                        <thead class="cart__row cart__header">
                            <tr>
                                <th colspan="2" class="text-center">Product</th>
                                <th class="text-center">Price</th>
                               
                                
                                <th class="action">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $price=0;
                            $sql = "SELECT * FROM  orderlist where ((c_email='$login_session')&&(status='cart'))";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                        $price+=$row['p_price'];?>
                            <tr class="cart__row border-bottom line1 cart-flex border-top">
                                <td class="cart__image-wrapper cart-flex-item">
                                    <a href="#"><img class="cart__image" src="vendor/assets/image/<?php echo $row['p_image']?>" alt="Elastic Waist Dress - Navy / Small"></a>
                                </td>
                                <td class="cart__meta small--text-left cart-flex-item">
                                    <div class="list-view-item__title">
                                        <a href="#"><?php echo $row['p_name']?> </a>
                                    </div>
                                </td>
                                <td class="cart__price-wrapper cart-flex-item">
                                    <span class="money">BDT <?php echo $row['p_price']?></span>
                                </td>
                                
                               
                                <td class="text-center small--hide"><a href="delete_cart.php?id=<?php echo $row['id']?>" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                            </tr>
                    
                    <?php }}?>
                         
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-left"><a href="http://annimexweb.com/" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                <td colspan="3" class="text-right"><button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="currencymsg">We processes all orders in USD. While the content of your cart is currently displayed in USD, the checkout will use USD at the most current exchange rate.</div>
                    <hr>
                

                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                <div class="cart-note">
                    <div class="solid-border">
                        <h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note to your order</label></h5>
                        <textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
                    </div>
                </div>
                <div class="solid-border">
                    <div class="row">
                        <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">BDT <?php echo $price?>/-</span></span>
                    </div>
                    <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                    <p class="cart_tearm">
                        <label>
                            <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                            I agree with the terms and conditions</label>
                    </p>
                    <a href="check_out.php" class="btn btn--small-wide checkout">Check Out</a>
                    <!--<input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout" disabled="disabled">-->
                    <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                </div>

            </div>
        </div>
    </div>

</div>
<!--End Body Content-->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>