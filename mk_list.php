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
                <h2 style="margin-bottom:50px">Uploaded market list</h2>
                <!--Displaying these contents only if purchase history is empty-->
                <!--div class="contents text-center" style="margin-top: 90px">
                    <img src="assets/images/img/bigbasket.png" style="width: 200px; margin-bottom: 20px" alt="basket">
                    <h5>No new order</h5>
                    <small>Ckeck again after your next shopping trip!</small>
                </div -->
                <!--Displaying these contents only if purchase history is empty-->
                
                <div class="baskket_items_list">
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/images/img/mk_list/list1.jpg">
                                <img src="assets/images/img/mk_list/list1.jpg" alt="List" width="100" height="100">
                            </a>
                            
                            <div class="desc"><i class="fas fa-upload text-center"></i> <br> Uploaded on <b>28/05/22</b></div>
                        </div>
                    </div>

                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/images/img/mk_list/list2.jpg">
                                <img src="assets/images/img/mk_list/list2.jpg" alt="List" width="100" height="100">
                            </a>
                            
                            <div class="desc"><i class="fas fa-upload text-center"></i> <br> Uploaded on <b>28/05/22</b></div>
                        </div>
                    </div>

                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/images/img/mk_list/list3.jpg">
                                <img src="assets/images/img/mk_list/list3.jpg" alt="List" width="100" height="100">
                            </a>
                            
                            <div class="desc"><i class="fas fa-upload text-center"></i> <br> Uploaded on <b>28/05/22</b></div>
                        </div>
                    </div>

                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="assets/images/img/mk_list/list4.jpg">
                                <img src="assets/images/img/mk_list/list4.jpg" alt="List" width="100" height="100">
                            </a>
                            
                            <div class="desc"><i class="fas fa-upload text-center"></i> <br> Uploaded on <b>28/05/22</b></div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </section>


        <?php
            include "includes/footer.php" ;
        ?>