<?php 

include "includes/head.php";
include "includes/menu.php";

?>

<div class="main">


<br><br><br>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-2" style="padding-right: 0px; margin-right: -30px;">
                    <b>Food</b> (43)
                </div>
                <!--div class="col col-md-6">
                    <div class="slider">
                        <img src="assets/images/banners/banner.png" alt="">
                    </div>
                </div-->
                <div class="col col-md-10" style="padding-left: 0px; margin-top: -3px;">
                    <form action="#search" method="GET" class="sort" style=" color: black;">
                        <b>Sort by</b> | 
                        <select class="sortby" name="" id="">
                            <option value="All">All</option>
                            <option value="Most Sold">Most Sold</option>
                            <option value="Price: High to Low">Price: High to Low</option>
                            <option value="Price: Low to High">Price: Low to High</option>
                        </select>
                        <input type="submit" value="Go" class="filter">
                    </form>
                </div>
            </div>
        </div>
    </section>

   <br>
   
   <section>
        <div class="container-fluid"  style="background-color: white; ">
            <div class="row">
                <div class="col col-sm-12">
                    <form action="#buy" method="POST">
                        <div class="row">
                            <div class="col col-sm-6">
                                <a href="product_view.php">
                                    <img src="../assets/images/fastfood/ricemeat.jpg" style="width: 100%; " alt="green pepper">
                                </a>
                            </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <a href="product_view.php" style="color: black">
                                        <p style="margin-bottom: 0rem !important;">Fried Rice and Meat</p>
                                    </a>
                                    <div class="ratings">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="ratingCnt">(56)</span>
                                    </div>
                                </div>
                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                </div>
                                <div class="addTobasketBtn">
                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How many?">
                                    <button class="texts" type="submit">
                                        <strong>ORDER</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col col-sm-12">
                    <form action="#buy" method="POST">
                        <div class="row">
                                <div class="col col-sm-6">
                                    <a href="product_view.php">
                                        <img src="../assets/images/fastfood/ricechicken.jpg" style="width: 100%; " alt="green pepper">
                                    </a>
                                </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <a href="product_view.php" style="color: black">
                                        <p style="margin-bottom: 0rem !important;">Fried Rice & Chicken</p>
                                    </a>
                                    <div class="ratings">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="ratingCnt">(56)</span>
                                    </div>
                                </div>
                                <div class="priceVar" style="color: #666666; margin-top:0px; font-size: 12px">
                                    <em>Min. Price per product <strong>50frs</strong></em> 
                                </div>
                                <div class="addTobasketBtn">
                                    <input class="prcInput" type="number" minlength="1" size="50" placeholder="How much?">
                                    <button class="texts" type="submit">
                                        <strong>ORDER</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <hr>
            
        </div>
   </section>






















</div>

    <section>
        <div class="navbar text-center">
            <a style="color: #32bb1a; font-size: 32px" href="index.php"><i class="fas fa-store"></i></a>
            <a style="color: #32bb1a; font-size: 32px" href="#" class="active"><i class="fas fa-utensils"></i></a>
            <a style="color: #32bb1a; font-size: 32px" href="upload-mk-list.php"><i class="fas fa-clipboard-list"></i></a>
            <a style="color: #32bb1a; font-size: 32px" href="#contact"><i class="far fa-user"></i></a>
            <a style="color: #32bb1a; font-size: 32px" href="basket.php">
                <i class="fas fa-shopping-basket"></i>
                <button class="basket_item">32</button>
            </a>
        </div>
    </section>

<?php 

include "includes/footer.php";

?>