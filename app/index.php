<?php 

include "includes/head.php";
include "includes/menu.php";

?>

<div class="main">


<br><br><br>

    <section class="container-fluid">
        <div class="head-category">
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

    <br>

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
                                    <img src="../assets/images/products/greenpepper.png" style="width: 100%; " alt="green pepper">
                                </a>
                            </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <a href="product_view.php" style="color: black">
                                        <p style="margin-bottom: 0rem !important;">Organic fresh green peppers</p>
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
                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
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
                                        <img src="../assets/images/products/redonions.png" style="width: 100%; " alt="green pepper">
                                    </a>
                                </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <a href="product_view.php" style="color: black">
                                        <p style="margin-bottom: 0rem !important;">Red Organic Onions</p>
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
                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
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
                                    <img src="../assets/images/products/mineralwater.jpg" style="width: 100%; " alt="green pepper">
                                </a>
                            </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <a href="product_view.php" style="color: black">
                                        <p style="margin-bottom: 0rem !important;">Supermont Mineral Water 1.5L</p>
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
                                <div class="thirdPrice" style="margin-top: 8px">
                                    <p >
                                        Buy in
                                        <select type="text" class="selectprice" name="selectP" id="methods" required>
                                            <option selected disabled>Select</option>
                                            <option value="sdfgsdf">Retail</option>
                                            <option value="Pallet">Pallet</option>
                                        </select>
                                    </p>
                                </div>

                                <div class="addTobasketBtn sdfgsdf box" id="methodDiv">
                                    <div id="meth">
                                        <input class="btn btn-success" style="width:100%" value="500Frs">
                                        <input class="prcInput" type="number" min="1" minlength="1" style="width:100%" size="50" placeholder="How many?">
                                        <br>
                                        <button class="texts" type="submit">
                                            <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="addTobasketBtn Pallet box" id="method2Div">
                                    <input type="text" class="btn btn-success" style="width:100%" value="4,700Frs">
                                    <input class="prcInput" type="number" min="1" minlength="1" style="width:100%" size="50" placeholder="How many?">
                                    <br>
                                    <button class="texts" type="submit">
                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
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
                                <img src="../assets/images/products/tomatoes.png" style="width: 100%; " alt="green pepper">
                            </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <p style="margin-bottom: 0rem !important;">Organic Fresh Tomatoes</p>
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
                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
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
                                <img src="../assets/images/products/meat.png" style="width: 100%; " alt="green pepper">
                            </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <p style="margin-bottom: 0rem !important;">Cow Meat (Vain)</p>
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
                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
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
                                <img src="../assets/images/products/ginger.png" style="width: 100%; " alt="green pepper">
                            </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <p style="margin-bottom: 0rem !important;">African Ginger Root</p>
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
                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
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
                                <img src="../assets/images/products/maggi.png" style="width: 100%; " alt="green pepper">
                            </div>
                            <div class="col col-sm-6">
                                <div class="prdName">
                                    <p style="margin-bottom: 0rem !important;">Maggi Cube</p>
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
                                        <strong>ADD</strong> <i class="fas fa-shopping-basket" style="black"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </section>






















</div>

    <section>
        <div class="navbar text-center">
            <a style="color: #32bb1a; font-size: 32px" href="#" class="active"><i class="fas fa-store"></i></a>
            <a style="color: #32bb1a; font-size: 32px" href="fastfood-app.php"><i class="fas fa-utensils"></i></a>
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