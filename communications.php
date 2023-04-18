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
                <h2>Messages</h2>
                    <br>
                <div class="contents">
                    <div class="cardshrt_cut">
                        <div class="card-content">
                            <div class="card-body">
                                <h5>
                                    Order Received
                                    <span style="float:right;font-size: 14px; font-weight:300">26/01/2022</span>
                                </h5>
                                <small>Thank you very much Sama, this is to let you know that your order <b>No: #76638</b> has been received. </small> <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                    <br>
                <div class="contents">
                    <div class="cardshrt_cut">
                        <div class="card-content">
                            <div class="card-body">
                                <h5>
                                    Order Received
                                    <span style="float:right;font-size: 14px; font-weight:300">26/01/2022</span>
                                </h5>
                                <small>Thank you very much Sama, this is to let you know that your order has been received. </small> <br><br>
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