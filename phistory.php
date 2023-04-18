<?php 

    include "includes/header.php";
    include "includes/menu.php";
    include "includes/sub_menu.php";

?>

<section>
    <div class="container">
        <div class="thread">
            Store / Seasonal Grocery / Gametime Food
        </div>
    </div>
</section>

<section class="container">
    <div class="head-category ">
        <div class="cat">
                <a href="categories.php">Fruits</a>
                <a href="categories.php">Vegetables</a>
                <a href="categories.php">Fish</a>
                <a href="categories.php">Meat</a>
                <a href="categories.php">Paultry</a>
                <a href="categories.php">Beverages</a>
                <a href="categories.php">Food Stuff</a>
                <a href="categories.php">Drinks</a>
                <a href="categories.php">Snacks</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <?php
                include 'includes/acc_widget.php'
            ?>
            <div class="col col-md-8 acc_header">
                <h2 style="margin-bottom:50px">Your Purchase history</h2>
                <!--Displaying these contents only if purchase history is empty-->
                <!--div class="contents text-center" style="margin-top: 90px">
                    <img src="assets/images/img/bigbasket.png" style="width: 200px; margin-bottom: 20px" alt="basket">
                    <h5>No new order</h5>
                    <small>Ckeck again after your next shopping trip!</small>
                </div -->
                <!--Displaying these contents only if purchase history is empty-->


                <div class="basket_header">
                    <div class="row">
                        <div class="col col-md-6" style="font-weight: 600; color: gray">ITEM</div>
                        <div class="col col-md-2 text-center" style="font-weight: 600; color: gray">ORDER NO</div>
                        <div class="col col-md-2 text-center" style="font-weight: 600; color: gray">DATE</div>
                        <div class="col col-md-2 text-center" style="font-weight: 600; color: gray">TOTAL</div>
                    </div>
                </div>

                <div class="baskket_items_list">
                    <div class="card" style="margin-bottom:10px; border: none; border-radius: 20px; box-shadow:0px 0px 8px -2px grey;">
                        <div class="card-content">
                            <div class="card-body" style="padding: 0px !important">
                                <div class="row" >
                                    <div class="col col-md-6 basket_item_right_border">
                                        <div class="row">
                                            <div class="col col-md-2">
                                                <img src="assets/images/products/greenpepper.png" style="max-width: 50px" alt="greenpepper">
                                            </div>
                                            <div class="col col-md-10">
                                                <h5>Fresh Green Organic Pepper</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-2"></div>
                                            <div class="col col-md-10">
                                                <a href="iorders.php">
                                                    <button type="submit" class="delet_basket_item" name=""><i class="far fa-eye"></i> VIEW DETAILS</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-2 basket_item_right_border">
                                        <h6 class="text-center">#16454a</h6>
                                    </div>
                                    <div class="col col-md-2 basket_item_right_border">
                                        <h6 class="text-center">28 MAY 2022</h6>
                                    </div>
                                    <div class="col col-md-2" style="padding: 1.2rem">
                                        <h5 class="text-center" style="color: green">29,650 XAF</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


        </div>
    </div>
</section>


<?php
    include "includes/footer.php" ;
?>