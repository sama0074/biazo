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
                <h2 style="margin-bottom:50px">Your <em>"chicken change"</em> account</h2>
                <div class="row acc_balance"> 
                    <div class="col col-md-12">
                        <div class="">
                            <img src="assets/images/img/occemblem.png" style=" width: 50px; position: absolute;" alt=""> 
                            <span style="margin-left:50px;position:absolute; font-weight:300; ">Balance</span>
                            <p style="padding-top: 20px; text-indent: 65px; font-size: 4rem; font-weight: 600;">99,250,250,250</p>
                            <br><br>

                            <p><i class="far fa-id-badge" style="margin-right:10px"></i> Name: <b style="color: white">Sama Yanick Ndasi</b></p>
                            <p><i class="fas fa-signature" style="margin-right:10px"></i> Wallet ID: <b style="color: white">OCC@sama_ohips</b></p>
                            <p><i class="far fa-user" style="margin-right:10px"></i> User: <b style="color: white">653766939</b></p>
                            <p><i class="fas fa-lock-open" style="margin-right:10px"></i></i> Pin: 
                                <button class="btn btn-warning" style="color: white; font-weight:700">Activate</button>
                            </p>
                        </div>
                    </div>
                </div>
               

              
                


        </div>
    </div>
</section>


<?php
    include "includes/footer.php" ;
?>