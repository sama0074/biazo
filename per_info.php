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
                <h2 style="margin-bottom:50px">Personal Info</h2>
                
                        <div class="card" style="border: none; border-radius: 20px; box-shadow:0px 0px 8px -2px grey;">
                            <div class="card-content">
                                <div class="card-body">
                                    <h5>Your personal information</h5>

                                    <div class="row">
                                        <div class="col col-md-6">
                                            <div class="pinfo1">
                                                <small>Your First name</small> <br>
                                                <input type="text" class="pinfos" value="Sama">
                                                <a href="#">Update</a>
                                            </div>
                                            <br>
                                            <div class="pinfo1">
                                                <small>Your Last name</small> <br>
                                                <input type="text" class="pinfos" value="Yanick Ndasi">
                                                <a href="#">Update</a>
                                            </div>
                                        </div>

                                        <div class="col col-md-6">
                                            <div class="pinfo1">
                                                <small>Your Telephone No</small> <br>
                                                <input type="text" class="pinfos" value="653 766 939">
                                                <a href="#">Update</a>
                                            </div>
                                            <br>
                                            <div class="pinfo1">
                                                <small>Your Password</small> <br>
                                                <input type="password" class="pinfos" value="Yanick Ndasi">
                                                <a href="#">Update</a>
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