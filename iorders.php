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
                <h2 style="margin-bottom:50px">Details for order No: #16454a</h2>
                <button onclick="history.back()" style="padding: 5px; border:none; background-color: transparent">
                    <i class="fas fa-chevron-left"></i> Back
                </button>

                <div class="baskket_items_list">
                    <div class="card" style="margin-bottom:10px; border: none; border-radius: 20px; box-shadow:0px 0px 8px -2px grey;">
                        <div class="card-content">
                            <div class="card-body" style="padding: 0px !important">
                                <div class="row" >
                                    <div class="col col-md-8 basket_item_right_border" style="border-right:none !important">
                                        <div class="row">
                                            <div class="col col-md-3">
                                                <img src="assets/images/products/greenpepper.png" style="max-width: 100%" alt="greenpepper">
                                            </div>
                                            <div class="col col-md-9">
                                                <h5>Fresh Green Organic Pepper</h5>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: -65px;">
                                            <div class="col col-md-3"></div>
                                            <div class="col col-md-9">
                                                Quantity: 1
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-3"></div>
                                            <div class="col col-md-9">
                                               Amount: 29,650 Frs
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-4 basket_item_right_border" style="border-right:none !important">
                                        <input type="submit" class="btn btn-warning" value="BUY AGAIN">
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