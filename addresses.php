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
                <h2 style="margin-bottom:50px">Your Address</h2>
                
                <div class="baskket_items_list">
                    <div class="card" style="margin-bottom:10px; border: none; border-radius: 20px; box-shadow:0px 0px 8px -2px grey;">
                        <div class="card-content">
                            <div class="card-body" style="padding: 0px !important">
                                <div class="row" >
                                    <div class="col col-md-12" style="padding: 20px; margin-left: 15px">
                                        <h5>SW region, Limbe mile 4. Behind Moukundi Cheif Palace after Pascals Store</h5>
                                        <small>Just around the public tap. House in a black gate</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#addaddress    ">
                        <button type="submit" class="delet_basket_item" name=""><i class="fas fa-plus"></i> ADD ADDRESS</button>
                    </a>
                </div>

                </div>
            </div>
        </section>


        <?php
            include "includes/footer.php" ;
        ?>