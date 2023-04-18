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
                <h2>Welcome to your account</h2>
                <div class="contents" style="margin-top: 55px">
                    <a href="phistory.php">
                        <div class="cardshrt_cut">
                            <div class="card-content">
                                <div class="card-body">
                                    <h5>
                                        <i class="fas fa-history" style="margin-right:10px"></i> 
                                        Purchase history 
                                        <i class="fas fa-chevron-right" style="float:right; font-weight:700"></i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="contents" style="margin-top: 55px">
                    <div class="cardshrt_cut">
                        <div class="card-content">
                            <div class="card-body">
                                <a href="">
                                    <h5>
                                        <i class="fas fa-wallet" style="margin-right:10px"></i> 
                                        Payment methods
                                        <i class="fas fa-chevron-right" style="float:right; font-weight:700"></i>
                                    </h5>
                                </a>
                                <small>Learn more about <a href="#change" style="text-decoration: underline">OHIPS Change</a>. We also accept the following payment methods</small> <br><br>
                                <img src="assets/images/img/ochange.png" style="max-width: 135px;" alt="">
                                <img src="assets/images/img/momo.png" style="max-width: 135px;" alt="">
                                <img src="assets/images/img/orangemoney.png" style="max-width: 135px;" alt="">
                                <img src="assets/images/img/cash.png" style="max-width: 135px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="contents" style="margin-top: 55px">
                    <div class="cardshrt_cuth">
                        <div class="card-content">
                            <div class="card-header" style="background-color: #ebf9f2">
                                <a href="per_info.php">
                                    <h5>
                                        <i class="fas fa-wallet" style="margin-right:10px"></i> 
                                            Account info
                                        <i class="fas fa-chevron-right" style="float:right; font-weight:700"></i>
                                    </h5>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-md-6" style="border-right:1px solid #e0e0e0">
                                        <h5>Full Name</h5>
                                        Sama Yanick Ndasi
                                    </div>
                                    <div class="col col-md-6">
                                        <h5>Telephone Number</h5>
                                        +237 653 766 939
                                    </div>
                                </div>
                                    <hr>
                                <div class="row">
                                    <div class="col col-md-12">
                                        <h5>Address</h5>
                                        Mile 4, behind cheif palace after pascals store.
                                    </div>
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